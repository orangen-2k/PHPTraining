<?php

use Illuminate\Support\Facades\Route;

Route::get('/','Controller@all')->middleware('checklogin');

Route::get('forgot', function () {
    return view('passport/forgot');
});

Route::get('admin/dangnhap','AuthController@getdangnhap')->middleware('checklogout');
Route::post('admin/dangnhap','AuthController@postdangnhap');
Route::get('dangxuat','AuthController@logout');

Route::group(['prefix'=>'admin','middleware'=>'checklogin'],function (){
    Route::group(['prefix'=>'user'],function (){
        Route::get('show','UserController@show')->name('show');

        Route::get('update','UserController@update')->name('update');

        Route::get('add','UserController@add')->name('add');
    });
});

