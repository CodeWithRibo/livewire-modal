<div class="p-20">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Hello!</h3>
        <div class="modal-action">
            <form wire:submit.prevent="saveTask">
                <div class="pb-5">
                    <x-text-input wire:model.live="title" placeholder="Title"></x-text-input>
                    <div>@error('title') {{ $message }} @enderror</div>
                </div>
                <div class="pb-2">
                    <x-text-input wire:model.live="description" placeholder="Description"></x-text-input>
                    <div>@error('description') {{ $message }} @enderror</div>
                </div>
                <x-primary-button
                    wire:target="saveTask"
                    wire:loading.attr="disabled">Submit</x-primary-button>
            </form>
        </div>
    </div>
</div>
