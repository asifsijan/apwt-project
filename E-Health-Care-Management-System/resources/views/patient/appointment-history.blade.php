@extends('patient.layout')

@section('content')

    <h2 style="color: rgb(0, 126, 0);">{{session('appointment_successful_message')}}</h2>

    <fieldset style="display: inline-block;">

        <legend>
            <h2> APPOINTMENT HISTORY </h2>
        </legend>


        <table id="adTable" width="1000px" border="1" style="border-collapse: collapse;">
            <tr height="50px">
                <td><h3>Your Problem </h3></td>
                <td><h3>Assigned Doctor </h3></td>
                <td><h3> Doctor's Suggestion </h3></td>
            </tr>

            <tbody id="adTableBody">

                @foreach ($appointments as $appointment)
                <tr height="50px">
                    <td>{{$appointment->problem_details}}</td>
                    <td>{{$appointment->doctor_id}}</td>
                    <td>{{$appointment->suggestion != '' ? $appointment->suggestion : 'No Suggestion Yet'}}</td>
                </tr>
                @endforeach

            </tbody>
        </table> 

    </fieldset>


@endsection