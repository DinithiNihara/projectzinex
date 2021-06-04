<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    // view page
    public function view()
    {
        $images = Image::all()->toArray();
        $all_images=[];
        foreach($images as $image){
            $image_paths=json_decode($image["image_path"]);
            foreach($image_paths as $image_path){
                array_push($all_images,$image_path);
            }
    
        }

        return view('photos',compact('all_images'));
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
        ]);

        if ($req->hasfile('imageFile')) {
            foreach ($req->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/', $name);
                $imgData[] = $name;
            }

            $fileModal = new Image();
            $fileModal->name = json_encode($imgData);
            $fileModal->image_path = json_encode($imgData);

            $fileModal->save();

            return back()->with('success', 'File has successfully uploaded');
        }
    }
}
