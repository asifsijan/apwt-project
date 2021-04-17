<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\All_User;
use App\Msps;
use Validator;
use App\Http\Requests\Msps_Register;


class RegisterController extends Controller
{
    public function view_reg_page(){
        return view('register.msps_register');
    }

    public function insert_msps(Msps_Register $req){
        
           $image = $req->file('image');
            

            $filename = time().".".$image->getClientOriginalExtension();

            $image->move('all_users_photo', $filename);

            $msps = new All_User();

            $msps->full_name        = $req->fname;

            $msps->user_name        = $req->user_name;

            $msps->email            = $req->email;

            $msps->image            = $filename;

            $msps->password         = $req->password;

            $msps->dob              = $req->date;

            $msps->gender           = $req->gender;

            $msps->blood_type       = $req->blood_type;

            $msps->nid              = $req->nid;

            $msps->contact          = $req->phone;

            $msps->user_type        = "msps";

            $msps->save();


        $msps_donation_status = All_User::where('user_name', $req->user_name)
                     ->where('password', $req->password)
                     ->get(); 


        foreach ($msps_donation_status as $key) {
          $id = $key->id;
        }

         $donation_status = new Msps();

         $donation_status->user_id = $id;
         $donation_status->status = "disable";

         $donation_status->save();


            return redirect('/login/login_page');
    }

}
