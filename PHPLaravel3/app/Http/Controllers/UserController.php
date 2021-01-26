<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function show(){
        $user = User::all();
        return view('admin/user/show',['user'=>$user]);
    }
    public function add(){
        return view('admin/user/add');
    }
    public function update(){
        return view('admin/user/update');
    }
}
