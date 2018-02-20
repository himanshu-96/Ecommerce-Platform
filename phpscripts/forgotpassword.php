<?php
	
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysqli_connect_error());
	}
	
	$email = filter_input(INPUT_POST, 'email',  FILTER_SANITIZE_STRING);
	$contact = filter_input(INPUT_POST, 'contact',  FILTER_SANITIZE_STRING);
	$number = rand(10,100000);
	
	if($email != NULL){}
	if($number != NULL){}
	mysqli_close($conn);