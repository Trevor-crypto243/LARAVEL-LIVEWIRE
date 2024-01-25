<?php

namespace App\Livewire\Tasks;
use Livewire\Attributes\Title;
use Livewire\Attributes\Rule;
use App\Models\Task;
use Livewire\Component;

#[Title('Tasks - Hostinger Livewire')]

class TaskIndex extends Component
{
    public $tasks;  

    #[Rule('required|max:10|string')]
    public $name;

    public function mount(){ 
        $this->tasks = Task::with('user')->get();

    }

    public function save(){
        // Validate that $name is not empty before attempting to create the task
        $this->validate();

        Task::create([
            'user_id' => 1,
            'name' =>  $this->name
        ]);

        return $this->redirect(route('tasks'));
    }


    public function render()
    {
        return view('livewire.tasks.task-index')->with([
            'button'=>'New task'
        ]);
    }
}
