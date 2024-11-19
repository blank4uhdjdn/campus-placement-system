<?php
// Database connection
$servername = "localhost";  // Your MySQL server
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "job_portal";     // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

error_reporting(0);  // Disable error reporting for production

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Job Requirements</title>
    <link rel="stylesheet" type="text/css" href="fetch_data.css">  <!-- Optional external CSS for styling -->
</head>
<body>
    <div class="container">
        <h2>Job Requirements Data</h2>
        <!-- Form to fetch data -->
        <form action="" method="POST">
            <div class="input_field">
                <input type="submit" value="Fetch Job Data" class="btn" name="fetch_data">
            </div>
        </form>

        <?php
        // Check if the button to fetch data is pressed
        if (isset($_POST['fetch_data'])) {
            // Prepare SQL query to fetch all job requirements data
            $stmt = $conn->prepare("SELECT job_title, company_name, location, job_description, skills_required FROM job_requirements");
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if any data was fetched
            if ($result->num_rows > 0) {
                // Output data of each row in a table format
                echo "<table border='1'>
                        <tr>
                            <th>Job Title</th>
                            <th>Company Name</th>
                            <th>Location</th>
                            <th>Job Description</th>
                            <th>Skills Required</th>
                            
                        </tr>";

                // Loop through each row of data and display it
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['job_title']}</td>
                            <td>{$row['company_name']}</td>
                            <td>{$row['location']}</td>
                            <td>{$row['job_description']}</td>
                            <td>{$row['skills_required']}</td>
                            
                          </tr>";
                }

                // Close the table tag after displaying all data
                echo "</table>";
            } else {
                echo "No job requirements found.";
            }

            // Close the statement
            $stmt->close();
        }
        ?>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
