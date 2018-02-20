<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	
	$name=filter_input(INPUT_POST, 'seller_name', FILTER_SANITIZE_STRING);
	$email_id=filter_input(INPUT_POST, 'seller_emailid', FILTER_SANITIZE_STRING);
	$contact=filter_input(INPUT_POST, 'seller_contact', FILTER_SANITIZE_STRING);
	$pwd=filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);
	$verify=rand(10,100000);
	$ip='';

    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ip = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ip = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ip = $_SERVER['REMOTE_ADDR'];
    else
        $ip = 'UNKNOWN';


	
	if(empty($name)){
		header("Location: ../sellerlogin.php?error=Empty Name");
		exit();
	}
	if(empty($email_id)){
		header("Location: ../sellerlogin.php?error=Empty Email ID");
		exit();
	}
	if(empty($contact)){
		header("Location: ../sellerlogin.php?error=Empty Contact no.");
		exit();
	}
	if(empty($pwd)){
		header("Location: ../sellerlogin.php?error=Empty Password");
		exit();
	}
	else{
	
		$encrypted_password = hash('sha512', $data);
		$sql_name = "INSERT INTO seller_name (seller_name, seller_email, seller_contact) VALUES ('$name','$email_id','$contact')";
		$sql_private = "INSERT INTO seller_private (seller_password, seller_ip, seller_verify) VALUES ('$encrypted_password','$ip','$verify')";
		$result_name=$conn->query($sql_name);
		$result_private=$conn->query($sql_private);
		header("Location: ../sellerlogin.php");	
	}