<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Doctor;
use App\User;
use Validator;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    //


	public function index(){
		return view('doctor.register');
	}




	public function store(Request $request){

			$users = User::where('email', $request->email)->get();

		    # check if email is more than 1
		    if(sizeof($users) > 0){
		        # tell user not to duplicate same email
		        $msg = 'This user already signed up !';
		        echo $msg;
		       // return back();
		    }

		    else{
		    				
			$user = new User();
			$file1 = request('image');  
			$filename1 = time().".".$file1->getClientOriginalExtension();
			$file1->move('upload', $filename1);

			$user->user_name = request('user_name');
			$user->first_name = request('first_name');
			$user->last_name = request('last_name');
			$user->email = request('email');
			$user->password = bcrypt(request('password'));
			$user->image = $filename1;
			$user->dob = request('dob');
			$user->gender = request('gender');
			$user->blood_type = request('blood_type');
			$user->nid = request('nid');
			$user->contact = request('contact');
			$user->user_type = "invalid";
			$user->save();

			$adpm_id = User::latest()->first()->id;

			$doctor = new Doctor();
			$file = request('certificate');  
			$filename = time().".".$file->getClientOriginalExtension();
			$file->move('upload', $filename);

			$doctor->about            = request('about');
			$doctor->category         = request('category');
			$doctor->degree           = request('degree');
			$doctor->bmdc_id          = request('bmdc_id');
			$doctor->visit_fee        = request('visit_fee');
			$doctor->certificate = $filename;
			$doctor->status = "invalid";
			$doctor->adpm_id = $adpm_id;
			$doctor->save();
			return redirect('/home');


		    }




	}


	    public function verify(Request $req){


        $user = DB::table('users')
                    ->where('password', $req->password)
                    ->where('username', $req->username)
                    ->get();


        if($req->username == "" || $req->password == ""){
           $req->session()->flash('msg', 'null username or password...');
           return redirect('/login');

        }elseif(count($user) > 0 ){


            $req->session()->put('username', $req->username);
            return redirect('/home');
        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }






	}

