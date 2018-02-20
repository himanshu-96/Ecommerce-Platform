<?php
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
	$order = serialize($_SESSION['cart']);
		
	// Save new orders
	$sql = 'INSERT INTO order_placed (user_id, user_name, product_ordered, order_date, price, status) VALUES ("'.$_SESSION['user']['user_id'].'","'.$_SESSION['user']['user_username'].'","'.$order.'","'.date('Y-m-d').'","'.$_SESSION['user']['payable'].'","0")';
	mysqli_query($conn, $sql);
	unset($_SESSION['cart']);