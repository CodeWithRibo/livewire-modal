<?php

namespace App\Livewire\Modals;

use App\Models\Task;
use LivewireUI\Modal\ModalComponent;

class SomeModal extends ModalComponent
{
    public $task;

    public function mount($task): void
    {
      $this->task = Task::findOrFail($task);
    }

    public function render(Task $task)
    {
        return view('livewire.modals.some-modal', compact('task'));
    }
}
