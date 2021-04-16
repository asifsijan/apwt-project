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
    return view('landing-page');
});

Route::get('/patient/register', 'PatientController@create');
Route::post('/patient/register', 'PatientController@store');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LoginController@logout');

Route::get('/patient/dashboard', 'PatientController@index');
Route::post('/patient/dashboard', 'DoctorController@show');

Route::get('/patient/appointment/{doctor_id}', 'AppointmentController@create');
Route::post('/patient/appointment/{doctor_id}', 'AppointmentController@store');

Route::get('/patient/appointment-history', 'AppointmentController@index');
