<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	
	$name=filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
	$email_id=filter_input(INPUT_POST, 'user_emailid', FILTER_SANITIZE_STRING);
	$contact=filter_input(INPUT_POST, 'user_contact', FILTER_SANITIZE_STRING);
	$user_id=filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
	$pwd=filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);
	$address=filter_input(INPUT_POST, 'user_address', FILTER_SANITIZE_STRING);
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
		header("Location: ../index.php?error=Empty Name");
		exit();
	}
	if(empty($email_id)){
		header("Location: ../index.php?error=Empty Email ID");
		exit();
	}
	if(empty($contact)){
		header("Location: ../index.php?error=Empty Contact no.");
		exit();
	}
	if(empty($user_id)){
		header("Location: ../index.php?error=Empty User Name");
		exit();
	}
	if(empty($address)){
		header("Location: ../index.php?error=Empty Address");
		exit();
	}
	if(empty($pwd)){
		header("Location: ../index.php?error=Empty Password");
		exit();
	}
	else{
	
	$sql="SELECT user_name FROM user_name WHERE user_name='$user_id'";
	$sql1="SELECT user_email FROM user_name WHERE user_email='$email_id'";
	$result=$conn->query($sql);
	$result1=$conn->query($sql1);
	$uidcheck=mysqli_num_rows($result);
	$eidcheck=mysqli_num_rows($result1);
	if($uidcheck > 0){
		header("Location: ../index.php#register?error=Username Exist");
		exit();
	}	
	if($eidcheck > 0){
		header("Location: ../index.php#register?error=Email ID Exist");
		exit();
	}
	else{
		$encrypted_password = hash('sha512', $pwd);
		$sql_name = "INSERT INTO user_name (user_name, user_username, user_email, user_contact, user_address) VALUES ('$name','$user_id','$email_id','$contact','$address')";
		$sql_private = "INSERT INTO user_private (user_password, user_ip, user_verify) VALUES ('$encrypted_password','$ip','$verify')";
		$sql_cart = "INSERT INTO user_cart (user_username) VALUES ('$user_id')";
		$result_name=$conn->query($sql_name);
		$result_private=$conn->query($sql_private);
		$result_cart=$conn->query($sql_cart);
		
		$msg = "First line of text\nSecond line of text";
		$msg = wordwrap($msg,70);
		mail("".$email_id."","Registration",$msg);
		header("Location: ../index.php");	
	}
	
	}
	