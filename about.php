<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - JobLift</title>
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
            background-color: #f9f9f9;
            color: #333;
        }

        /* Navigation Bar */
        nav {
            position:fixed;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #1e2a47d4; /* Dark blue for professional look */
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width:100%; 
            height:50px;
        }

        nav .logo img {
            width: 60px;
            height: auto;
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

        /* About Section */
        .about-container {
            display: flex;
            justify-content: space-between;
            padding: 50px;
            background-color: #fff;
        }

        .about-text {
            width: 48%;
            height:530px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .about-text h1 {
            font-size: 3rem;
            color: #1E2A47;
            margin-bottom: 20px;
        }

        .about-text p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
        }
        /* Style for the Join JobLift button */
.btn-register {
    color: white;
    background-color: #FF6347; /* Tomato red */
    padding: 10px 20px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.btn-register:hover {
    background-color: #1E2A47; /* Dark blue on hover */
}

        /* Slideshow Container */
        .slideshow-container {
            width: 48%;
            height: 350px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Hide all images by default */
        .mySlides {
            display: none;
            width: 100%;
            height: 100%;
        }

        /* Navigation buttons (optional) */
        .prev, .next {
            position: absolute;
            top: 50%;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            cursor: pointer;
            border-radius: 50%;
            user-select: none;
            transition: background-color 0.3s ease;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        /* Footer Section */
        footer {
            background-color: #1E2A47;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .mySlides{
            width:50vw;
            height:50%;
        }
        .mySlides img
{
    margin-left:50px;   
    width: 90%;;
    height:530px;
    border-radius:10px;
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
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="fileupload.php" class="btn">Register</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
        </ul>
    </nav>

    <!-- About Section with Text on Left and Slideshow on Right -->
    <section class="about-container">
        <!-- About Text Section -->
        <div class="about-text">
            <h1>JobLift</h1>
            <p>
            JobLift brings together students and recruiters on one dynamic platform, ensuring a seamless and efficient recruitment process. Whether you're a student hunting for your first job or a recruiter seeking top talent, JobLift is your trusted partner in success. With easy profile creation, job applications, and streamlined shortlisting, JobLift makes the hiring process faster and more efficient for everyone.
            
            </p>
            <p>Ready to elevate your career or recruitment game? Join <a href="fileupload.php" class="btn-register">JobLift</a>today!</p>

            
        </div>

        <!-- Slideshow Section -->
        <div cass="slideshow-container">
            <div class="mySlides">
                <img src="bgggg.png" alt="Image 1">
            </div>
            <div class="mySlides">
                <img src="1378871.jpg" alt="Image 2">
            </div>
            <div class="mySlides">
                <img src="3.png" alt="Image 3">
            </div>
            <div class="mySlides">
                <img src="4.png" alt="Image 4">
            </div>
            <div class="mySlides">
                <img src="5.jpeg" alt="Image 5">
            </div>

            <!-- Navigation Buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Campus Recruitment System. All Rights Reserved.</p>
    </footer>

    <script>
        // Slideshow functionality
        let slideIndex = 0;

        function showSlides() {
            let slides = document.getElementsByClassName("mySlides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }    
            slides[slideIndex - 1].style.display = "block";  
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }

        // Navigation button functionality
        function plusSlides(n) {
            slideIndex += n;
            if (slideIndex > slides.length) { slideIndex = 1; }
            if (slideIndex < 1) { slideIndex = slides.length; }
            showSlides();
        }

        showSlides(); // Initial call to start the slideshow
    </script>

</body>
</html>
