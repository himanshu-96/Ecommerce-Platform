<?php
	
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysqli_connect_error());
	}
	
	$seller_id= filter_input(INPUT_POST, 'seller_id', FILTER_SANITIZE_STRING);
	$pwd=filter_input(INPUT_POST, 'seller_pwd', FILTER_SANITIZE_STRING);
	
	if(empty($seller_id)){
		header("Location: ../sellerlogin.php?error=Empty User ID");
		exit();	
	}
	if(empty($pwd)){
		header("Location: ../sellerlogin.php?error=Empty Password");
		exit();
	}
	else{
		$sql = "SELECT * FROM seller_name INNER JOIN seller_private ON seller_name.seller_id=seller_private.seller_id WHERE seller_name.seller_name='$seller_id'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$hash_pwd = $row['seller_password'];
		$hash = hash('sha512', $pwd);
		if($hash==0){
			header("Location: ../sellerlogin.php?error=Login Error");
			exit();
		}
		if($row['seller_verify']!=1){
			header("Location: ../sellerlogin.php?error=Verification");
		}
		else {
				session_start();
				$_SESSION['seller']=$row['seller_id'];
				$_SESSION['seller_name']=$row['seller_name'];				
				header("Location: ../seller.php");	
		}
	}
	mysqli_close($conn);	