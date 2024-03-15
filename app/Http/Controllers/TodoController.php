<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //return all todo entries
        return Todo::all();
    }

    public function store(Request $request)
    {
        Todo::create([
            'name' => $request->name,
        ]);
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return $todo;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {

        $todo->update(
            [
                'name' => $request->name,
            ]
        );
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return $this->index();
    }
}
