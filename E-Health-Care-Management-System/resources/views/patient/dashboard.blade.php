@extends('patient.layout')

@section('content')

    <form action="/patient/dashboard" method="POST">
        @csrf
        <div style="padding-left: 700px;">
        Show Doctor by Category: 
            <select name="category" id="category">
                <option value=""></option>
                <option value="Neurologist" @if (old('category') == "Neurologist")
                selected
            @endif>Neurologist</option>
                <option value="Surgeon" @if (old('category') == "Surgeon")
                selected
            @endif>Surgeon</option>
                <option value="Orthopedic" @if (old('category') == "Orthopedic")
                selected
            @endif>Orthopedic</option>
            </select>

            <input type="submit" value="Search">
        </div>
    </form>

    <fieldset style="display: inline-block;">
        <legend> <h2>AVAILABLE DOCTORS </h2> </legend>
        
        <table id="adTable" width="1000px" border="1" style="border-collapse: collapse;">
                <tr height="50px">
                    <td><h3>Doctor Name </h3></td>
                    <td><h3>Doctor Category </h3></td>
                    <td><h3>Doctor Degree </h3></td>
                    <td><h3>Action</h3></td>
                </tr>

            <tbody id="adTableBody">

                @foreach ($doctors as $doctor)
                <tr height="50px">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->category}}</td>
                    <td>{{$doctor->degree}}</td>
                    <td> <a href="/patient/appointment/{{$doctor->id}}"><button>Take Appointment</button></a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </fieldset>

@endsection