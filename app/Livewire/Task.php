<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task AS TaskModel;

class Task extends Component
{
    public $tasks;

    public TaskModel $task;

    protected $rules = ['task.text' => 'required|max:40'];

    public function mount()
    {
        $this->tasks = TaskModel::get();
        $this->task = new TaskModel();
    }

    public function save()
    {//dd($this->task);

        $this->validate();

        $this->task->save();

    }

    public function render()
    {
        return view('livewire.task');
    }
}
