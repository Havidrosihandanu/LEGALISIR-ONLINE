<?php

namespace App\Http\Controllers;

use App\Models\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(){
        return view('upload');
    }
    public function store(Request $request){
        $file = $request->file('file');
        $name = $request->name;
        $path = time(). '-' . $request->name . '.'. $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' .$path,file_get_contents($file));
        upload::create([
            'name' => $name,
            'path' =>$path
        ]);

        return Redirect::route('upload');
    }
    public function show(Upload $upload){
        $url = Storage::url($upload->path);
        return view('show',compact('url','upload'));
    }
}
