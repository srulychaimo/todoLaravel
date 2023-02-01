<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos', [
            'todos' => Todo::orderBy('id', 'desc')->paginate(10),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        Todo::create($attributes);

        return back();
    }

    public function edit(Todo $todo)
    {
        return view('todo-edit', [
            'todo' => $todo,
        ]);
    }

    public function update(Todo $todo)
    {
        $attributes = request()->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $todo->update($attributes);

        return redirect('/');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect('/');
    }
}
