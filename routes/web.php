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
// Route Trang chu
Route::get('/', function () {
    return view('welcome');
});

//Route xem danh sach cac con meo
Route::get('/cats', function () {
	
	$cats=Furbook\cat::all();
	return view('cats/index')->with('meo', $cats);
	   
});

// Route xem danh sach cac con meo thuoc 1 giong
Route::get('cats/breeds/{name}', function ($name) {
	$breed=Furbook\Breed::with('cats')
	->where('name',$name)
	->first();

	return view('cats.index')
	->with('breed',$breed)
	->with('meo',$breed->cats);
   
});

// Create new cat
Route::get('/cats/create',function(){
	return view('cats.create');
});

//Insert new cat
Route::post('/cats',function(){
	dd(Request::all());
});