<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
	$yes = filter_input(INPUT_POST, 'yes', FILTER_SANITIZE_STRING);
	$no = filter_input(INPUT_POST, 'no', FILTER_SANITIZE_STRING);
	$sql = "";
	
	if(isset($_POST['yes'])){
		$sql = "UPDATE orders set status = '1' WHERE id='$id'";
	}
	if(isset($_POST['no'])){
		$sql = "UPDATE orders set status = '0' WHERE id='$id'";
	}
	$result = $conn->query($sql);
	mysqli_close($conn);
	header("Location: ../admin.php");	