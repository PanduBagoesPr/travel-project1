<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthCustomerController extends Controller
{
    public function registercustomer(Request $request){
        return view('front/auth/registercustomer');
    }

    public function registercustomerPost(Request $request){
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
        return redirect('auth/logincustomer')->with('alert-success','Kamu berhasil Register');
    }

    // public function index(){
    //     if(!Session::get('login')){
    //         return redirect('auth/login')->with('alert','Kamu harus login dulu');
    //     }
    //     else{
    //         return view('layout/admin');
    //     }
    // }

    public function logincustomer(){
        return view('front/auth/logincustomer');
    }

    public function logincustomerPost(Request $request){
        $username = $request->username;
        $data = Customer::where('username',$username)->first();
        if(Auth::attempt($request->only('username', 'password')))
        {
            Session::put('username',$data->username);
            return redirect('auth/logincustomer');
        }
        return redirect('/');
    }

    public function logoutcustomer(){
        Session::flush();
        return redirect('auth/login')->with('alert','Kamu sudah logout');
    }
}
