<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('admin/auth/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin/layout/admin');
        }
    }

    public function login(){
        return view('admin/auth/login');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('admin/layout/index');
            }
            else{
                return redirect('admin/auth/login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('admin/auth/login')->with('alert','Password atau Email, Salah!');
        }
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
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('admin/auth/login')->with('alert-success','Kamu berhasil Register');
    }
}
