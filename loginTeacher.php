<?php
    session_start();
    include("dbteacher.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $gmail=$_POST['mail'];
        $password=$_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from form where email = '$gmail' Limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                        header("location: fetch_all.php");
                        die;
                    }
                }
                
            }
            echo "<script type ='text/javascript'> alert('wrong username or password')</script>";

        }
        else{
            echo "<script type ='text/javascript'> alert('wrong username or password')</script>";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="ls.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="box-register" id="register">
                <div class="top-header">
                    <h3></h3>
                    <small><h3>Hello!!</h3>
                        We are happy to have you with us.</small>
                    <br>
                     <div class="input-group">
                        <form method="POST">
                            <input type="email" name="mail" id="fname" required>
                            <label id="fn">Teacher's Email</label>
                            <input type="password" name="pass" id="pass">
                            <label>Password</label>
                             <br>
                            <a href="fetch_data.php"><input type="submit" class="input-submit" id="butt" value="Login"></a> 
                             <br>
                             Don't have an Account ?
                             <a id="sign" href="http://localhost/joblift/teacherSignup.php">Sign Up</a>
                            <br>
                            <br>
                           </form>
                     </div>
                </div>ss
            </div>
        </div>
    </div>
</body>

</html>
