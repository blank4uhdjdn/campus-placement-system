<?php
    session_start();
    include("db.php");  // Ensure db.php contains the correct database connection details

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Get form data
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];

        // Validate inputs
        if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
            // Query the reclog table for matching email
            $query = "SELECT * FROM reclog WHERE email = '$gmail' LIMIT 1";
            $result = mysqli_query($con, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                // Fetch user data from the query result
                $user_data = mysqli_fetch_assoc($result);

                // Check if the password matches
                if ($user_data['password'] == $password) {
                    // Store user id in session and redirect to the home page
                    $_SESSION['user_id'] = $user_data['id']; // Store the user id in session
                    header("Location: rec1.php"); // Redirect to the home page
                    exit;
                } else {
                    // If password doesn't match
                    echo "<script type='text/javascript'>alert('Wrong username or password');</script>";
                }
            } else {
                // If email doesn't exist in the database
                echo "<script type='text/javascript'>alert('Wrong username or password');</script>";
            }
        } else {
            // If fields are empty or invalid
            echo "<script type='text/javascript'>alert('Please fill in all fields');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Login</title>
    <link rel="stylesheet" href="ls.css"> <!-- Ensure ls.css is correctly styled -->
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="box-register" id="register">
                <div class="top-header">
                    <h3>Recruiter Login</h3>
                    <small><h4>Welcome back! Please log in to continue.</h4></small>
                    <br>
                    <div class="input-group">
                        <form method="POST">
                            <!-- Email input field -->
                            <input type="email" name="mail" id="fname" required>
                            <label id="fn">Email address</label>
                            
                            <!-- Password input field -->
                            <input type="password" name="pass" id="pass" required>
                            <label>Password</label>
                            
                            <br>
                            
                            <!-- Submit button for login -->
                            <input type="submit" class="input-submit" id="butt" value="Login">
                            
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
