@extends('layout.main')

@section('main_content')

<div class="container">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="card">
          
          <div class="card-header">
           
           <div>
             <strong><h3>Account Settings</h3></strong>
           </div>
           <hr style="border: 1px solid blue;">
           <hr>

           </div>

          <div class="card-body">

            
          <div class="card-header">
           
           <div>
             <strong><h4>Full Name</h4></strong>
           </div>

          </div>

          @foreach($msps_dash as $info)
    
<form method="post" action="{{route('change_full_name')}}">

  @csrf

  
  <div class="form-group">
    <label for="full_name" class="form-label">Current Name</label>
    <input type="text" class="form-control" id="full_name" value="{{ $info->full_name }}" >
  </div>

  <div class="form-group">
    <label for="f_name" class="form-label">New Name</label>
    <input type="text" name="f_name" class="form-control @error('f_name') is-invalid @enderror" id="f_name"  value="{{old('f_name')}}">

    @error('f_name')

    <div class="alert-danger">{{ $message }}</div>

    @enderror
    
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Save Change</button>

</form>

<hr style="border: 1px solid black; ">



<div class="card-header">
           
           <div>
             <strong><h4>User Name</h4></strong>
           </div>

          </div>
    
<form method="post" action="{{route('change_username')}}">

  @csrf

  <div class="form-group">
    <label for="uname" class="form-label">Current User Name</label>
    <input type="text" class="form-control" id="uname" value="{{ $info->user_name }}">
  </div>

  <div class="form-group">
    <label for="user_name" class="form-label">New User Name</label>
    <input type="text" class="form-control  @error('user_name') is-invalid @enderror" id="user_name" name="user_name" value="{{ old('user_name') }}">

    @error('user_name')

    <div class="alert-danger">{{ $message }}</div>

    @enderror
    
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Save Change</button>

</form>

<hr style="border: 1px solid black; ">


<!------email------------->

<div class="card-header">
           
           <div>
             <strong><h4>Email </h4></strong>
           </div>

          </div>
    
<form method="post" action="{{route('change_email')}}">

  @csrf

  <div class="form-group">
    <label for="email" class="form-label">Current Email Address</label>
    <input type="text" class="form-control" id="email" value="{{ $info->email }}">
  </div>

  <div class="form-group">
    <label for="email" class="form-label">New Email Address</label>

    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">

    @error('email')

    <div class="alert-danger">{{ $message }}</div>

    @enderror
    
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Save Change</button>

</form>

<hr style="border: 1px solid black; ">


<!------Image------------->


<div class="card-header">
           
           <div>
             <strong><h4>Profile Picture</h4></strong>
           </div>

          </div>
    
<form method="post" enctype="multipart/form-data" action="{{route('change_image')}}">

  @csrf

  <div class="form-group">
    
    <img src="{{asset('/all_users_photo')}}/{{$info['image']}}" alt="Admin" class="rounded-circle" width="150">

  </div>

  <div class="form-group">
    <label for="image" class="form-label">Upload A New Photo</label>

    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">

    @error('image')

    <div class="alert-danger">{{ $message }}</div>

    @enderror
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

<hr style="border: 1px solid black; ">



<!------passowrd------------->


<div class="card-header">
           
           <div>
             <strong><h4>Password</h4></strong>
           </div>

          </div>
    
<form method="post" action="{{route('change_password')}}">

  @csrf

  <div class="form-group">
    <label for="password" class="form-label">Current Password</label>
    <input type="password" class="form-control" id="password" value="{{ $info->password }}">
  </div>

  <div class="form-group">
    <label for="new_pass" class="form-label">New Password</label>

    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">

    @error('password')

    <div class="alert-danger">{{ $message }}</div>

    @enderror
    
  </div>

  <div class="form-group">
    <label for="cpassword" class="form-label">Confirm New password</label>

    <input type="password" class="form-control @error('cpassword') is-invalid @enderror" id="cpassword" name="cpassword" value="{{ old('cpassword') }}" value="{{ old('cpassword') }}">

    @error('cpassword')

    <div class="alert-danger">{{ $message }}</div>

    @enderror
    
  </div>

  <button type="submit" name="submit" class="btn btn-primary"> Change Password</button>

</form >

<hr style="border: 1px solid black; ">


<!------DAte------------->


<div class="card-header">
           
           <div>
             <strong><h4>Date Of Birth</h4></strong>
           </div>

          </div>
    
<form method="post" action="{{route('change_dob')}}">

  @csrf

  <div class="form-group">
    <label for="date_of_birth" class="form-label">Current Date Of Birth</label>
    <input type="text" class="form-control" id="date_of_birth" value="{{ $info->dob }}">
    
  </div>

  <div class="form-group">
    <label for="date" class="form-label">New Date Of Birth </label>
    <input type="Date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}">

    @error('date')

     <div class="alert-danger">{{ $message }}</div>

    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Save Change</button>

</form>

<hr style="border: 1px solid black; ">


<!-------gender----->


<div class="card-header">
           
           <div>
             <strong><h4>Gender</h4></strong>
           </div>

          </div>
    
<form method="post" action="{{ route('change_gender')}}">

  @csrf

  <div class="form-group">
    <label for="current_gender" class="form-label">Current Gender</label>
    <input type="text" class="form-control" id="current_gender" value="{{ $info->gender }}">

  </div>

  <div class="form-group">

    <label for="select">Select Gender</label>
                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                <option value=""></option>

                <option value="male" {{ old('gender') == "male" ? 'selected' : '' }}>Male</option>

                <option value="female" {{ old('gender') == "female" ? 'selected' : '' }}>Female</option>

                <option value="other" {{ old('gender') == "other" ? 'selected' : '' }}>Other</option>


                                             
                </select>

                @error('gender')

                <div class="alert-danger">{{ $message }}</div>

                @enderror

    </div>

    <button type="submit" name="submit" class="btn btn-primary">Save Change</button>

</form >

<hr style="border: 1px solid black; ">



<!-------blood type----->


<div class="card-header">
           
           <div>
             <strong><h4>Blood Type</h4></strong>
           </div>

          </div>
    
<form method="post" action="{{ route('change_blood')}}">

  @csrf

  <div class="form-group">
    <label for="current_blood" class="form-label">Current Blood Type</label>
    <input type="text" class="form-control" id="current_blood" value="{{ $info->blood_type }}">

  </div>

  <div class="form-group">

  <label for="select">Blood Type</label>
            <select name="blood_type" class="form-control @error('blood_type') is-invalid @enderror">

            <option value=""></option>

              <option value="A+" {{ old('blood_type') == "A+" ? 'selected' : '' }}>A+</option>

              <option value="B+" {{ old('blood_type') == "B+" ? 'selected' : '' }}>B+</option>

              <option value="AB+" {{ old('blood_type') == "AB+" ? 'selected' : '' }}>AB+</option>

             <option value="O+" {{ old('blood_type') == "O+" ? 'selected' : '' }}>O+</option>
                                             
            </select>

            @error('blood_type')

                <div class="alert-danger">{{ $message }}</div>

                @enderror

</div>

        <button type="submit" name="submit" class="btn btn-primary">Save Change</button>

</form>

<hr style="border: 1px solid black; ">

<!-----------Contact--------->


<div class="card-header">
           
           <div>
             <strong><h4>Contact No</h4></strong>
           </div>

          </div>
    
<form method="post" action="{{ route('change_contact')}}" >

  @csrf

  <div class="form-group">
    <label for="phone_no" class="form-label">Current Contact No</label>
    <input type="text" class="form-control" id="phone_no" value="{{ $info->contact }}">
    
  </div>

  <div class="form-group">
    <label for="phone" class="form-label">New Contact No </label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">

               @error('phone')

                <div class="alert-danger">{{ $message }}</div>

                @enderror

  </div>
  
  <button type="submit" class="btn btn-primary">Save Change</button>


</form>


<hr style="border: 1px solid black; ">


<!------blood donation status------>

<div class="card-header">
           
           <div>
             <strong><h4>Blood Donation Status</h4></strong>
           </div>

    </div>

          @foreach($b_status as $blood_status)  
    
<form method="post" action="{{ route('change_donation_status')}}">

   @csrf

    <div class="radio">
      <label><input type="radio" name="b_d_status" id="b_d_status" value="enable" {{ ($blood_status->status == 'enable') ? 'checked' : ''}}>Enable</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="b_d_status" id="b_d_status" value="disable" {{ ($blood_status->status == 'disable') ? 'checked' : ''}}>Disable</label>
    </div>

    <button type="submit" class="btn btn-primary">Save Change</button>
  
  </form>

  @endforeach



<hr style="border: 1px solid black; ">

<!------Delete Account----->


<div class="card-header">
           
           <div>
             <strong><h4>Delete Account??</h4></strong>
           </div>

          </div>
    
<form method="post" action="{{ route('delete_account')}}">

  @csrf

  <div class="form-group">
    <label for="enter_pass" class="form-label">Enter Password</label>
    <input type="password" class="form-control @error('enter_pass') is-invalid @enderror" id="enter_pass" name="enter_pass">

               @error('enter_pass')

                <div class="alert-danger">{{ $message }}</div>

                @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Delete Account</button>

  
</form>

<hr style="border: 1px solid black; ">


@endforeach


           </div>
        </div>
            
    </div>
  </div>
</div>

@endsection