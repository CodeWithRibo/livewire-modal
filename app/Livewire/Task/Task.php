<?php

namespace App\Livewire\Task;

use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;

class Task extends ModalComponent
{

    #[Validate]
    public $title;
    public $description;

    public function  rules (): array
    {
       return [
            'title' => 'required|min:3',
            'description' => 'required|min:10',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveTask(): void
    {
        \App\Models\Task::create($this->validate());

        $this->redirect('/dashboard', navigate: true);
    }

    public function render()
    {
        return view('livewire.task.task');
    }
}
