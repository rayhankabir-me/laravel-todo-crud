<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todos;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //showing all todos
    public function index()
    {
        $todos = Todos::all();
        return view('todo.index', [
            'todos' => $todos
        ]);
    }

    //showing add todo template
    public function create()
    {
        return view('todo.create');
    }

    //adding todo
    public function add(TodoRequest $request)
    {
        Todos::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => 0
        ]);

        $request->session()->flash('alert-success', 'Todo Created Successfully...');
        return to_route('todos.index');

    }

    //showing single todo details
    public function details($id)
    {
        $todo = Todos::find($id);
        if (!$todo)
        {
            return to_route('todos.index')->withErrors([
                'error' => "No Todo Found..."
            ]);
        }

        return view('todo.single', ['todo' => $todo]);

    }

    //going to edit page
    public function edit($id)
    {
        $todo = Todos::find($id);
        if (!$todo)
        {
            return to_route('todos.index')->withErrors([
                'error' => "No Todo Found..."
            ]);
        }

        return view('todo.update', ['todo' => $todo]);

    }

    public function update(TodoRequest $request)
    {
        $todo = Todos::find($request->todo_id);
        if (!$todo)
        {
            return to_route('todos.index')->withErrors([
                'error' => "No Todo Found..."
            ]);
        }

        $todo->update([
           'title' => $request->title,
           'description' => $request->description,
           'is_completed' => $request->is_completed,
        ]);

        $request->session()->flash('alert-success', 'Todo Updated Successfully...');
        return to_route('todos.index');
    }
}
