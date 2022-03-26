<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function show(Request $request)
    {
        return view('welcome', [
            'todos' => Todo::latest()->get(),
            'model' => new Todo()
        ]);
    }

    public function store(TodoRequest $request)
    {
        Todo::create($request->validated());

        return back()->with('successMessage', 'Todo created successfully.');
    }

    public function edit(Request $request, $id)
    {
        return view('welcome', [
            'todos' => Todo::latest()->get(),
            'model' => Todo::find($id),
        ]);
    }

    public function update(TodoRequest $request, $id)
    {
        $todo = Todo::find($id);
        $todo->update($request->validated());

        return back()->with('successMessage', 'Todo updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        return redirect()->route('todo.index')->with('successMessage', 'Todo deleted successfully.');
    }
}
