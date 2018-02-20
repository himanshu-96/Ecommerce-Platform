<?php
	
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysqli_connect_error());
	}
	
	$admin_id= filter_input(INPUT_POST, 'admin_uid', FILTER_SANITIZE_STRING);
	$pwd=filter_input(INPUT_POST, 'admin_pwd', FILTER_SANITIZE_STRING);
	
	if(empty($admin_id)){
		header("Location: ../adminlogin.php?error=Empty User ID");
		exit();	
	}
	if(empty($pwd)){
		header("Location: ../adminlogin.php?error=Empty Password");
		exit();
	}
	else{
		$sql="SELECT * FROM administrator_name INNER JOIN administrator_private ON administrator_name.admin_id=administrator_private.admin_id WHERE administrator_name.admin_name='$admin_id'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$hash_pwd=$row['admin_password'];
		$hash=password_verify($pwd, $hash_pwd);
		if($hash==0){
			header("Location: ../adminlogin.php?error=Login Error");
			exit();
		}
		else {
				session_start();
				$_SESSION['admin']=$row['admin_id'];				
				header("Location: ../admin.php");	
		}
		}
	mysqli_close($conn);	