<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;

class logoutController extends Controller
{
    public function logout(Request $request){

            Cookie::queue(Cookie::forget('username'));
            $request->session()->flush();

            return redirect('/login/login_page'); 

    }
}
