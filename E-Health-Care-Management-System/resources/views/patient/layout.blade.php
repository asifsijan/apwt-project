
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="styles.css">
 
    </head>

    <body>
        <table border="1" style="border-collapse: collapse;" width = "100%"> 
            <tr>
                <td align="center" style="border:0px">  <h1> E-Health Care Management System </h1> </td>
                <td style="border:0px; padding-right:15px" align="right">
                        Logged in as {{session('name')}} | <a href="/logout"> Logout </a>  
                </td>
            </tr>

            <tr height="500px">
                <td valign="top" colspan="2">
                    <table border="1" style="border-collapse: collapse;" width="100%">
                        <tr height="500px">
                            <td width="270px" valign="top">
                                <table style="padding-left: 15px;" width="100%">   
                                    <tr>
                                        <td>
                                            <h2>Patient Dashboard</h2>
                                            <hr>
                                        </td>
                                    </tr>

                                   <tr>
                                        <td>   
                                            <ul>
                                                <li><a href="/patient/dashboard"> Show Available Doctors </a></li><br>
                                                <li><a href="/patient/appointment-history"> My Appointments </a></li><br>
                                                <li><a href="">View Profile</a></li><br>
                                                <li><a href="">Edit Profile</a></li><br>
                                                <li><a href="">Delete Account</a></li><br>
                                                <li><a href="/logout">Logout</a></li><br>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                            <td align='center'>

                                @yield('content')

                            </td>
                        </tr>
                    </table>  
                </td>
            </tr>

            <tr height="50px">
                <td align="center" colspan="2"> Copyright@2020 </td>
            </tr>
        </table>
    </body>
</html>