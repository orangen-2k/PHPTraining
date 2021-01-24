<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    //
    public function login(Request $request){
        $username =  $request['username'];
        $password =  $request['password'];

//        $user = User::find(3);
//        Auth::login($user);
//        return view('thanhcong',['user'=>Auth::user()]);
        if (Auth::attempt(['name'=>$username,'password'=>$password])){
            return view('thanhcong',['user'=>Auth::user()]);
        }  else{
            return view('dangnhap',['error'=>"Đăng nhập thất bại"]);
        }
    }
    public function logout(){
        Auth::logout();
        return view('dangnhap');
    }
}
