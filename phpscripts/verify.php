<?php
	
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysqli_connect_error());
	}
	
	$verify = filter_input(INPUT_POST, 'verify',  FILTER_SANITIZE_STRING);
	$user_id = filter_input(INPUT_POST, 'user_id',  FILTER_SANITIZE_STRING);
	$user_id = urldecode(base64_decode($user_id));
	$sql="SELECT * FROM user_private WHERE user_id='$user_id'";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	if($row['user_verify'] == $verify){
		$sql="UPDATE user_private set user_verify=1 WHERE user_id='$user_id'";
		$result=$conn->query($sql);
		header("Location: ../index.php");	
	}
	else{
		header("Location: ../index.php");	
	}
	mysqli_close($conn);