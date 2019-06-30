<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 1號路由
Route::get('/user/{id}', function ($id=null) {
    // return view('welcome');
	if(!is_null($id)){
		return redirect() ->route('profile');
	}else{
		return '無使用者資料';
	}
});

// 2號路由
Route::get('/student/profile',function(){
	return '以查到使用者資料';
})->name('profile');
