<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	$name=$_POST['name'];
	$id=$_POST['value'];

	if(empty($name)){
		header("Location: ../libaaz.php#register?errorname=empty");
		exit();
	}
	else{
		
		$sql="UPDATE user SET name='$name' WHERE id='$id'";
		$result=$conn->query($sql);
		session_unset();
		session_destroy();
		header("Location: ../libaaz.php#login");	
	}
	