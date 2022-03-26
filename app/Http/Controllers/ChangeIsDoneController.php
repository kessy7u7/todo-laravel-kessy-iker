<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ChangeIsDoneController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->is_done = $todo->is_done ? false : true;
        $todo->save();

        $status = $todo->is_done ? 'done' : 'undone';

        return back()->with('successMessage', 'Todo marked as ' . $status . ' successfully.');
    }
}
