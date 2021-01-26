<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }

    public function user()
    {
        return view('user.user');
    }

    public function forgot()
    {
        return view('passport.forgot');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function getdangnhap(){
        return view('passport.login');
    }
        public function postdangnhap(Request $request){
        $email =  $request['email'];
        $password =  $request['password'];
            if (Auth::attempt(['email'=>$email,'password'=>$password])){
                return redirect('/admin/user/show');
            }elseif (Auth::attempt(['email'=>$email,'password'=>$password])){
                return redirect('/user');
        }  else{
            return view('passport/login',['error'=>"Đăng nhập thất bại"]);
        }
    }
}
