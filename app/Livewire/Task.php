<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task AS TaskModel;

class Task extends Component
{
    public $tasks;

    public TaskModel $task;

    public function mount()
    {
        $this->tasks = TaskModel::get();
        $this->$task = new TaskModel();
    }
    public function render()
    {
        return view('livewire.task');
    }
}
