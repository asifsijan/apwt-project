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



    

}
