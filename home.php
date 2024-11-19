

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobLift</title>
    <style>
        /* Global reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-image : url("bgggg.png");
            color: #333;
        }

        /* Navigation Bar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #1E2A47; /* Dark blue for professional look */
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position:fixed;
            width: 100%;
            height:45px;
        }

        nav .logo img {
            width: 60px;
            height:60px;
           
            border-radius:30px;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 25px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #FF6347; /* Tomato red on hover */
            color: white;
        }

        /* Hero Section */
        .hero-section {
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-image: url('background-image.jpg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
            position: relative;
            z-index: -1;
        }

        .hero-content {
            background: rgba(0, 0, 0, 0.6); /* Dark overlay for readability */
            padding: 50px;
            border-radius: 10px;
            max-width: 750px;
        }

        .hero-section h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            color: #FFD700; /* Bright Gold */
        }

        .hero-section p {
            font-size: 1.6rem;
            margin-bottom: 30px;
            color: #ecf0f1; /* Light gray for text */
        }

        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            color: #1E2A47; /* Dark blue */
            background-color: #FF6347; /* Tomato red for the button */
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 25px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, color 0.3s, transform 0.3s ease;
        }

        .cta-button:hover {
            background-color: #34D399; /* Mint green on hover */
            color: white;
            transform: scale(1.05);
        }

        /* Features Section */
        .features {
            padding: 50px;
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }

        .feature-card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1;
            max-width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;

        }

        .feature-card a{
            text-decoration:none;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .feature-card h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #1E2A47;
        }

        .feature-card p {
            font-size: 1rem;
            color: #555;
        }

        /* Contact Section */
        .contact {
            background-color: #1E2A47;
            color: white;
            padding: 50px;
            text-align: center;
        }

        .contact h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .contact form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .contact form input, .contact form textarea {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .contact form button {
            background-color: #FF6347;
            color: white;
            border: none;
            padding: 10px;
            font-size: 1.2rem;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            
        }
        .contact form button a {
            text-decoration:none;
            color: white;
        }
        


        .contact form button:hover {
            background-color: #34D399;
        }

        /* Footer Section */
        footer {
            background-color: #1E2A47;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="logo">
            <img src="logo1.png" alt="Logo" />
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="jobdetail.php">Find Jobs</a></li>
            <li><a href="contactWithNav.html">Contact Us</a></li>
            <li><a href="fileupload.php" class="btn">Register</a></li>
            <!-- <li><a href="login.php" class="btn">Login</a></li> -->
        </ul>
    </nav>

    <!-- Hero Section with Image Background -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Welcome to JobLift</h1>
            <p>Your gateway to seamless recruitment.</p>
            
                <a href="about.php" class="cta-button">Learn More</a>
            
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="feature-card">
           <a href="loginTeacher.php"> <h3>For Admin</h3>
            <p>Manage user roles, approve applications, and oversee the entire process.</p>
            </a>
        </div>
        <div class="feature-card">
           <a href="login.php"> <h3>For Students</h3>
            <p>Find the best opportunities and kickstart your career with ease.</p>
            </a>
        </div>
        <div class="feature-card">
            <a href="reclog.php"><h3>For Recruiters</h3>
            <p>Access a pool of talented candidates and build your dream team.</p></a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <h2>Contact Us</h2>
        <form action="#" method="post">
            <input type="text" placeholder="Your Name" required name='name'>
            <input type="email" placeholder="Your Email" required name='email'>
            <textarea rows="4" placeholder="Your Message" required name='message'></textarea>
          
          <button type="submit" name='submit'> <a href="http://localhost/joblift/contactus.html">Send Message</a></button>
      
        </form>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 JobLift. All Rights Reserved by Sajid Ansari.</p>
    </footer>

</body>
</html>




<?php
// Step 1: Connect to the MySQL database
$servername = "localhost";  // XAMPP uses localhost for the MySQL server
$username = "root";         // default username for XAMPP MySQL is "root"
$password = "";             // default password for XAMPP MySQL is an empty string
$dbname = "contact";   // the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Handle form submission
if (isset($_POST['submit'])) {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Step 3: Insert data into the database
    $sql = "INSERT INTO info (name, email, message) 
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>


