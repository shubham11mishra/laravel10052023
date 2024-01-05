<?php

namespace App\Http\Controllers\CheatSheet;

use App\Http\Controllers\Controller;
use App\Models\CheatSheetCodes;
use App\Http\Requests\StoreCheatSheetCodesRequest;
use App\Http\Requests\UpdateCheatSheetCodesRequest;
use App\Models\CheatSheetLanguages;

class CheatSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data =  CheatSheetLanguages::with('languageVersions')->get();
       return view('CheatSheet.front.index', compact('data'));
    //    return response()->json($data);
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
    public function store(StoreCheatSheetCodesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CheatSheetCodes $cheatSheetCodes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CheatSheetCodes $cheatSheetCodes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheatSheetCodesRequest $request, CheatSheetCodes $cheatSheetCodes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CheatSheetCodes $cheatSheetCodes)
    {
        //
    }
}
