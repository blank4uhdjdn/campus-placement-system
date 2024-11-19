<?php
    // Database connection variables
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'job_portal';
    
    // Create a new connection
    $conn = new mysqli($host, $user, $password, $db_name);
    
    // Check if the connection is successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Form handling on POST request
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Get the form data
        $job_title = $_POST['job_title'];
        $company_name = $_POST['company_name'];
        $location = $_POST['location'];
        $job_description = $_POST['job_description'];
        $skills_required = $_POST['skills_required'];

        // Validate input (check if fields are not empty)
        if (!empty($job_title) && !empty($company_name) && !empty($location) && !empty($job_description) && !empty($skills_required)) {
            // Prepare the SQL query using a prepared statement
            $stmt = $conn->prepare("INSERT INTO job_requirements (job_title, company_name, location, job_description, skills_required) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $job_title, $company_name, $location, $job_description, $skills_required);
            
            // Execute the statement
            if ($stmt->execute()) {
                echo "<script type='text/javascript'>alert('Successfully Registered');</script>";
                header("location: home.php");
                        die;  
            } else {
                echo "<script type='text/javascript'>alert('Error occurred during registration');</script>";
            }
            
            // Close the statement
            $stmt->close();
        } else {
            echo "<script type='text/javascript'>alert('Please fill all the fields');</script>";
        }
    }

    // Close the connection
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Info</title>
    <link rel="stylesheet" href="s.css">
</head>
<body>
    <div class="signup">
       <h1>Upload Job Requirement</h1>
       <form method="post">
        <label>Job Title</label>
        <input type="text" name="job_title" required>
        <label>Company Name</label>
        <input type="text" name="company_name" required>
        <label>Location</label>
        <input type="text" name="location" required>
        <label>Job Description</label>
        <input type="text" name="job_description" required>
        <label>Skills Required</label>
        <input type="text" name="skills_required" required> 
        <input type="submit" value="Submit">
       </form> 
    </div>
</body>
</html>
