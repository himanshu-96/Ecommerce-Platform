<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
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
	
	$cart_data = json_encode($_SESSION['cart']);
	$fav_data = json_encode($_SESSION['fav']);
	$sql_cart = "UPDATE user_cart set cart_data='".$cart_data."' WHERE user_username='".$_SESSION['user']['user_id']."'";
	$sql_fav = "UPDATE user_cart set fav_data='".$fav_data."' WHERE user_username='".$_SESSION['user']['user_id']."'";
	$result_cart = $conn->query($sql_cart);
	$result_fav = $conn->query($sql_fav);
	session_unset();
	session_destroy();
	header("Location: ../index.php");