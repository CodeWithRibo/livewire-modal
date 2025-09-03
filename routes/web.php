<?php

use App\Http\Controllers\TaskController;
use App\Livewire\Task\EditTask;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('edit-task', function () {
    return view('edit-task');
})->name('edit-task');

Route::get('update-task/{task}', [TaskController::class, 'edit'])->name('show.update-task');


require __DIR__.'/auth.php';
