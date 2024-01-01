<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use App\Http\Requests\StoreIdeasRequest;
use App\Http\Requests\UpdateIdeasRequest;

class IdeasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ideas = Ideas::all();
        return view('ideas.index', compact('ideas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIdeasRequest $request)
    {
        //
        $idea = new Ideas();
        $idea->title = $request->title;
        $idea->description = $request->description;
        $idea->user_id = auth()->user()->id;
        $idea->save();
        return redirect()->route('s.home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ideas $ideas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ideas $ideas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIdeasRequest $request, Ideas $ideas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ideas $ideas)
    {
        //
    }
}
