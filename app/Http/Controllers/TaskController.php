<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('tasks', compact('tasks'));
    }

    public function store()
    {
        $task = new Task;
        $task->description = request('description');
        $task->save();

        return redirect('/');
    }

    public function toggleCompleted(Task $task)
    {
        $task->is_completed = !$task->is_completed;
        $task->save();

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/');
    }

    public function edit(Task $task)
    {
        return view('edit', compact('task'));
    }

    public function update(Task $task)
    {
        $task->description = request('description');
        $task->save();

        return redirect('/');
    }

    public function clearCompleted()
    {
        Task::where('is_completed', 1)->delete();

        return redirect('/');
    }
}
