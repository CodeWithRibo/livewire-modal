<?php

namespace App\Livewire\Task;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use function Livewire\of;

class TaskList extends Component
{
    use WithPagination;

    #[Url]
    public ?string $search = '';

    public $sortField = 'title';
    public $sortDirection = 'ASC';
    public $statusFilter = 'all';

    public function sortBy($field): string
    {
        return $this->sortField === $field
            ? $this->sortDirection = $this->sortDirection === 'ASC' ? 'DESC' : 'ASC'
            : $this->sortField = $field;
    }

    public function render()
    {
        $q = \App\Models\Task::query();

        if ($this->statusFilter != 'all')
            $q->where('status', $this->statusFilter);

        $tasks = $q->search($this->search)
            ->filtered($this->sortField, $this->sortDirection)->latest()->get();
        return view('livewire.task.task-list', compact('tasks'));
    }
}
