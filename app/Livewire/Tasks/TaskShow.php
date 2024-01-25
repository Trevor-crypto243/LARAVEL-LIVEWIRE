<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use App\Models\Task;

class TaskShow extends Component
{
    public Task $task;

    //the id is comming as a route parameter
    public function mount(Task $task){
        $this->task =  $task;

    }
    public function render()
    {
        return view('livewire.tasks.task-show');
    }
}
