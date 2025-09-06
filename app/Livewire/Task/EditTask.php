<?php
namespace App\Livewire\Task;

use AllowDynamicProperties;
use App\Models\Task;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[AllowDynamicProperties] class EditTask extends Component
{
    public $listeners = [
        'taskDeleted' => 'removeTask',
        'taskUpdated' => 'refreshTask'
    ];
    public $tasks;

    public $sortField = 'title';
    public $sortDirection = 'ASC';

    public function sortBy($field): string
    {
        return $this->sortField === $field
            ? $this->sortDirection = $this->sortDirection === 'ASC'  ? 'DESC' : 'ASC'
            : $this->sortField = $field;
    }

    public function mount(): void
    {
        $this->tasks = Task::orderBy('created_at', 'ASC')->get();
    }

    public function removeTask($id): void
    {
        $this->tasks = $this->tasks->reject(fn ($task) => $task->id === (int) $id);
    }

    public function refreshTask($id): void
    {
        $updatedTask = Task::findOrFail($id);
        $this->tasks = $this->tasks->map(function ($t) use ($updatedTask) {
            return $t->id === (int) $updatedTask->id ? $updatedTask : $t;
        });
    }

    public function render()
    {
        $tasksList = Task::orderBy($this->sortField, $this->sortDirection)->paginate(10);
        return view('livewire.task.edit-task', compact('tasksList'));
    }
}
