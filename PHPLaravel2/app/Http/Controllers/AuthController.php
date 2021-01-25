<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('admin/dangnhap');
    }

    public function getdangnhap(){
        return view('passport.login');
    }

    public function postdangnhap(Request $request){
        $username =  $request['username'];
        $password =  $request['password'];
        if (Auth::attempt(['name'=>$username,'password'=>$password,'status'=>"1"])){
            return redirect('/');
        }   elseif (Auth::attempt(['name'=>$username,'password'=>$password,'status'=>"2"])){
            return view('user/user',['user'=>Auth::user()]);
        }  else{
            return view('passport/login',['error'=>"Đăng nhập thất bại"]);
        }
    }
}
