<x-layouts.app :title="__('Manage Questions')">
    <livewire:admin.question-manager :part="$part" :key="'questions-' . $part->id" />
</x-layouts.app>
