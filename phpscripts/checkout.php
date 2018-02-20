<?php
	
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysqli_connect_error());
	}
	
	
	$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
	$cardnumber = filter_input(INPUT_POST, 'cardnumber', FILTER_SANITIZE_STRING);
	$cardname = filter_input(INPUT_POST, 'cardname', FILTER_SANITIZE_STRING);
	$cardexpiry = filter_input(INPUT_POST, 'cardexpiry', FILTER_SANITIZE_STRING);
	$cardCVC = filter_input(INPUT_POST, 'cardCVC', FILTER_SANITIZE_STRING);

	header("Location: ../cart.php?landing");	
	mysqli_close($conn);