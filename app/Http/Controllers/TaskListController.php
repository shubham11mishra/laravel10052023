<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use App\Http\Requests\StoreTaskListRequest;
use App\Http\Requests\UpdateTaskListRequest;
use Illuminate\Support\Facades\Auth;

class TaskListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //show all users list
        $taskLists = TaskList::all();
        return view('tasklist.index', compact('taskLists'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tasklist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskListRequest $request)
    {
        //
        $taskList = new TaskList();
        $taskList->title = $request->title;
        $taskList->description = $request->description;
        $taskList->user_id = Auth::guard('loginUser')->user()->id;
        $taskList->save();
        return redirect()->route('task.index');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskList $taskList)
    {
        
        return view('tasklist.show', compact('taskList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskList $taskList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskListRequest $request, TaskList $taskList)
    {
        //
        $taskList->title = $request->title;
        $taskList->description = $request->description;
        $taskList->is_completed = $request->status;
        $taskList->save();
        return redirect()->route('task.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskList $taskList)
    {
        //
    }
}
