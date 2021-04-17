<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;

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


	  if(Cookie::get('username') !== null){

                    
         return redirect('/dashboard/msps_dashboard');

         }else{

            return view('index');
         }

    
    
});

Route::get('/register/msps_register', 'RegisterController@view_reg_page')->name('register.msps_register');
Route::post('/register/msps_register', 'RegisterController@insert_msps');

Route::get('/login/login_page', 'LoginController@view_login_page')->name('view_login');
Route::post('/login/login_page', 'LoginController@login_verify');


Route::get('/dashboard/msps_dashboard', 'DashboardController@view_msps_dashboard')->name('view_msps_dashboard');

Route::get('/dashboard/msps_profile_info', 'DashboardController@view_msps_profile')->name('view_msps_profile');


Route::get('/dashboard/msps_settings_page', 'DashboardController@view_settings')->name('view_settings_page');


//settings route--------------------------------------------------------------------


Route::post('/dashboard/full_name', 'SettingsController@edit_full_name')->name('change_full_name');

Route::post('/dashboard/user_name', 'SettingsController@edit_username')->name('change_username');


Route::post('/dashboard/email', 'SettingsController@edit_email')->name('change_email');

Route::post('/dashboard/image', 'SettingsController@edit_image')->name('change_image');

Route::post('/dashboard/password', 'SettingsController@edit_password')->name('change_password');

Route::post('/dashboard/dob', 'SettingsController@edit_dob')->name('change_dob');

Route::post('/dashboard/gender', 'SettingsController@edit_gender')->name('change_gender');

Route::post('/dashboard/blood_type', 'SettingsController@edit_blood')->name('change_blood');

Route::post('/dashboard/contact_no', 'SettingsController@edit_contact')->name('change_contact');

Route::post('/dashboard/donation_status', 'SettingsController@edit_donation_status')->name('change_donation_status');

Route::post('/dashboard/delete_account', 'SettingsController@delete_account')->name('delete_account');


//Advertisement

Route::get('/post_add/add_form', 'AddController@view_add_form')->name('view_add_form');
Route::post('/post_add/add_form', 'AddController@insert_ambulance');

Route::get('/add/show_all_add', 'AddController@show_all_add')->name('show_all_add');

Route::get('/add/search_add', 'AddController@search_add')->name('search_add');

Route::post('/add/details', 'AddController@add_details')->name('add_details');

Route::get('/add/give_address', 'AddController@give_address')->name('give_address');

Route::post('/add/next', 'AddController@next')->name('next_task');

Route::get('/add/rent_release_page', 'AddController@rent_release_list')->name('rent_release_page');


Route::get('/add/rent_release_details', 'AddController@rent_release_details')->name('rent_release_details');


Route::get('/add/rent_release_form', 'AddController@rent_release_form')->name('rent_release_form');


Route::post('/add/edit_for_release', 'AddController@edit_for_release')->name('edit_for_release');


Route::get('/logout', 'logoutController@logout')->name('logout');
