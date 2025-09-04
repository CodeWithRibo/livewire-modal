<?php
namespace App\Livewire\Task;

use AllowDynamicProperties;
use App\Models\Task;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[AllowDynamicProperties] class EditTask extends Component
{
    public $status;
    public $tasks;
    public $listeners = ['taskDeleted' => 'removeTask'];

    public function mount(): void
    {
        $this->tasks = Task::orderBy('created_at', 'ASC')->get();
    }

    #[On('taskDeleted')]
    public function removeTask($id): void
    {
        $this->tasks = $this->tasks->reject(fn ($task) => $task->id === (int) $id);
    }

    public function render() : View
    {
        return view('livewire.task.edit-task',[
            'tasks' => $this->tasks]);
    }
}
