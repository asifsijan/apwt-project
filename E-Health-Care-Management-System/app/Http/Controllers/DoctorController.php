<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Doctor;
use App\User;
use App\Blog;
use App\Application;
//use Session;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



use Cviebrock\EloquentSluggable\Services\SlugService;

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
			$req->session()->save(); 
			return redirect('/doctor/home');
		}else{

			$req->session()->flash('msg', 'Invalid name or password...');
			return redirect('/doctor/login');
		}
	}




	public function home(Request $req){
		if($req->session()->has('name')){
			// $blog = \App\Blog::all();
			
			// return view('doctor.home');
		$blogs = Blog::orderBy('blog_id', 'desc')->paginate(5);

		    return view('doctor.home', [
		        'blogs' => $blogs
		    ]);


		}else{
			$req->session()->flash('msg', 'invalid request...login first!');
			return redirect('/doctor/login');
		}
		
	}



	public function logout(Request $req){

		$req->session()->flush();
		return redirect('/doctor/login');
	}



	public function addBlog(Request $req){
		if($req->session()->has('name')){
			return view('doctor.blogs');
		}else{
			$req->session()->flash('msg', 'invalid request...login first!');
			return redirect('/doctor/login');
		}
		
	}

	public function storeBlog(Request $req){



	

			$user = new Blog();


			$user->blog_name = request('blog_name');
			$user->blog_details = request('blog_details');

			// $d_id = User::select('id')
   //                         ->where('user_name', '=', 'asifsijan')
   //                         ->get(); 


//			$name = Session::get('name');

			if($req->session()->has('name')){
				$name = $req->session()->get('name');

			}

			//echo "$name";
			$d_id = DB::table('users')->where('user_name', $name)->value('id');

			$user->doctor_id = $d_id;

			$user->save();

			//$slug = SlugService::createSlug(Blog::class,'slug',$request->blog_name);

			return redirect('/doctor/home');


		




	}






	public function showBlog($blog_id){
		//dd($blog_id);
		//return view(doctor.blogShow)->with('blog', Blog::where('slug', $slug)->first());
		$blog = Blog::find($blog_id);
		return view('doctor.blogShow', ['blog' => $blog]);
	} 

	public function showApp(Request $req){

		if($req->session()->has('name')){
				$name = $req->session()->get('name');


			//echo "$name";
			$d_id = DB::table('users')->where('user_name', $name)->value('id');


		$applications = Application::select('app_id','patient_id', 'title', 'details','created_at')
                           ->where('doctor_id', '=', $d_id)
                           ->get();


        return view('doctor.application', ['applications' => $applications]);

			}
	}


	public function showSApp($app_id){
		
		$app = App::find($app_id);
		return view('doctor.appSShow', ['app' => $app]);
	} 




	}

