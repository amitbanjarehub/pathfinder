<div>
    @if (session('error'))
        <div class="mb-6 bg-red-500/20 border border-red-500/50 text-red-100 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    @if (!$test)
        <div class="text-center">
            <h2 class="text-2xl font-bold text-white mb-6">{{ __('Enter Test Code') }}</h2>
            <p class="text-white/80 mb-6">{{ __('Enter your unique test code to begin the assessment') }}</p>

            <form wire:submit="findTestByCode" class="max-w-md mx-auto">
                <div class="mb-6">
                    <input type="text" wire:model="testCode" placeholder="{{ __('Enter Test Code') }}"
                        class="block w-full text-center text-3xl font-mono tracking-wider px-4 py-4 rounded-lg bg-white/20 backdrop-blur-sm border-2 border-white/30 text-white placeholder-white/50 focus:border-white focus:ring-2 focus:ring-white/50 uppercase">
                    @error('testCode')
                        <span class="text-red-300 text-sm block mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full px-6 py-4 bg-white text-indigo-900 rounded-lg hover:bg-white/90 transition-all font-semibold text-lg shadow-xl">
                    {{ __('Find Test') }}
                </button>
            </form>
        </div>
    @else
        <div class="text-center">
            <div class="mb-8">
                <h3 class="text-3xl font-bold text-white mb-3">{{ $test->title }}</h3>
                <p class="text-white/80 text-lg">{{ $test->description }}</p>
            </div>

            <div class="bg-white/10 rounded-xl p-6 mb-8 max-w-md mx-auto">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-white/60 mb-1">{{ __('Type') }}</p>
                        <p class="text-2xl font-bold text-white">{{ ucfirst($test->type) }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-white/60 mb-1">{{ __('Sections') }}</p>
                        <p class="text-2xl font-bold text-white">{{ $test->sections->count() }}</p>
                    </div>
                </div>
            </div>

            @guest
                <div class="max-w-xl mx-auto mb-8 bg-white/10 rounded-xl p-6 backdrop-blur-sm border border-white/20">
                    <h4 class="text-xl font-semibold text-white mb-4 text-left">{{ __('Guest Details') }}</h4>
                    <p class="text-white/70 text-sm mb-6 text-left">{{ __('Please provide your details to continue.') }}
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left">
                        <div>
                            <label class="block text-white/80 text-sm font-medium mb-1">{{ __('Full Name') }}</label>
                            <input type="text" wire:model="guest_details.name"
                                class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-white/50 focus:ring-2 focus:ring-white/50 focus:border-white/50">
                            @error('guest_details.name')
                                <span class="text-red-300 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-white/80 text-sm font-medium mb-1">{{ __('Email') }}</label>
                            <input type="email" wire:model="guest_details.email"
                                class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-white/50 focus:ring-2 focus:ring-white/50 focus:border-white/50">
                            @error('guest_details.email')
                                <span class="text-red-300 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-white/80 text-sm font-medium mb-1">{{ __('Mobile Number') }}</label>
                            <input type="tel" wire:model="guest_details.mobile"
                                class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-white/50 focus:ring-2 focus:ring-white/50 focus:border-white/50">
                            @error('guest_details.mobile')
                                <span class="text-red-300 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div>
                            <label class="block text-white/80 text-sm font-medium mb-1">{{ __('City') }}</label>
                            <input type="text" wire:model="guest_details.city"
                                class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-white/50 focus:ring-2 focus:ring-white/50 focus:border-white/50">
                            @error('guest_details.city')
                                <span class="text-red-300 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label
                                class="block text-white/80 text-sm font-medium mb-1">{{ __('School / Institute (Optional)') }}</label>
                            <input type="text" wire:model="guest_details.school"
                                class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-white/50 focus:ring-2 focus:ring-white/50 focus:border-white/50">
                            @error('guest_details.school')
                                <span class="text-red-300 text-xs">{{ $message }}</span>
                            @enderror
                        </div> --}}

                        <div>
                            <label class="block text-white/80 text-sm font-medium mb-1">
                                {{ __('Pincode') }}
                            </label>

                            <input type="text" wire:model="guest_details.pincode"
                                class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-white/50 focus:ring-2 focus:ring-white/50 focus:border-white/50">

                            @error('guest_details.pincode')
                                <span class="text-red-300 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-white/80 text-sm font-medium mb-1">
                                {{ __('Qualification') }}
                            </label>

                            <select wire:model="guest_details.qualification"
                                class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white focus:ring-2 focus:ring-white/50 focus:border-white/50">

                                <option value="" class="text-black">Select Qualification</option>

                                <option value="Class 3rd to 5th" class="text-black">
                                    Class 3rd to 5th
                                </option>

                                <option value="Class 6th to 8th" class="text-black">
                                    Class 6th to 8th
                                </option>

                                <option value="Class 9th to 10th" class="text-black">
                                    Class 9th to 10th
                                </option>

                                <option value="Class 11th to 12th" class="text-black">
                                    Class 11th to 12th
                                </option>

                                <option value="Graduation" class="text-black">
                                    Graduation
                                </option>

                                <option value="Post Graduation" class="text-black">
                                    Post Graduation
                                </option>
                            </select>

                            @error('guest_details.qualification')
                                <span class="text-red-300 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-white/80 text-sm font-medium mb-1">
                                {{ __('Address') }}
                            </label>

                            <textarea wire:model="guest_details.address" rows="3"
                                class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-white/50 focus:ring-2 focus:ring-white/50 focus:border-white/50"></textarea>

                            @error('guest_details.address')
                                <span class="text-red-300 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            @endguest

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button wire:click="$set('test', null)"
                    class="px-8 py-4 bg-white/20 backdrop-blur-sm text-white rounded-lg hover:bg-white/30 transition-all font-semibold border-2 border-white/30">
                    {{ __('Change Code') }}
                </button>
                <button wire:click="startTest"
                    class="px-8 py-4 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-all font-semibold shadow-xl text-lg">
                    {{ __('Start Test Now') }} →
                </button>
            </div>

            @guest
                <p class="text-white/60 text-sm mt-6">
                    {{ __('Have an account?') }}
                    <a href="{{ route('login') }}"
                        class="text-white underline hover:text-white/80">{{ __('Login here') }}</a>
                </p>
            @endguest
        </div>
    @endif
</div>
