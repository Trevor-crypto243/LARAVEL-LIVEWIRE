<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\Attributes\Layout;

class TaskCreate extends Component
{
    //if we want to load a custom layout
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.tasks.task-create');
    }
}
