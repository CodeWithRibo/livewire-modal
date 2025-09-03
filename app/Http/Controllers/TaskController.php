<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function edit(Task $task)
    {
        return view('update-task', compact('task'));
    }
}
