<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	
	$pwd=$_POST['pwd'];
	$id=$_POST['value'];
	
	if(empty($pwd)){
		header("Location: ../libaaz.php#register?errorpwd=empty");
		exit();
	}
	else{
		$encrypted_password=password_hash($pwd, PASSWORD_DEFAULT);
		$sql="UPDATE user SET pwd='$encrypted_password' WHERE id=$id";
		$result=$conn->query($sql);
		session_unset();
		session_destroy();
		header("Location: ../libaaz.php#login");	
	}