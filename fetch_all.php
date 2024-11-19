<?php include("connection.php"); 

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fetch All Data</title>
    <link rel="stylesheet" type="text/css" href="fetch_all.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="title">
                Fetch All Student Details
            </div>
            <div class="form">
                <div class="input_field">
                    <input type="submit" value="Fetch All Data" class="btn" name="fetch_all">
                </div>
            </div>
        </form>

        <?php
        if (isset($_POST['fetch_all'])) {
            // Prepare the SQL statement to fetch all records from the table
            $stmt = $conn->prepare("SELECT * FROM s_detail");
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Output data of each row in a table
                echo "<table border='1'>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>CGPA</th>
                            <th>Semester</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['fname']}</td>
                            <td>{$row['lname']}</td>
                            <td>{$row['cgpa']}</td>
                            <td>{$row['semester']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['address']}</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found.";
            }

            $stmt->close();
        }
        ?>
    </div>
</body>
</html>
