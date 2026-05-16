<div class="max-w-4xl">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">{{ __('Site Settings') }}</h2>
        <p class="text-gray-600 dark:text-gray-400">{{ __('Configure site-wide settings') }}</p>
    </div>

    @if (session('success'))
        <div
            class="mb-6 p-4 bg-green-100 dark:bg-green-900/30 border border-green-300 dark:border-green-700 rounded-lg text-green-700 dark:text-green-300">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit="save" class="space-y-8">
        <!-- Auth Background Image -->
        <div class="bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-zinc-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">{{ __('Login Page Background') }}</h3>

            <div class="space-y-4">
                <!-- Current Image Preview -->
                @if ($currentAuthBackground)
                    <div>
                        <label
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Current Background') }}</label>
                        <div
                            class="relative w-full max-w-md h-48 rounded-lg overflow-hidden border border-gray-200 dark:border-zinc-600">
                            <img src="{{ Storage::url($currentAuthBackground) }}" alt="Current Auth Background"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                @else
                    <div class="p-4 bg-gray-50 dark:bg-zinc-700 rounded-lg text-gray-500 dark:text-gray-400 text-sm">
                        {{ __('No custom background set. Using default image.') }}
                    </div>
                @endif

                <!-- Upload New Image -->
                <div>
                    <label
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Upload New Background') }}</label>
                    <input type="file" wire:model="authBackgroundImage" accept="image/*"
                        class="block w-full text-sm text-gray-500 dark:text-gray-400
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-lg file:border-0
                            file:text-sm file:font-semibold
                            file:bg-primary-50 dark:file:bg-primary-900/30 file:text-primary-700 dark:file:text-primary-300
                            hover:file:bg-primary-100 dark:hover:file:bg-primary-900/50
                            cursor-pointer">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                        {{ __('Recommended: 1920x1080 or larger. Max 5MB.') }}</p>
                    @error('authBackgroundImage')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- New Image Preview -->
                @if ($authBackgroundImage)
                    <div>
                        <label
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('New Image Preview') }}</label>
                        <div
                            class="relative w-full max-w-md h-48 rounded-lg overflow-hidden border-2 border-primary-500">
                            <img src="{{ $authBackgroundImage->temporaryUrl() }}" alt="New Auth Background"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Save Button -->
        <div class="flex justify-end">
            <button type="submit"
                class="px-6 py-3 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 transition-colors shadow-sm"
                wire:loading.attr="disabled" wire:loading.class="opacity-50 cursor-not-allowed">
                <span wire:loading.remove>{{ __('Save Settings') }}</span>
                <span wire:loading>{{ __('Saving...') }}</span>
            </button>
        </div>
    </form>
</div>
