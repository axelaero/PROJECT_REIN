<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function Login(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        // dd($request);
        ///////
        $name = $request->only('username');
        
        $exist = User::where('username', $name)->exists();
        $id_sess = User::where('username', $name)->value('id');
        $role = User::where('username', $name)->value('role');
        // dd($role);
        if($exist === false){
            return back()->with('status', 'Username not exist');
        }
        
        // if(!Auth::attempt($request->only('username','password'), $request->remember)){
        //     return back()->with('status', 'Invalid login details');
        // }

        $str_name = $request->get('username');
        
        $request->session()->put('user_id', $id_sess);
        $request->session()->put('username', $str_name);

        // $exist_admin = User::where('role', $role)->first();
        // $exist_dinas = User::where('role', $role)->first();
        // $exist_kecamatan = User::where('role', $role)->first();

        if($role == 1){
            return redirect()->route('admin');
        }

        if($role == 2){
            return redirect()->route('dinas');
        }

        if($role == 3){
            return redirect()->route('kelurahan');
        }

        // return redirect()->route('dashboard');
    }
}
