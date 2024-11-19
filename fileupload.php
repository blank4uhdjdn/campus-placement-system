
<?php include("connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>file uploadc</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class='container'>
		<form action="" method="POST" enctype="multipart/form-data">
		<div class="title">
			Registration Form
		</div>
		<div class="form" >

			<div class="input_field">
				<label>First name</label>
				<input type="text" class="input" name="fname" Required>
				</div>

				<!-- <div class="input_field">
				<label>last name</label>
				<input type="text" class="input" name="lname">
				</div> -->
				
				<div class="input_field">
				<label>last name</label>
				<input type="text" class="input" name="lname"Required>
				</div>

				<div class="input_field">
				<label>Cgpa</label>
				<input type="text" class="input" name="password"Required>
				</div>

				<div class="input_field">
				<label>Semester</label>
				<input type="text" class="input" name="conpassword "required>
				</div>

				<div class="input_field">
				<label>Gender</label>
				<div class="custom_select">
				<select name="gender">
					<option value="not selected"required>select</option>
 					<option value="male">male</option>
 					<option value="female">female</option>

				</select>
			</div>
				</div>


				<div class="input_field">
				<label>Email</label>
				<input type="text" class="input" name="email" required>
				</div>

				<div class="input_field">
				<label>phone</label>
				<input type="text" class="input" name="phone"required>
				</div>

				<div class="input_field">
				<label>Address</label>
				<textarea class="textarea" name="address"></textarea>
				</div>

				<!-- <div class="input_field">
				<input type="file" name="uploadfile"><br><br>
		<input type="submit" name="submit" value="upload file">
				</div> -->

				<div class="input_field">
				<label>Image</label>
				<input type="file" 	name="uploadfile" style="width:100%"><br><br>
				</div>

				<div class="input_field terms">
				<label class="check">
				<input type="checkbox" class="input">
				<span class="checkmark"></span>
				</label>
				<p>Agree to terms and conditions</p>
				</div>

				<div class="input_field">
				<input type="submit" value="register" class="btn" name="register"> </div>

			</div>
			</form>
		</div>
	
	




<?php

//print_r($_FILES["uploadfile"]);

if($_POST['register'])
{
	 //print_r($_FILES["uploadfile"]);
	$filename= $_FILES["uploadfile"]["name"];
	$tempname= $_FILES["uploadfile"]["tmp_name"];
	
	$folder="file/".$filename;
	
	move_uploaded_file($tempname, $folder);

   	$fname=$_POST['fname'];
   	$lname=$_POST['lname'];
   	$pwd=$_POST['password'];
   	$cpwd=$_POST['conpassword'];
   	$gender=$_POST['gender'];
   	$email=$_POST['email'];
   	$phone=$_POST['phone'];
   	$address=$_POST['address'];

   	$query="INSERT INTO s_detail VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
    $data=mysqli_query($conn,$query);

    if($data){
    	echo "Data inserted into database";
		header("location: home.php");
		die; 
    }
    else{
    	echo "failed";
    }

   }
?>
