<?php include("connection.php"); 

error_reporting(0);?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fetch Data</title>
    <link rel="stylesheet" type="text/css" href="fetch_data.css">
</head>
<body>
    <div class='container'>
        <form action="" method="POST">
            <div class="title">
                Fetch Data by First Name
            </div>
            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname" required>
                </div>
                <div class="input_field">
                    <input type="submit" value="Fetch Data" class="btn" name="fetch">
                </div>
            </div>
        </form>

        <?php
        if (isset($_POST['fetch'])) {
            $fname = $_POST['fname'];

            // Prepare the SQL statement to prevent SQL injection
            $stmt = $conn->prepare("SELECT * FROM s_detail WHERE fname = ?");
            $stmt->bind_param("s", $fname);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Output data of each row
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
                echo "No records found for the given first name.";
            }

            $stmt->close();
        }
        ?>
    </div>
</body>
</html>