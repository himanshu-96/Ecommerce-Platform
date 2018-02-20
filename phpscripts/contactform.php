<?php
	
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	
	$name=$_POST['name-7'];
	$email=$_POST['email-9'];
	$field=$_POST['field-4'];
	
	$sql="INSERT INTO contact (name, email, message) VALUES ('$name','$email','$field')";
	echo '<script>alert ("Thank You for your Feedback");</script>';
	header("Location: ../libaaz.php");	