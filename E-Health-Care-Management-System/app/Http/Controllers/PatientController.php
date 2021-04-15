<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Doctor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('patient.dashboard', ['doctors' => Doctor::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('patient.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
            'email' => 'required|email|unique:patients,email',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|min:8|same:password',
            'dob' => 'required',
            'gender' => 'required',
            'blood_type' => 'required',
            'phone' => 'required|digits_between:11,11',
        ]);

        $patient = new Patient();

        $patient->name = $request->name;
        $patient->email = $request->email;
        $patient->password = $request->password;
        $patient->dob = Carbon::parse($request->dob)->format('Y-m-d');
        $patient->gender = $request->gender;
        $patient->blood_type = $request->blood_type;
        $patient->phone = $request->phone;

        $patient->save();

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
