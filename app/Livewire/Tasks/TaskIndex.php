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

    public function save(){
        // Validate that $name is not empty before attempting to create the task
        $this->validate([
            'name' => 'required|string',
        ]);

        Task::create([
            'user_id' => 1,
            'name' =>  $this->name
        ]);

        // Clear the input field after successfully creating the task
        $this->name = '';

        return $this->redirect(route('tasks'));
    }


    public function render()
    {
        return view('livewire.tasks.task-index')->with([
            'button'=>'New task'
        ]);
    }
}
