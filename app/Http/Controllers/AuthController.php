<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('auth/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('layout/admin');
        }
    }

    public function login(){
        return view('admin/auth/login');
    }

    public function loginPost(Request $request){
        $username = $request->username;
        $data = User::where('username',$username)->first();
        if(Auth::attempt($request->only('username', 'password')))
        {
            Session::put('username',$data->username);
            return redirect('layout/admin');
        }
        return redirect('auth/login');
    }

    public function logout(){
        Session::flush();
        return redirect('admin/auth/login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('admin/auth/register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'username' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required'
        ]);

        $data =  new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('auth/login')->with('alert-success','Kamu berhasil Register');
    }
}
