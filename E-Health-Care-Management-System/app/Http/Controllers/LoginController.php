<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{

    public function index()
    {

        return view('login');
    }

    public function verify(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
    
        $patient = DB::table('patients')
		->where('email', $request->email)
		->where('password', $request->password)
		->get();

        if(count($patient) > 0 )
        {
			$request->session()->put('name', $patient[0]->name);
            $request->session()->put('patient_id', $patient[0]->id);
			$request->session()->save(); 
			return redirect('/patient/dashboard');
            dd($patient);
		}
        else
        {
			$request->session()->flash('errorMessage', 'Invalid Email or Password!');
			return redirect('/login');
		}
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
		return redirect('/login');
    }


}
