<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function upload(Request $request, Image $image)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $imageName = $request->file('image');

        $images =  Storage::disk('public')->put('/images', $imageName);
        $image->create([
            'name' =>$images,
            'path' => $images
        ]);

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
        
        
        $request->validate([
            'newImage' => 'required|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('newImage')) {
            $imageName = $request->file('newImage');
            $images =  Storage::disk('public')->put('/images', $imageName);
            $a = new Image();
            $a->create([
                'name' => $images,
                'path' =>$images
            ]);
        }
        
       

        return redirect('/index')->with('success', 'Image updated successfully.');
    }

    public function destroy(Request $request, Image $image)
    {
        // Delete the image file from storage
        if ($image->path) {
            // Storage::delete('/' . $image->filename);
            Storage::disk('public')->delete($image->path);


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
            // $file = $request->file('image');

            // $request->image->move(public_path('images'), $imageName);
            $a =  Storage::disk('public')->put('/images', $imageName);
            dd($a);
            // $image = new Image();
            // $image->name = $imageName;
            // $image->path = '/images/' . $imageName;
            // $image->save();
            return response()->json(['message' => 'Image uploaded successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to upload image'], 500);
        }
    }


}
