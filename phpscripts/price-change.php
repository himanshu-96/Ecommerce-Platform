<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
	$XS = filter_input(INPUT_POST, 'XS', FILTER_SANITIZE_STRING);
	$S = filter_input(INPUT_POST, 'S', FILTER_SANITIZE_STRING);
	$M = filter_input(INPUT_POST, 'M', FILTER_SANITIZE_STRING);
	$L = filter_input(INPUT_POST, 'L', FILTER_SANITIZE_STRING);
	$XL = filter_input(INPUT_POST, 'XL', FILTER_SANITIZE_STRING);
	$XXL = filter_input(INPUT_POST, 'XXL', FILTER_SANITIZE_STRING);
	$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);

	$sql = "SELECT * FROM product_size WHERE product_id = '$id'";
	$result = $conn->query($sql);
	
	while($row=mysqli_fetch_assoc($result)){
		$XS_o = $row['XS'];
		$S_o = $row['S'];
		$M_o = $row['M'];
		$L_o = $row['L'];
		$XL_o = $row['XL'];
		$XXL_o = $row['XXL'];
		$price_o = $row['price'];
	}

	if($XS == NULL){ $XS = $XS_o;}
	if($S  == NULL){ $S = $S_o;}
	if($M == NULL){ $M = $M_o;}
	if($L == NULL){ $L = $L_o;}
	if($XL == NULL){ $XL = $XL_o;}
	if($XXL == NULL){ $XXL = $XXL_o;}
	if($price == NULL){ $price = $price_o;}
	
	$sql = "UPDATE product_size set XS = '$XS', S = '$S', M = '$M', L = '$L', XL = '$XL', XXL = '$XXL', price = '$price' WHERE product_id='$id'";
	$result=$conn->query($sql);
	echo $sql;
	mysqli_close($conn);
	header("Location: ../admin.php");