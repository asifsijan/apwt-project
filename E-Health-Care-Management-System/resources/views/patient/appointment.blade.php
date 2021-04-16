@extends('patient.layout')

@section('content')

    <form action="/patient/appointment/{doctor_id}" method="POST">
        @csrf

        <fieldset style="display: inline-block;">

            <legend>
                <h2>Dr. {{$doctor->name}}'s Appointment</h2>
            </legend>


                <table align="center">

                    <tr height="20px">
                        <td><label for="problem_details">Problem Detail:</label></td>
                        <td><textarea type="text" id="problem_details" name="problem_details" rows="20" cols="50" value="{{old('problem_details')}}"></textarea></td>
                        <td id="problem_detailsError" width = "150px" style="color: red;"> {{$errors->first('problem_details')}} </td>
                        <input type='hidden' name='doctor_id' value='{{$doctor->id}}'>                                   
                    </tr>

                    <tr>
                        <td colspan="2" style="padding-left: 5px;">
                            <hr><br>
                            <input type="submit" name="postProblem" value="Post">
                        </td>
                    </tr>
                
                </table> 

        </fieldset>
    </form>

@endsection