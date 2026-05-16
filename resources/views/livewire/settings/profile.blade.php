<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;

new class extends Component {
    public string $name = '';
    public string $email = '';
    public array $profile_data = [];

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->profile_data = $user->profile_data ?? [];
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'profile_data' => ['nullable', 'array'],
        ]);

        $user->fill([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'profile_data' => $validated['profile_data'] ?? [],
        ]);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->dispatch('profile-updated', name: $user->name);
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function resendVerificationNotification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }
}; ?>

<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
            <flux:input wire:model="name" :label="__('Name')" type="text" required autofocus autocomplete="name"
                readonly />

            <div>
                <flux:input wire:model="email" :label="__('Email')" type="email" required autocomplete="email"
                    readonly />

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
                    <div>
                        <flux:text class="mt-4">
                            {{ __('Your email address is unverified.') }}

                            <flux:link class="text-sm cursor-pointer"
                                wire:click.prevent="resendVerificationNotification">
                                {{ __('Click here to re-send the verification email.') }}
                            </flux:link>
                        </flux:text>

                        @if (session('status') === 'verification-link-sent')
                            <flux:text class="mt-2 font-medium !dark:text-green-400 !text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </flux:text>
                        @endif
                    </div>
                @endif
            </div>

            {{-- Role Based Fields --}}
            @role('counsellor|professional')
                <div class="space-y-6 border-t pt-6 dark:border-zinc-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Professional Details') }}</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <flux:input wire:model="profile_data.city" :label="__('City')" type="text" />
                        <flux:input wire:model="profile_data.mobile" :label="__('Mobile Number')" type="tel" />
                    </div>

                    <flux:textarea wire:model="profile_data.bio" :label="__('Short Bio')" rows="3" />

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <flux:input wire:model="profile_data.upi_id" :label="__('UPI ID (Optional)')" type="text" />
                        <flux:input wire:model="profile_data.degree" :label="__('Degree/Certificate')" type="text" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <flux:input wire:model="profile_data.experience" :label="__('Experience (Years)')" type="number" />
                        <flux:input wire:model="profile_data.availability" :label="__('Day Availability')" type="text"
                            placeholder="e.g. Mon-Fri, 9AM-5PM" />
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Offered Services') }}</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <flux:input wire:model="profile_data.services_institute" :label="__('For Institute')"
                                type="text" />
                            <flux:input wire:model="profile_data.services_professional" :label="__('For Professional')"
                                type="text" />
                            <flux:input wire:model="profile_data.services_student" :label="__('For Student')"
                                type="text" />
                        </div>
                    </div>
                </div>
            @endrole

            @role('institute')
                <div class="space-y-6 border-t pt-6 dark:border-zinc-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Institute Details') }}</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <flux:input wire:model="profile_data.institute_name" :label="__('Institute Name')"
                            type="text" />
                        <flux:input wire:model="profile_data.institute_code"
                            :label="__('Institute Code (UDISE/School Code)')" type="text" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <flux:input wire:model="profile_data.official_email" :label="__('Official Email')"
                            type="email" />
                        <flux:input wire:model="profile_data.mobile" :label="__('Mobile Number')" type="tel" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <flux:input wire:model="profile_data.telephone" :label="__('Telephone Number')" type="tel" />
                        <flux:input wire:model="profile_data.city" :label="__('City')" type="text" />
                    </div>

                    <flux:textarea wire:model="profile_data.address" :label="__('Address')" rows="2" />
                    <flux:textarea wire:model="profile_data.about" :label="__('About Institute')" rows="3" />

                    <div class="border-t border-gray-200 dark:border-zinc-700 pt-4">
                        <h4 class="text-md font-medium text-gray-800 dark:text-gray-200 mb-4">
                            {{ __('Principal/Head Details') }}</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.principal_name" :label="__('Full Name')" type="text" />
                            <flux:input wire:model="profile_data.principal_email" :label="__('Email')" type="email" />
                        </div>
                    </div>

                    <div class="border-t border-gray-200 dark:border-zinc-700 pt-4">
                        <h4 class="text-md font-medium text-gray-800 dark:text-gray-200 mb-4">
                            {{ __('Co-ordinator Details') }}</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <flux:input wire:model="profile_data.coordinator_name" :label="__('Full Name')"
                                type="text" />
                            <flux:input wire:model="profile_data.coordinator_mobile" :label="__('Mobile')"
                                type="tel" />
                            <flux:input wire:model="profile_data.coordinator_email" :label="__('Email')"
                                type="email" />
                        </div>
                    </div>
                </div>
            @endrole

            @role('student')
                <div class="space-y-8 border-t pt-6 dark:border-zinc-700">
                    <!-- Personal Details -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Personal Details') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.dob" :label="__('Date of Birth')" type="date" />
                            <flux:select wire:model="profile_data.gender" :label="__('Gender')"
                                placeholder="Select Gender">
                                <flux:select.option value="male">{{ __('Male') }}</flux:select.option>
                                <flux:select.option value="female">{{ __('Female') }}</flux:select.option>
                                <flux:select.option value="other">{{ __('Other') }}</flux:select.option>
                            </flux:select>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.father_name" :label="__('Father\'s Name')"
                                type="text" />
                            <flux:input wire:model="profile_data.mother_name" :label="__('Mother\'s Name')"
                                type="text" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.city" :label="__('City')" type="text" />
                            <flux:input wire:model="profile_data.mobile" :label="__('Mobile Number')" type="tel" />
                        </div>
                    </div>

                    <!-- Academic Details -->
                    <div class="space-y-4 border-t pt-4 dark:border-zinc-700">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Academic Details') }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.school_name" :label="__('School/College/Institute')"
                                type="text" />
                            <flux:input wire:model="profile_data.current_class" :label="__('Currently Studying in')"
                                type="text" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.previous_percentage"
                                :label="__('Previous Class Percentage (%)')" type="number" step="0.01" />
                            <flux:input wire:model="profile_data.dream_career" :label="__('Aspiration - Dream Career')"
                                type="text" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.fav_subject" :label="__('Favourite Subject')"
                                type="text" />
                            <flux:input wire:model="profile_data.non_fav_subject" :label="__('Non-Favourite Subject')"
                                type="text" />
                        </div>
                        <flux:textarea wire:model="profile_data.achievements"
                            :label="__('Academic and Non-Academic Achievements')" rows="2" />
                    </div>

                    <!-- Case History I -->
                    <div class="space-y-4 border-t pt-4 dark:border-zinc-700">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Case History I') }}</h3>
                        <flux:textarea wire:model="profile_data.vision_5_10_years"
                            :label="__('Where do you want to see yourself in next 5-10 years?')" rows="2" />
                        <flux:textarea wire:model="profile_data.hobbies" :label="__('Hobbies and Interests')"
                            rows="2" />

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.fav_color" :label="__('Favourite Color')"
                                type="text" />
                            <flux:input wire:model="profile_data.fav_food" :label="__('Favourite Food')"
                                type="text" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:textarea wire:model="profile_data.strengths" :label="__('Strengths')" rows="2" />
                            <flux:textarea wire:model="profile_data.weaknesses" :label="__('Weaknesses')"
                                rows="2" />
                        </div>
                        <flux:input wire:model="profile_data.social_media_time"
                            :label="__('How much time you devote to social media/mobile phone?')" type="text" />
                    </div>

                    <!-- Case History II -->
                    <div class="space-y-4 border-t pt-4 dark:border-zinc-700">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Case History II') }}</h3>
                        <flux:textarea wire:model="profile_data.movie_preferences"
                            :label="__('What kind of movies & videos do you prefer to watch?')" rows="2" />

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.position_1" :label="__('Position')" type="text" />
                            <flux:input wire:model="profile_data.experience_1" :label="__('Experience')"
                                type="text" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.position_2" :label="__('Position 2')" type="text" />
                            <flux:input wire:model="profile_data.experience_2" :label="__('Experience 2')"
                                type="text" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <flux:input wire:model="profile_data.position_3" :label="__('Position 3')" type="text" />
                            <flux:input wire:model="profile_data.experience_3" :label="__('Experience 3')"
                                type="text" />
                        </div>
                    </div>
                </div>
            @endrole

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full" data-test="update-profile-button">
                        {{ __('Save') }}
                    </flux:button>
                </div>

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>

        <livewire:settings.delete-user-form />
    </x-settings.layout>
</section>
