<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
            footer
            {
                background: #eee;
                padding: 20px;
                text-align: center;
            }
        </style>
    </head>

    <body>

        <table border="1" style="border-collapse: collapse;" width = "100%">

            <tr>

                <td align="center" style="border:0px">  <h1> E-Health Care Management System </h1> </td>
                <td style="border:0px; padding-right:15px" align="right">
                    <a href="/"> Home </a>
                </td>

            </tr>
            

            <tr>

                <td colspan="2" align="center" style="padding: 100px">
                    
                    <form action='/login' method='POST'>

                        @csrf

                        <fieldset style="display: inline-block;">
                            
                            <legend>LOGIN</legend>
                            <table width="500px">


                                <tr>

                                    <td align="right" width="100px">

                                        <label for="email"> Email: </label>

                                    </td>

                                    <td>

                                        <input type="text" name="email" id="email" value="{{ old('email') }}">
                                    
                                    </td>

                                    <td id="emailError" width="300px" style="color: red;"> {{ $errors->first('email') }} {{Session::get('errorMessage')}}</td>

                                </tr>


                                <tr>
                                
                                    <td align="right">
                                        <label for="password"> Password: </label>
                                    </td>

                                    <td>
                                    
                                        <input type="password" name="password" id="password" value="{{old('password')}}">

                                    </td>

                                    <td id="passwordError" width="300px" style="color: red;">{{ $errors->first('password') }}</td>
                                
                                </tr>


                                <tr>

                                    <td colspan="3"> <hr> </td>

                                </tr>


                                <tr>
                                
                                    <td colspan="3">

                                        <input type="checkbox" name="rememberMe" value="rememberMe" id="rememberMe">
                                        <label for="rememberMe"> Remember Me </label>

                                    </td>

                                </tr>


                                <tr>
                                    <td>
                                        <input type="submit" name="LogIn" value="Log In">
                                    </td>

                                    <td colspan="2">
                                        Don't have an account?<a href="/patient/register"> Register </a>
                                    </td>
                                </tr>



                            </table>

                        </fieldset>


                    </form>
            
                </td>

            </tr>

            <tr height="50px">
                <td align="center" colspan="2"> <footer> Copyright@2020 </footer> </td>
            </tr>

        </table>

    </body>

</html>