<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Doctor;
use App\User;
use Validator;


class DoctorController extends Controller
{
    //


	public function index(){
		return view('doctor.register');
	}




	public function store(){

			
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
