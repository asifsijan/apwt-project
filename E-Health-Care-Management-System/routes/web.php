<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
  	//$blogs = App\Blog::take(3)->latest()->get();
	//$blogs = App\Blog::latest()->paginate(5);
	$blogs = App\Blog::orderBy('blog_id', 'desc')->paginate(5);

    return view('home', [
        'blogs' => $blogs
    ]);
});



Route::get('/homey', 'DoctorController@index');