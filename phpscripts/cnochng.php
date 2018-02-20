<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	$cno=$_POST['cno'];
	$id=$_POST['value'];
	
	if(empty($cno)){
		header("Location: ../libaaz.php#register?errorcno=empty");
		exit();
	}
	else{
		$sql="UPDATE user SET cno='$cno' WHERE id=$id";
		$result=$conn->query($sql);
		session_unset();
		session_destroy();
		header("Location: ../libaaz.php#login");	
	}