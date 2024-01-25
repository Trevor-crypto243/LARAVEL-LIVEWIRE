<?php

namespace App\Livewire\Tasks;
use Livewire\Attributes\Title;
use App\Models\Task;

use Livewire\Component;

#[Title('Tasks - Hostinger Livewire')]

class TaskIndex extends Component
{
    public $tasks;  

    public $name;

    public function mount(){ 
        $this->tasks = Task::with('user')->get();

    }

    public function add(){
        dd($this->name);
    }


    public function render()
    {
        return view('livewire.tasks.task-index')->with([
            'button'=>'New task'
        ]);
    }
}
