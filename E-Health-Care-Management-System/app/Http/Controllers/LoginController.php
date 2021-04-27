<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\All_User;
use Validator;
use App\Http\Requests\login_request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;


class LoginController extends Controller
{
    public function view_login_page(){
        return view('login.login');
    }

    public function login_verify(login_request $request){

      $valid_user = All_User::where('user_name', $request->username)
                    ->where('password', $request->password)
                    ->get();

       if(count($valid_user) > 0){

       	if(!empty($request->input('check'))){

       		$uname = $request->username;

       	Cookie::queue('username', $uname , 60);

       return redirect('/dashboard/msps_dashboard');

       	}
       		$request->session()->put('username', $request->username);
            return redirect('/dashboard/msps_dashboard');

       }else{

            $request->session()->flash('old_user_name',$request->username);
            $request->session()->flash('old_password',$request->password);

       	    $request->session()->flash('error_msg', '**Wrong Username Or password');
            return redirect('/login/login_page');
       }

    }


    //public function setCookie(Request $request) {

      //$username = $uname;
      //$minutes = 1;
      //return response('Hello World')->cookie(

          //'my_username', 'zhamela', $minutes

      //);
   //}





use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{

    public function index()
    {

        return view('login');
    }

    public function verify(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $patient = DB::table('patients')
		->where('email', $request->email)
		->where('password', $request->password)
		->get();

        if(count($patient) > 0 )
        {
			$request->session()->put('name', $patient[0]->name);
            $request->session()->put('patient_id', $patient[0]->id);
			$request->session()->save();
			return redirect('/patient/dashboard');
            dd($patient);
		}
        else
        {
			$request->session()->flash('errorMessage', 'Invalid Email or Password!');
			return redirect('/login');
		}
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
		return redirect('/login');
    }



}
