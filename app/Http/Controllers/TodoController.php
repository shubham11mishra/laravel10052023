<?php

namespace App\Http\Controllers;

use App\Models\todo;
use App\Http\Requests\StoretodoRequest;
use App\Http\Requests\UpdatetodoRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        $allTodo = todo::paginate();
        return view('todo.index', ['todos' => $allTodo]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
//        $title = $request->input('title');
//        $body = $request->input('body');
//        $user_id = 1;

        $validated = $request->validate([
            'title' => ['required', 'min:5'],
        ]);

        todo::create([...$validated , 'user_id' => 1]);
        return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo)
    {
        //
    }

    /**
     *
     * Update the specified resource in storage.
     */
    public function update(UpdatetodoRequest $request, todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo)
    {
        //
    }
}
