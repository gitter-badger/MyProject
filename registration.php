<?php

    include_once 'include/class.user.php';
    $user = new User();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $user->reg_user($fullname, $uname,$upass, $uemail);
        if ($register) {
            // Registration Success
            echo 'Registration  successful <a href="login.php">Click here</a> to login';
        } else {
            // Registration Failed
            echo 'Registration failed. Email or Username already exits please try again';
        }
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      
        <title>Register</title>
		    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/main.css" media="all" />
		<script language="javascript" type="text/javascript"> 
		    function submitreg() {
                var form = document.reg;
				if(form.name.value == ""){
                    alert( "Enter name." );
                    return false;
                }
                else if(form.uname.value == ""){
                    alert( "Enter username." );
                    return false;
                }
                else if(form.upass.value == ""){
                    alert( "Enter password." );
                    return false;
                }
                else if(form.uemail.value == ""){
                    alert( "Enter email." );
                    return false;
                }
            } 
	</script> 
    </head>
    <body>
        <body>
        <div id="logincontainer">
            <h1>Registration Here</h1>
            <form action="" method="post" name="reg">
                <table>
                    <tr>
                        <th>Full Name:</th>
                        <td><input type="text" name="fullname" required></td>
                    </tr>
                    <tr>
                        <th>User Name:</th>
                        <td><input type="text" name="uname" required></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><input type="email" name="uemail" required placeholder="name@email.com"></td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td><input type="password" name="upass" required></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="submit" value="Register" onclick="return(submitreg());"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><a href="login.php">Already registered! Click Here!</a></td>
                        <td><a href="reset.php">Reset Your Password</a></td>
                    </tr>
                    
                </table>
            </form>
        </div>
    </body>
    </body>
</html>
