<?php

namespace App\Livewire\Task;

use Livewire\Component;

class UpdateTask extends Component
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

    public function updateTask(): void
    {
        $taskId = \App\Models\Task::findOrFail($this->userTask);
        $taskId->update([
            'title' => $this->title,
            'description' => $this->description
        ]);

        $this->redirect('/dashboard', navigate: true);
    }

    public function render()
    {
        return view('livewire.task.update-task');
    }
}
