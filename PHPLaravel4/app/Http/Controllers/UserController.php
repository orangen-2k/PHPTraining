<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getshow(){
        $user = User::all();
        return view('admin.user.show',['user'=>$user]);
    }
    public function getadd(){
        return view('admin.user.add');
    }
    public function getupdate(){
        return view('admin.user.update');
    }
}
