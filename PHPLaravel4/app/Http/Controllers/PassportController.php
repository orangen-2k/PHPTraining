<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
{

    // Truyền đến màn login.blade.php
    public function getlogin(){
        return view('passport.login');
    }

    // Truyền đến màn admin.blade.php
    public function admin()
    {
        return view('admin.admin');
    }

    // Truyền đến màn .blade.php
    public function user()
    {
        return view('user.user');
    }

    // Truyền đến màn forgot.blade.php
    public function forgot()
    {
        return view('passport.forgot');
    }

    // Kiểm tra đăng nhập truyền đến màn admin.blade.php hoặc màn user.blade.php
    public function postlogin(Request $request){
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required',
            ],
            [
                'email.required'=>'Bạn chưa nhập tài khoản',
                'password.required'=>'Bạn chưa nhập mật khẩu',
            ]
        );
        $email =  $request['email'];
        $password =  $request['password'];
        if (Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect()->route('admin');
        }elseif (Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect()->route('user');
        }  else{
            return redirect()->route('login')->with('Error','Tài khoản hoặc mật khẩu không chính xác');
        }
    }

    // Đăng xuất đến màn login.blade.php
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
