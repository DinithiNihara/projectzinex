<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class PhotosUpdateController extends Controller
{
    // view page
    public function viewUpdate()
    {
        $url = URL::full();
        $shorten = substr($url, 35);
        $vid = substr($shorten, 0, strlen($shorten) - 1);

        $images = Image::where('vid', $vid)->get()->toArray();
        $all_images = [];
        foreach ($images as $image) {
            $image_paths = json_decode($image["image_path"]);
            foreach ($image_paths as $image_path) {
                array_push($all_images, $image_path);
            }
        }
        return view('photosUpdate', compact('all_images'));
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

            $url = URL::full();
            $shorten = substr($url, 35);
            $vid = substr($shorten, 0, strlen($shorten) - 1);

            $fileModal = new Image();
            $fileModal->name = json_encode($imgData);
            $fileModal->image_path = json_encode($imgData);
            $fileModal->vid = $vid;

            $fileModal->save();

            return back()->with('success', 'File has successfully uploaded');
        }
    }

    public function destroy()
    {
        $url = URL::full();
        $shorten = substr($url, 35);
        $vid = substr($shorten, 0, strlen($shorten) - 1);

       /*  $image = Image::find($vid)->get(); */
       
        $image->delete();
        return redirect()->route('photosUpdate/store')->with('success', 'Data Deleted');
    }

}
