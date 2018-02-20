<?php
	
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysqli_connect_error());
	}
	
	class Item{
		 var $pic;
		 var $id;
		 var $name;
		 var $size;
		 var $price;
		 var $quantity;
		 var $classes;
	}
	
	$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
	$pwd = filter_input(INPUT_POST, 'user_pwd', FILTER_SANITIZE_STRING);
	
	if(empty($user_id)){
		header("Location: ../index.php?error=Empty User ID");
		mysqli_close($conn);
		exit();	
	}
	if(empty($pwd)){
		header("Location: ../index.php?error=empty Password");
		mysqli_close($conn);
		exit();
	}
	else{
		$sql="SELECT * FROM user_name INNER JOIN user_private ON user_name.user_id=user_private.user_id WHERE user_name.user_username='$user_id'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$hash_pwd = $row['user_password'];		
		$hash = hash('sha512', $pwd);
		if($hash != $hash_pwd){
			header("Location: ../index.php?error=Login Error");
			mysqli_close($conn);
			exit();
		}
		if($row['user_verify'] != 1){
			header("Location: ../index.php?Verification?user_id=".urlencode(base64_encode($row['user_id']))."");
			mysqli_close($conn);
			exit();
		}
		else {						
				session_start();
				$_SESSION['user']['id'] = $row['user_id'];
				$_SESSION['user']['user_id'] = $row['user_username'];
				include('cartsave.php');
				mysqli_close($conn);
				header("Location: ../index.php");	
		}
		}
	mysqli_close($conn);