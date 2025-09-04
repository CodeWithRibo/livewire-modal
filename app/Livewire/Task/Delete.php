<?php

namespace App\Livewire\Task;
use LivewireUI\Modal\ModalComponent;
use App\Models\Task;
class Delete extends ModalComponent
{

    public $task;

    public function mount(Task $task): void
    {
        $this->task = $task;
    }

    public function delete(): void
    {
        $this->task->delete();
        $this->closeModal();
        $this->dispatch('taskDeleted', ['id' => $this->task->id] );
    }

    public function render()
    {
        return view('livewire.task.delete');
    }
}
