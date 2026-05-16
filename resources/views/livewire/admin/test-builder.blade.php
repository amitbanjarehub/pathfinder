<div class="max-w-8xl mx-auto p-6 bg-white dark:bg-zinc-800 ">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 dark:text-gray-200">
        {{ $test ? 'Edit Test' : 'Create New Test' }}</h2>

    <form wire:submit="save">
        <!-- Basic Info -->
        <div class="mb-8">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Basic Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-input label="Title" wire:model="title" />

                <x-native-select label="Type" wire:model="type">
                    <option value="aptitude">Aptitude</option>
                    <option value="psychometric">Psychometric</option>
                </x-native-select>

                <div class="md:col-span-2">
                    <x-textarea label="Description" wire:model="description" rows="3" />
                </div>

                <x-input label="Test Code" wire:model="code" />

                <div class="flex items-center mt-6 gap-4">
                    <x-checkbox label="Active" wire:model="is_active" />
                    <x-checkbox label="Free Test" wire:model="is_free" />
                </div>
            </div>
        </div>

        <!-- Pricing -->
        <div class="mb-8">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Pricing (INR)</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach (['student', 'counsellor', 'professional', 'institute'] as $role)
                    <x-input type="number" step="0.01" label="{{ ucfirst($role) }} Price"
                        wire:model="prices.{{ $role }}" />
                @endforeach
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <x-button href="{{ route('tests') }}" label="Cancel" wire:navigate />
            <x-button type="submit" primary label="Save Test" />
        </div>
    </form>

    @if ($test && $test->exists)
        <div class="mt-8">
            <livewire:admin.test-structure-manager :test="$test" :key="'structure-' . $test->id" />
        </div>
    @endif
</div>
