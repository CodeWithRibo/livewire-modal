<div class="p-6 sm:p-10">
    <form wire:submit.prevent="delete" class="space-y-6">
        <div class="flex flex-col items-center text-center space-y-3">
            <div class="flex items-center justify-center w-16 h-16 rounded-full bg-red-100 text-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </div>

            <h2 class="text-lg font-semibold text-gray-900">Delete Task</h2>
            <p class="text-sm text-gray-600">
                Are you sure you want to delete this task? This action cannot be undone.
            </p>
        </div>

        <!-- Action buttons -->
        <div class="flex justify-center gap-4">
            <x-secondary-button wire:click="$dispatch('closeModal')" class="px-6 py-2">
                Cancel
            </x-secondary-button>
            <x-danger-button class="px-6 py-2">
                Confirm
            </x-danger-button>
        </div>
    </form>
</div>
