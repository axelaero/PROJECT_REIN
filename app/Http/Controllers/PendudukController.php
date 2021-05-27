<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function CreateView(Request $request){
        return view('penduduk_create');
    }
    
    public function Create(Request $request){

        return redirect()->route('penduduk_create');
    }

    public function Read(Request $request){

        $data = Penduduk::get();
        
        return view('penduduk_read')
        ->with('data',$data);
    }
}
