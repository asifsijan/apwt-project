<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\All_User;
use App\Msps;
use Illuminate\Support\Facades\Cookie;


class DashboardController extends Controller
{
    public function view_msps_dashboard(Request $request){
        

       if(Cookie::get('username') !== null){

       	$user_name = Cookie::get('username');

       	//echo "flag";
       	//echo $user_name;

       }

       if($request->session()->has('username')){

         $user_name = $request->session()->get('username');

         //echo $user_name;

       }

       $msps = All_User::where('user_name', $user_name)
                    ->get(); 


        //echo $msps;


         return view('dashboard.msps_dashboard')->with('msps_dash', $msps);
     
    }


    public function view_msps_profile(Request $request){

      if(Cookie::get('username') !== null){

        $user_name = Cookie::get('username');

        //echo "flag";
        //echo $user_name;

       }

       if($request->session()->has('username')){

         $user_name = $request->session()->get('username');

         //echo $user_name;

       }

       $msps = All_User::where('user_name', $user_name)
                    ->get();


          

       return view('dashboard.msps_profile_info')->with('msps_dash', $msps);

    }



    public function view_settings(Request $request){

       if(Cookie::get('username') !== null){

        $user_name = Cookie::get('username');

        //echo "flag";
        //echo $user_name;

       }

       if($request->session()->has('username')){

         $user_name = $request->session()->get('username');

         //echo $user_name;

       }

       $msps = All_User::where('user_name', $user_name)
                    ->get();


        foreach ($msps as $key) {
          $blood_id = $key->id;
        }

        
        $blood_status = Msps::where('user_id', $blood_id)
                            ->get();

        //echo $blood_id;
        //echo $blood_status;
    

       return view('dashboard.msps_settings_page')->with('msps_dash', $msps)->with('b_status', $blood_status);


    }
}
