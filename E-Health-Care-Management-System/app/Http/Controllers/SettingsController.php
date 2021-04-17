<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\All_User;
use App\Msps;
use Illuminate\Support\Facades\Cookie;

class SettingsController extends Controller
{
    public function edit_full_name(Request $request){

        $request->validate([

           'f_name' => "required|regex:/^[A-Za-z]+([\ A-Za-z]+)*/|min:3|max:30|bail"

        ],
        [

            'f_name.required' => "**Enter Your New Name**",
            'f_name.regex' =>"**Use Alphabet(No Special Character Allowed)**",
            'f_name.min' => "**Name Must Be At Least (3) Character**",
            'f_name.max' => "**Name Can't Contain More Than (30) Character**"

        ]);

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
          $id = $key->id;
        }

        
            $msps_full_name = All_User::find($id);

            //echo $msps_full_name;

            $msps_full_name->full_name = $request->f_name;

            $msps_full_name->save();

            return redirect('/dashboard/msps_settings_page');


    }



    public function edit_username(Request $request){

        $request->validate([

           'user_name' => 'required|unique:users|min:3|max:30|bail'

        ],
        [

            'user_name.required' => "**Enter New Username**",
            'user_name.unique:users' => "**This User Name Is Allready Exists**",
            'user_name.min' => "**User Name Must Be Atleast (3) Character**",
            'user_name.max' => "**User Name Can't Contain More Than (30) Character**"

        ]);

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
          $id = $key->id;
        }

        
            $msps_user_name = All_User::find($id);

            //echo $msps_full_name;

            $msps_user_name->user_name = $request->user_name;

            $msps_user_name->save();

            Cookie::queue(Cookie::forget('username'));
            $request->session()->flush();

            return redirect('/login/login_page');
        
    }

    public function edit_email(Request $request){


    	$request->validate([

           'email' => "required|email|unique:users|max:50|bail",

        ],
        [

            'email.required' => "**Enter Your Email Address**",
            'email.email' => "**Enter A Valid Email Address**",
            'email.unique.users' => "**This Email Id Is Allready Exists**",
            'email.max' => "**Too Large Email Address**"

        ]);

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
          $id = $key->id;
        }

        
            $msps_email = All_User::find($id);

            //echo $msps_full_name;

            $msps_email->email = $request->email;

            $msps_email->save();

            Cookie::queue(Cookie::forget('username'));
            $request->session()->flush();

            return redirect('/login/login_page');



    }

    
    public function edit_image(Request $request){


        $request->validate([

           'image' => 'required|image|mimes:jpeg,png,jpg,gif|bail'

        ],
        [

            'image.required' => "**Upload Your Photo**",
            'image.image' => "**Upload (jpeg,png,jpg,gif) File**",
            'image.mimes' => "**File Type Must Be(jpeg,png,jpg,gif)**"

        ]);
       
       //-----file move----------

            $image = $request->file('image');
            

            $filename = time().".".$image->getClientOriginalExtension();

            $image->move('all_users_photo', $filename);

        //----------------------



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
          $id = $key->id;
        }

        
            $msps_image = All_User::find($id);

            $msps_image->image = $filename;

            $msps_image->save();

            return redirect('/dashboard/msps_settings_page');




    }


    public function edit_password(Request $request){

       
       $request->validate([

            'password' => 'required|min:6|bail',
            'cpassword' => 'required|same:password|bail',

        ],
        [

            'password.required' => "**Set New Password**",
            'password.min' => "**PassWord Must Be Atleast (6) Character**",
            'cpassword.required' => "**Confirm Your Password**",
            'cpassword.same' => "**PassWord Mismatch**",

        ]);

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
          $id = $key->id;
        }

        
            $msps_password = All_User::find($id);

            //echo $msps_full_name;

            $msps_password->password = $request->password;

            $msps_password->save();

            Cookie::queue(Cookie::forget('username'));
            $request->session()->flush();

            return redirect('/login/login_page');


    }


     public function edit_gender(Request $request){

         $request->validate([

           'gender' => 'required',

        ],
        [

            'gender.required' => "**Select Your Gender**"

        ]);

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
          $id = $key->id;
        }

        
            $msps_gender = All_User::find($id);

            $msps_gender->gender = $request->gender;

            $msps_gender->save();

            return redirect('/dashboard/msps_settings_page');


     }

      public function edit_dob(Request $request){

         $request->validate([

           'date' => 'required'

        ],
        [

            'date.required' => "**Enter Your Date of Birth**"

        ]);

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
          $id = $key->id;
        }

        
            $msps_dob = All_User::find($id);

            $msps_dob->dob = $request->date;

            $msps_dob->save();

            return redirect('/dashboard/msps_settings_page');


     }


     public function edit_blood(Request $request){

         $request->validate([

           'blood_type' => 'required',

        ],
        [

            'blood_type.required' => "**Select Your Blood Group**"

        ]);

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
          $id = $key->id;
        }

        
            $msps_blood = All_User::find($id);

            $msps_blood->blood_type = $request->blood_type;

            $msps_blood->save();

            return redirect('/dashboard/msps_settings_page');


     }

     
     public function edit_contact(Request $request){

         $request->validate([

           'phone' => 'required|numeric|bail'

        ],
        [

            'phone.required' => "**Give Your Phone NO**",
            'phone.numeric' => "**Pnone No Must Be Numeric Data**"

        ]);

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
          $id = $key->id;
        }

        
            $msps_contact = All_User::find($id);

            $msps_contact->contact = $request->phone;

            $msps_contact->save();

            return redirect('/dashboard/msps_settings_page');


     }


     public function edit_donation_status(Request $request){

      
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
          $id = $key->id;
        }

        $blood_status = Msps::where('user_id', $id)
                            ->get();

            foreach ($blood_status as $status) {
              $status_id = $status->msps_id;
             }

        
            $msps_donation = Msps::find($status_id);

            $msps_donation->status = $request->b_d_status;

            $msps_donation->save();

            return redirect('/dashboard/msps_settings_page');


     }


     public function delete_account(Request $request){

         $request->validate([

           'enter_pass' => 'required'

        ],
        [

            'enter_pass.required' => "**Enter Your Password**"
            

        ]);

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
                     ->where('password', $request->enter_pass)
                     ->get(); 


        foreach ($msps as $key) {
          $id = $key->id;
        }


            if(All_User::destroy($id)){

              Msps::where('user_id', $id)->delete();
              
              return redirect('/login/login_page');

          }  

            return redirect('/dashboard/msps_settings_page');


     }





}
