<?php
		$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
		if(!$conn)
		{
			die("Connection Failed: ".mysql_connect_error());
		}
		$sql_cart="select * from user_cart where user_id='".$_SESSION['user']['id']."'";
		$result_cart=$conn->query($sql_cart);
		$row_cart=mysqli_fetch_assoc($result_cart);
		$cart = json_decode($row_cart['cart_data']);
		$fav = json_decode($row_cart['fav_data']);
		$_SESSION['cart'] = $cart;
		$_SESSION['fav'] = $fav;
		mysqli_close($conn);