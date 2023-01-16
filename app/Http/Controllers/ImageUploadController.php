<?php
 
// namespace App\Http\Controllers;
 
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
  
// class ImageUploadController extends Controller
// {
//     public function getImageUploadForm()
//     {
//         return view('image-upload');
//     }
  
//     public function store(Request $request)
//     {
//         $request->validate([
//             'file' => 'required|mimes:png,gif,jpg,jpeg,bmp|max:2048',
//         ]);
  
//         $fileName = $request->file->getClientOriginalName();
//         $filePath = 'uploads/' . $fileName;
  
//         $path = Storage::disk('public')->put($filePath, file_get_contents($request->file));
//         $path = Storage::disk('public')->url($path);
  
      
  
//         return back()
//             ->with('success','Image has been successfully uploaded.');
//     }
// }