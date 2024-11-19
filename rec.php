<?php
// Include database connection file
$servername = "localhost";
$username = "root"; // default username for MySQL in XAMPP
$password = ""; // default password for MySQL in XAMPP
$dbname = "job_portal"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $location = $_POST['location'];
    $job_description = $_POST['job_description'];
    $skills_required = $_POST['skills_required'];

    // SQL query to insert data into the table
    $sql = "INSERT INTO job_requirements (job_title, company_name, location, job_description, skills_required)
            VALUES ('$job_title', '$company_name', '$location', '$job_description', '$skills_required')";

    if ($conn->query($sql) === TRUE) {
        echo "New job requirement uploaded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Job Requirement</title>
    <link rel="stylesheet" href="rec.css">

</head>
<body>

<!-- <div class='up'>
<p>Upload Job Requirement</p>

</div> -->
<div>
<form method="POST" action="">
    <h1>
    <p>Upload Job Requirement</p>
    </h1>
    <label for="job_title">Job Title:</label><br>
    <input type="text" id="job_title" name="job_title" required><br><br>

    <label for="company_name">Company Name:</label><br>
    <input type="text" id="company_name" name="company_name" required><br><br>

    <label for="location">Location:</label><br>
    <input type="text" id="location" name="location" required><br><br>

    <label for="job_description">Job Description:</label><br>
    <textarea id="job_description" name="job_description" rows="4" cols="50" required></textarea><br><br>

    <label for="skills_required">Skills Required:</label><br>
    <textarea id="skills_required" name="skills_required" rows="4" cols="50" required></textarea><br><br>

    <input type="submit" value="Upload Job">
    </div>
</form>

</body>
</html>
