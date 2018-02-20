<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	$eid=$_POST['eid'];
	$id=$_POST['value'];
	
	if(empty($eid)){
		header("Location: ../libaaz.php#register?erroreid=empty");
		exit();
	}
	else{
	
	$sql1="SELECT eid FROM user WHERE eid='$eid'";
	$result1=$conn->query($sql1);
	$eidcheck=mysqli_num_rows($result1);
	if($eidcheck > 0){
		header("Location: ../libaaz.php#register?erroremailid=exist");
		exit();
	}
	else{
		$sql="UPDATE user SET eid='$eid' WHERE id='$id'";
		$result=$conn->query($sql);
		session_unset();
		session_destroy();
		header("Location: ../libaaz.php#login");	
	}
	
	}