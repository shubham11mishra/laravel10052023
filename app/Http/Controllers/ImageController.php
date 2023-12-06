<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //

    public function index()
    {
        $images = Image::orderBy('created_at', 'desc')->get();
        return view('images.index', compact('images'));
    }


    public function showForm()
    {
        return view('images/upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

       
        $image = new Image();
        $image->name = $imageName;
        $image->path = '/images/' . $imageName;
        $image->save();

        return redirect('/index')->with('success', 'Image uploaded successfully.');
    }

    public function showImage($id)
    {
        $image = Image::findOrFail($id);
        return view('show-image', compact('image'));
    }

    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $image = Image::find($id);

        // var_dump($request->hasFile('newImage'));
        if (!$image) {
            return back()->withErrors('Image not found');
        }

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('newImage')) {

            // Delete the existing image file if it exists
            if ($image->filename) {
                Storage::delete('images/' . $image->filename);
            }

            // Generate a new unique filename for the updated image
            $imageName = time() . '.' . $request->newImage->extension();
            $request->file('newImage')->move(public_path('images'), $imageName);


            // Update the image record with the new filename and path
            $image->name = $imageName;
            $image->path = '/images/' . $imageName;
        }

        $image->save();


        return redirect('/index')->with('success', 'Image updated successfully.');
    }

    public function destroy(Request $request, Image $image)
    {
        // Delete the image file from storage
        if ($image->filename) {
            Storage::delete('images/' . $image->filename);
        }

        // Delete the image record from the database
        $image->delete();

        return redirect()->route('images.index')->withSuccess('Image deleted successfully.');
    }




    /*................... Ajax Uploading ........... */
    public function ajaxindex(){
        return view('ajaximages.index');
    }

    public function getall(){
        $images = Image::orderBy('created_at', 'desc')->get();
        echo view('ajaximages.imagelist', compact('images'));
        exit;
    }


    public function upload_view(){
        return view('ajaximages.upload');
    }

    public function upload_save(Request $request)
    {

        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            $image = new Image();
            $image->name = $imageName;
            $image->path = '/images/' . $imageName;
            $image->save();
            return response()->json(['message' => 'Image uploaded successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to upload image'], 500);
        }
    }


}
