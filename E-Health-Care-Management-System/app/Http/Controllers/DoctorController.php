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

			$umail = User::where('email', $request->email)->get();
			$uname = User::where('user_name',$request->user_name)->get();

		    if(sizeof($umail) > 0 or sizeof($uname) > 0){

		        $msg = 'username or email already exists';
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
			$user->password = request('password');
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





		public function login(){

		return view('doctor.login');
	}



	public function verify(Request $req){



		$user = DB::table('users')
		->where('password', $req->password)
		->where('user_name', $req->name)
		->get();


		if($req->name == "" || $req->password == ""){
			$req->session()->flash('msg', 'null name or password...');
			return redirect('/login');

		}elseif(count($user) > 0 ){

			$req->session()->put('name', $req->name);
			return redirect('/doctor/home');
		}else{

			$req->session()->flash('msg', 'Invalid name or password...');
			return redirect('/doctor/login');
		}
	}




	public function home(Request $req){
		if($req->session()->has('name')){
		
			
			return view('doctor.home');
		}else{
			$req->session()->flash('msg', 'invalid request...login first!');
			return redirect('/doctor/login');
		}
		
	}



	public function logout(Request $req){

		$req->session()->flush();
		return redirect('/doctor/login');
	}














	}

