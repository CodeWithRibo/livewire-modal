<div>
    <form wire:submit="updateTask()">
        <div class="pb-5">
            <x-text-input wire:model.live="title" placeholder="Title"></x-text-input>
            <div>@error('title') {{ $message }} @enderror</div>
        </div>

        <div class="pb-2">
            <x-text-input wire:model.live="description" placeholder="Description"></x-text-input>
            <div>@error('description') {{ $message }} @enderror</div>
        </div>

        <x-primary-button>Update</x-primary-button>
    </form>
</div>
