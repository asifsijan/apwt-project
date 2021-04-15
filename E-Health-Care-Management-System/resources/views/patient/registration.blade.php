<!DOCTYPE html>

<html>
    <head>
        <title> Registration </title>
    </head>
    <body>
        <table border="1" style="border-collapse: collapse;" width = "100%">
                <tr>
                    <td align="center" style="border:0px">  <h1> E-Health Care Management System </h1> </td>
                    <td style="border:0px; padding-right:15px" align="right">
                        <a href="/"> Home </a> |
                        <a href="/login">Login</a>
                    </td>
                </tr>

                <tr height= '750px'>
                    <td align="Center" colspan="2"> 
                        <form action="/patient/register" method="POST">
                            @csrf
                            <fieldset style="display: inline-block;" >
                                <legend><h3>SIGN UP AS A PATIENT</h3></legend>
                                <table align="center"  width="800px">
                                    <tr height="40px">
                                        <td style="padding-left: 5px;"> <label for="name"> Name </td>
                                        <td style="padding-left: 5px;"> <input type="text" id="name" name="name" size="30" value="{{ old('name') }}" > </td>
                                        <td id="nameError" width = "200px" style="color: red;"> {{ $errors->first('name') }} </td>                    
                                    </tr>

                                    <tr>
                                        <td colspan="3"> <hr> </td>
                                    </tr>
                        
                                    <tr height = "40px">
                                        <td style="padding-left: 5px;"> <label for="email"> Email </label> </td>
                                        <td style="padding-left: 5px;"> <input type="text" id="email" name="email" size="30" value="{{ old('email') }}" > </td>
                                        <td id="emailError" width = "200px" style="color: red;"> {{ $errors->first('email') }} </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"> <hr> </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"> <hr> </td>
                                    </tr>

                                    <tr height = "40px">
                                        <td style="padding-left: 5px;"> <label for="password"> Password: </td>
                                        <td style="padding-left: 5px;"> <input type="password" id="password" name="password" size="30" value="{{old('password')}}"> </td>
                                        <td id="passwordError" width = "200px" style="color: red;"> {{ $errors->first('password') }} </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"> <hr> </td>
                                    </tr>

                                    <tr height = "40px">
                                        <td style="padding-left: 5px;"> <label for="confirmPassword"> Confirm Password </td>
                                        <td style="padding-left: 5px;"> <input type="password" id="confirmPassword" name="confirmPassword" size="30" value='{{old('confirmPassword')}}'> </td>
                                        <td id="confirmPasswordError" width = "200px" style="color: red;"> {{ $errors->first('confirmPassword') }} </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"> <hr> </td>
                                    </tr>

                                    <tr height = 40px>                    
                                        <td style="padding-left: 5px;" colspan="2"> 
                                            <input type="date" name="dob" value="{{ old('dob') }}">                         
                                        </td>
                                        <td id="dobError" width = "200px" style="color: red;"> {{ $errors->first('dob') }} </td>                   
                                    </tr>

                                    <tr>
                                        <td colspan="3"> <hr> </td>
                                    </tr>

                                    <tr height = 40px>                    
                                        <td style="padding-left: 5px;" colspan="2">
                                            <fieldset>
                                                <legend>Gender</legend>
                                                <input type="radio" name="gender" value="Male" @if (old('gender') == 'Male')
                                                    checked
                                                @endif id="genderOption1">
                                                <label for="genderOption1"> Male </label>
                                                <input type="radio" name="gender" value="Female" @if (old('gender') == 'Female')
                                                    checked
                                                @endif id="genderOption2">
                                                <label for="genderOption2"> Female </label>
                                                <input type="radio" name="gender" value="Other" @if (old('gender') == 'Other')
                                                    checked
                                                @endif id="genderOption3">
                                                <label for="genderOption3"> Other </label>
                                            </fieldset>
                                        </td>
                                        <td id="genderError" width = "200px" style="color: red;"> {{ $errors->first('gender') }} </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"> <hr> </td>
                                    </tr>

                                    <tr height="40px">
                                        <td style="padding-left: 5px;"> <label for="blood_type"> Blood Type: </td>
                                        <td style="padding-left: 5px;">
                                            <select name="blood_type" id="blood_type">
                                                <option value=""></option>
                                                <option value="A+" @if (old('blood_type') == "A+")
                                                selected
                                            @endif>A+</option>
                                                <option value="A-" @if (old('blood_type') == "A-")
                                                selected
                                            @endif>A-</option>
                                                <option value="B+" @if (old('blood_type') == "B+")
                                                selected
                                            @endif>B+</option>
                                                <option value="B-" @if (old('blood_type') == "B-")
                                                selected
                                            @endif>B-</option>
                                                <option value="AB+" @if (old('blood_type') == "AB+")
                                                selected
                                            @endif>AB+</option>
                                                <option value="AB-" @if (old('blood_type') == "AB-")
                                                selected
                                            @endif>AB-</option>
                                                <option value="O+" @if (old('blood_type') == "O+")
                                                selected
                                            @endif>O+</option>
                                                <option value="O-" @if (old('blood_type') == "O-")
                                                selected
                                            @endif>O-</option>
                                            </select>
                                        </td>
                                        <td id="blood_typeError" width = "200px" style="color: red;"> {{ $errors->first('blood_type') }} </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"> <hr> </td>
                                    </tr>

                                    <tr height="40px">
                                        <td style="padding-left: 5px;"> <label for="phone"> Phone No. </td>
                                        <td style="padding-left: 5px;"> <input type="text" id="phone" name="phone" size="30" value='{{old('phone')}}'> </td>
                                        <td id="phoneError" width = "200px" style="color: red;"> {{ $errors->first('phone') }} </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"> <hr> </td>
                                    </tr>

                                    <tr>                    
                                        <td align="center" colspan="3" align="left">
                                            <input type="submit" name="SignUp" value="Sign Up">     
                                        </td>                   
                                    </tr>                   
                                </table>
                            </fieldset>
                        </form>                                    
                    </td>
                </tr>

                <tr height="50px">
                    <td align="center" colspan="2"> Copyright@2021 </td>
                </tr>
        </table>
    </body>
</html>