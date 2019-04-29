<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthCustomerController extends Controller
{
    public function register(Request $request){
        return view('front/auth/register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'username' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required'
        ]);

        $data =  new Customer();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('front/auth/login')->with('alert-success','Kamu berhasil Register');
    }

    public function index(){
        if(!Session::get('login')){
            return redirect('auth/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('layout/admin');
        }
    }

    public function login(){
        return view('front/auth/login');
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
        return redirect('auth/login')->with('alert','Kamu sudah logout');
    }
}
