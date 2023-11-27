<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //

    public function showForm(){
        return view('images/upload');
    }

   public function upload(Request $request){

    // var_dump($request);

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        // $name = $request->file('image')->getClientOriginalName();
        // $path = $request->file('image')->store('public/images');

        
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $image = new Image();
        $image->name = $imageName;
        $image->path = '/images/'.$imageName;
        $image->save();

        return redirect('/upload')->with('success', 'Image uploaded successfully.');
   }
}
