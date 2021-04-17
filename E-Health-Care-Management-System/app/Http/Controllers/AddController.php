<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\All_User;
use App\Ambulance_add;
use App\giveAddress;
use Validator;
use App\Http\Requests\AddPost;


use Illuminate\Support\Facades\Cookie;



class AddController extends Controller
{
     public function view_add_form(Request $request){

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




        return view('post_add.add_form')->with('msps_dash', $msps);
    }


    public function insert_ambulance(AddPost $request){


            $image = $request->file('image');
            

            $filename = time().".".$image->getClientOriginalExtension();

            $image->move('ambulance_post_photos', $filename);


            //-------user id -------


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

            //----------------

            $ambulance_post = new Ambulance_add();

            $ambulance_post->posted_by = $id;
            $ambulance_post->status = "available";
            $ambulance_post->ambulance_photo = $filename;
            $ambulance_post->type1 = $request->inner_air;
            $ambulance_post->type2 = $request->ambulance_type;
            $ambulance_post->phone = $request->phone;
            $ambulance_post->rate_per_km = $request->rate;
            $ambulance_post->details = $request->features;

            $ambulance_post->save();


            return redirect('/add/show_all_add');


    }


    public function show_all_add(Request $request){


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

       $ava = "available";

       $all_add = Ambulance_add::where('status',$ava )->paginate(6);




      return view('post_add.show_add')->with('msps_dash', $msps)->with('add_list', $all_add);

    }



    public function search_add(Request $request){

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

       
       $search_data = $request->search;
       $ava = "available";

      /* $get_data = Ambulance_add::where('status', $ava)
                                ->where('type2', 'like' , '%'.$search_data.'%')
                                ->paginate(1);
                                    */

        $get_data = Ambulance_add::where([
                                ['status', '=', $ava],
                                ['type2', 'like' , '%'.$search_data.'%']
                          
                                ])->paginate(6);

       $request->session()->flash('search_data', $search_data);

       return view('post_add.show_add')->with('msps_dash', $msps)->with('add_list', $get_data);

    }


    public function add_details(Request $request){

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

       $add_id = $request->add_id;
       
       $add_details = Ambulance_add::where('ambulance_id', $add_id)
                                     ->get();

       


       return view('post_add.show_add_details')->with('msps_dash', $msps)->with('all_details', $add_details);
       


    }


    public function give_address(Request $request){


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

       $add_id = $request->add_id;
       
       $add_details = Ambulance_add::where('ambulance_id', $add_id)
                                     ->get();

     

        return view('post_add.give_address')->with('msps_dash', $msps)->with('all_details', $add_details);

    }


    public function next(Request $request){



      $request->validate([

              'fname' => 'required',
              'email' => 'required',
              'phone' => 'required',
              'region' => 'required',
              'city' => 'required',
              'area' => 'required',
              'full_address' => 'required'

        ],
        [

            'fname.required' => "**Full Name Required**",
            'email.required' => "**Email Field Required**",
            'phone.required' => "**Contact NO Required**",
            'region.required' => "**Select Your Region**",
            'city.required' => "**Select Your City*",
            'area.required' => "**Select Your Area**",
            'full_address.required' => "**Enter full address Properly**",
            'payment_method.required' => "**Select Payment Method**"
            

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

      

       $add_id = $request->add_id;
       
       $add_details = Ambulance_add::where('ambulance_id', $add_id)
                                     ->get();

           foreach ($add_details as $add_info) {
             
             $ambulance_owner = $add_info->posted_by;
             $amb_driver_contact = $add_info->phone;

           }



            $rent_info = new giveAddress();

            $rent_info->rented_from = $ambulance_owner;
            $rent_info->rented_by = $request->user_id;
            $rent_info->region = $request->region;
            $rent_info->city = $request->city;
            $rent_info->area = $request->area;
            $rent_info->full_address = $request->full_address;
            $rent_info->ambulance_no = $add_id;
            $rent_info->driver_contact = $amb_driver_contact;
            $rent_info->payment_method = $request->payment_method;
            $rent_info->rent_order_status = "confirmed";
            $rent_info->total_paid_amount = "0";

            $rent_info->save();

       //-----updating ambulance table----------

            $update_amb_table = Ambulance_add::find($add_id);

            $update_amb_table->status = "false";

            $update_amb_table->save();

        //--------Getting Rent Info--------
            $rent_info = giveAddress::where('ambulance_no', $add_id)
                                     ->get();



    return view('post_add.rented_info_final')->with('msps_dash', $msps)->with('rent_info_final',$rent_info)->with('all_details', $add_details);
            

    }


      public function rent_release_list(Request $request){

           
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

        //--------Getting Rent Info--------

        $amount = "0";
        $release_list = giveAddress::where('total_paid_amount', $amount)
                                     ->get();


        
    return view('post_add.release_rented_adds')->with('msps_dash', $msps)->with('rent_release',$release_list); 

      }


       public function rent_release_details(Request $request){

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


        $rent_noo = $request->rent_no;
        $rented_byy = $request->rented_by;


        $amb_rent_no = giveAddress::where('rent_no', $rent_noo)
                                     ->get();

        $amb_rented_by = All_User::where('id', $rented_byy)
                                   ->get();



   return view('post_add.details_release')->with('msps_dash', $msps)->with('rent_number',$amb_rent_no)->with('rented_by',$amb_rented_by); 



       }


       public function rent_release_form(Request $request){

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


       $amb_rent_noo = $request->rent_no;
       $ambulance_noo = $request->ambulance_no;


    return view('post_add.release_form_page')->with('msps_dash', $msps)->with('rent_noo',$amb_rent_noo)->with('amb_noo',$ambulance_noo); 

       }




      public function edit_for_release(Request $request){

         

      $request->validate([

              'paid_amount' => 'required'
              

        ],
        [

            'paid_amount.required' => "**Enter Paid Amount**"
            
            

        ]); 

       
       $paid_amnt = $request->paid_amount;

       $rent_noo  = $request->rent_no;
       $ambulance_noo = $request->ambulance_no;


       //--------Updating ambulance table---
         
          $update_amb_table = Ambulance_add::find($ambulance_noo);

          $update_amb_table->status = "available";

          $update_amb_table->save();

        //--------Updating rent_info table----
          
          $update_rent_info_table = giveAddress::find($rent_noo);

          $update_rent_info_table->total_paid_amount = $paid_amnt;

          $update_rent_info_table->save();


          return redirect('/add/rent_release_page');



      }



}
