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
                'error' => "No Todo Found.."
            ]);
        }

        return view('todo.single', ['todo' => $todo]);

    }
}
