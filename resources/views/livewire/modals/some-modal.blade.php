<div>
    <x-secondary-button wire:click="$dispatch('openModal', { component: 'task.delete', arguments: { task: {{$task->id}} }})">
        Delete
    </x-secondary-button>
</div>
