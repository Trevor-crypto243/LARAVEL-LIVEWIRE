<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks', \App\Livewire\Tasks\TaskIndex::class)->name('tasks');
Route::get('/tasks/create', \App\Livewire\Tasks\TaskCreate::class);
Route::get('/tasks/{task}', \App\Livewire\Tasks\TaskShow::class);

