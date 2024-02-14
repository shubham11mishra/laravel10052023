<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Http\Requests\StoreResumeRequest;
use App\Http\Requests\UpdateResumeRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\Document;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumes = Resume::with('document')->get();

        // Return the resumes as a response
        return view('resume.index', compact('resumes'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resume.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResumeRequest $request)
    {
       
        $validatedData = $request->validated();
     
        $resume = Resume::create(
            [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'address' => $validatedData['address'],
                'mobile_number' => $validatedData['mobile_number'],
            ]
        );


        $imageName = $documentName = null;

        if($request->hasFile('photo')){
        
            $image = $request->file('photo');
            // dd(file_get_contents($image))
            $imageName = $image->getClientOriginalName();
            Storage::disk('public')->put('images/'.$imageName, file_get_contents($image));
        }

        if($request->hasFile('resume')){
            $document = $request->file('resume');
            $documentName = $document->getClientOriginalName();
            $path = $document->storeAs('documents', $documentName, 'local');
        }

      
        $document = Document::create([
            'resume_id' => $resume->id,
            'image' => $imageName,
            'document' => $documentName,
        ]);

        
        
    
       $url = route('resume.download', ['id' => $resume->id]);
       $body = 'Click on this link to download the document: ' . $url;

        Mail::raw($body, function ($message) use ($imageName) {
            $message->to('bharathi@fininfocom.com')->subject('Laravel Test Mail');

            if ($imageName) {
                $message->attach(Storage::disk('public')->path('images/'.$imageName));
            }

        });

        return redirect()->route('resume')->with('success', 'You have successfully Uploaded.');
       
    }

    public function download($id) {
        $resume = Resume::find($id);
        $filename = $resume->document->document;
        // Check if file exists
        if (Storage::disk('local')->exists('documents/' . $filename)) {
            return Storage::disk('local')->download('documents/' . $filename);
        } else {
            return "File does not exist";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
    
      
        $resume = $resume->with('document')->findOrFail($resume->id);

        return view('resume.edit', compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResumeRequest $request, Resume $resume)
    {

        $resume = Resume::findOrFail($resume->id);

       

        // Update resume details
        $resume->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'mobile_number' => $request->input('mobile_number'),
        ]);

        // Update image if a new one is uploaded
        if ($request->hasFile('photo')) {
            $newImage = $request->file('photo');
            $newImageName = $newImage->getClientOriginalName();

            // Delete the existing image if it exists
            if (Storage::disk('public')->exists('images/' . $resume->image)) {
                Storage::disk('public')->delete('images/' . $resume->image);
            }

            // Store the new image
            Storage::disk('public')->put('images/' . $newImageName, file_get_contents($newImage));

            // Update the resume record with the new image name
            $resume->document->update(['image' => $newImageName]);
        }

        // Update document if a new one is uploaded
        if ($request->hasFile('resume')) {
            $newDocument = $request->file('resume');
            $newDocumentName = $newDocument->getClientOriginalName();

            // Delete the existing document if it exists
            if (Storage::disk('local')->exists('documents/' . $resume->document->document)) {
                Storage::disk('local')->delete('documents/' . $resume->document->document);
            }

            // Store the new document
            $newDocument->storeAs('documents', $newDocumentName, 'local');

            // Update the document record with the new document name
            $resume->document->update(['document' => $newDocumentName]);
        }

        return redirect()->route('resume')->with('success', 'Resume updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
       
        $resume = $resume->with('document')->findOrFail($resume->id);
       
        // Delete the existing image if it exists
        if (Storage::disk('public')->exists('images/' . $resume->document->image)) {
            Storage::disk('public')->delete('images/' . $resume->document->image);
        }

        // Delete the existing document if it exists
        if (Storage::disk('local')->exists('documents/' . $resume->document->document)) {
            Storage::disk('local')->delete('documents/' . $resume->document->document);
        }

        // Delete the associated Document record
        $resume->document->delete();

        // Delete the Resume record
        $resume->delete();

        return redirect()->route('resume')->with('success', 'Resume deleted successfully');
    }
}
