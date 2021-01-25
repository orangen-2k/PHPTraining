<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(){
        return view('admin/user/show');
    }
    public function add(){
        return view('admin/user/add');
    }
    public function update(){
        return view('admin/user/update');
    }
}
