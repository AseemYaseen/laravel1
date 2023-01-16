<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create(){
    $photos = Photo::all();
    return view('upload', compact('photos'));
    }

    public function store(Request $request){
        $size = $request->file('image')->getSize();
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $name);
        $photo = new Photo();
        $photo->name = $name;
        $photo->size=$size;
        $photo->save();
        // return
    }
}
