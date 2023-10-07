<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task AS TaskModel;

class Task extends Component
{
    public $tasks;

    public function mount()
    {
        $this->tasks = TaskModel::get();
    }
    public function render()
    {
        return view('livewire.task');
    }
}
