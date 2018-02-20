<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	
	$uid=$_POST['uid'];
	$id=$_POST['value'];
	
	if(empty($uid)){
		header("Location: ../libaaz.php#register?erroruid=empty");
		exit();
	}
	else{
	
	$sql1="SELECT uid FROM user WHERE uid='$uid'";
	$result1=$conn->query($sql1);
	$eidcheck=mysqli_num_rows($result1);
	if($eidcheck > 0){
		header("Location: ../libaaz.php#register?errorusername=exist");
		exit();
	}
	else{
		$sql="UPDATE user SET uid='$uid' WHERE id='$id'";
		$result=$conn->query($sql);
		session_unset();
		session_destroy();
		header("Location: ../libaaz.php#login");	
	}
	
	}