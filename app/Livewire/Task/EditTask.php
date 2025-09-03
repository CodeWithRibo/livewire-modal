<?php
namespace App\Livewire\Task;

use App\Models\Task;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class EditTask extends Component
{
    #[Title('Edit Task')]
    public function render() : View
    {
        $tasks = Task::orderBy('created_at', 'ASC')->paginate(10);
        return view('livewire.task.edit-task', compact('tasks'));
    }
}
