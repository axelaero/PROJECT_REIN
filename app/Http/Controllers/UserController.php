<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function Login(Request $request){

        if(Auth::check()){
            return redirect()->route('dashboard');
        }

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

        $str_name = $request->get('username');
        
        $request->session()->put('user_id', $id_sess);
        $request->session()->put('username', $str_name);
        $request->session()->put('role', $role);
        
        if($role == 1){
            return redirect()->route('admin_dashboard');
        }
        if($role == 2){
            return redirect()->route('dinas_dashboard');
        }
        if($role == 3){
            return redirect()->route('kelurahan_dashboard');
        }
        return redirect()->route('dashboard');
    }

    public function Read(Request $request){

        $users = DB::table('users')
        ->leftjoin('kelurahan','users.kelurahan_id','=','kelurahan.kelurahan_id')
        ->where('role','!=',0)
        ->get();
        return view("admin_read")
        ->with('users', $users);
    }
}
