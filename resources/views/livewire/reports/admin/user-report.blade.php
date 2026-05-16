<div class="space-y-6">
    <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
            {{ $roleFilter === 'counsellor' ? 'Counsellors & Professionals' : 'Registered Students' }}
        </h2>

        <div class="flex gap-2">
            <x-button label="Counsellors" wire:click="$set('roleFilter', 'counsellor')" :primary="$roleFilter === 'counsellor'"
                :flat="$roleFilter !== 'counsellor'" />
            <x-button label="Students" wire:click="$set('roleFilter', 'student')" :primary="$roleFilter === 'student'" :flat="$roleFilter !== 'student'" />
        </div>
    </div>

    <div class="flex justify-between items-center gap-4">
        <div class="w-full max-w-md">
            <x-input icon="magnifying-glass" wire:model.live.debounce.300ms="search" placeholder="Search users..." />
        </div>
    </div>

    <div
        class="bg-white dark:bg-zinc-800 shadow rounded-lg overflow-hidden border border-gray-200 dark:border-zinc-700">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-zinc-700">
                <thead class="bg-gray-50 dark:bg-zinc-900">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Email</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Role</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Joined</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-zinc-800 divide-y divide-gray-200 dark:divide-zinc-700">
                    @forelse ($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $user->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                                    {{ ucfirst($user->getRoleNames()->first()) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                {{ $user->created_at->format('M d, Y') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                No users found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 dark:border-zinc-700">
            {{ $users->links() }}
        </div>
    </div>
</div>
