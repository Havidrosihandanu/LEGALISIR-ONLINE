<?php

namespace App\Http\Controllers;

use App\Models\Coba;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index(){
        return view('index');
    }
    public function ta(){
        $murid = Coba::all();
        return view('index',compact('murid'));
    }
    public function t(Request $request){
        Coba::create([
            'nis' =>$request->nis,
            'nama' =>$request->nama 
        ]);
        return view('index');
    }
}


