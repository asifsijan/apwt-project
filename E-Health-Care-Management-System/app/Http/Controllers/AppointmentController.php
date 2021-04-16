<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $appointments = DB::table('appointments')
		->where('patient_id', session('patient_id'))
		->get();
        foreach ($appointments as $appointment) 
        {
            $doctor = Doctor::find($appointment->doctor_id);
            $appointment->doctor_id = $doctor->name;
        }
        return view('patient.appointment-history', ['appointments' => $appointments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($doctor_id)
    {
        //
        return view('patient.appointment', ['doctor' => Doctor::find($doctor_id)]);
 

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
            'problem_details' => 'required'
        ]);

        $appointment = new Appointment();

        $appointment->problem_details = $request->problem_details;
        $appointment->patient_id = session('patient_id');
        $appointment->doctor_id = $request->doctor_id;

        $request->session()->flash('appointment_successful_message', 'The doctor will see to your problem');
        $appointment->save();

        return redirect('/patient/appointment-history');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
