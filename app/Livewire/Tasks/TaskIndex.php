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
        //only runs once

        $this->tasks = Task::with('user')->get();

    }

    public function hydrate(){
        //called when component is hydrated with data from the server
        //information about the component
        //information about the properties
    }

    public function boot(){
        //called at the beginning of every request, both initial and subsequent
        //performing certain tasks before evry request
    }

    public function updating(){
        //called before livewire updates the component data properties with user inputs
    }

    public function updated(){
        //called after livewire updates the component data properties with user inputs
        //react to chnages in a components data
    }

    public function rendering($view, $data){
         //called before component is rendered
         //view to be rendered
         //data to be passed to the view
    }

    public function renderered($view, $html){
        //called after component is rendered
        //html - entire html
   
    }

    public function dehydrate(){
        //called at the end of every component request
        //cleanups and finalisation tasks
        
    }

    public function save(){
        // Validate that $name is not empty before attempting to create the task
        $this->validate();

        Task::create([
            'user_id' => 1,
            'name' =>  $this->name
        ]);

        session()->flash('message','Task Successfullyu created');

        $this->dispatch('task-updated');

        return $this->redirect(route('tasks'));
    }


    public function render()
    {
        return view('livewire.tasks.task-index')->with([
            'button'=>'New task'
        ]);
    }
}
