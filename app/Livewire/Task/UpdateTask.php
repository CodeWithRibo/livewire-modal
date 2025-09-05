<?php

namespace App\Livewire\Task;

use LivewireUI\Modal\ModalComponent;

class UpdateTask extends ModalComponent
{
    public $userTask;
    public $title;
    public $description;

    public function mount($id): void
    {
        $taskId = \App\Models\Task::findOrFail($id);
        $this->userTask = $taskId->id;
        $this->title = $taskId->title;
        $this->description = $taskId->description;
    }

    protected function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:10',
        ];
    }

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function updateTask(): void
    {
        $taskId = \App\Models\Task::findOrFail($this->userTask);
        $taskId->update($this->validate());

        $this->dispatch('taskUpdated', id : $this->userTask);
        $this->closeModal();

    }

    public function render()
    {
        return view('livewire.task.update-task');
    }
}
