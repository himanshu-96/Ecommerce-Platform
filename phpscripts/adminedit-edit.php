<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$brand = filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_STRING);
	$subbrand = filter_input(INPUT_POST, 'subbrand', FILTER_SANITIZE_STRING);
	$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
	$rating = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_STRING);
	$class = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING);
	$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
	$categorydescription = filter_input(INPUT_POST, 'categorydescription', FILTER_SANITIZE_STRING);
	$XS = filter_input(INPUT_POST, 'XS', FILTER_SANITIZE_STRING);
	$S = filter_input(INPUT_POST, 'S', FILTER_SANITIZE_STRING);
	$M = filter_input(INPUT_POST, 'M', FILTER_SANITIZE_STRING);
	$L = filter_input(INPUT_POST, 'L', FILTER_SANITIZE_STRING);
	$XL = filter_input(INPUT_POST, 'XL', FILTER_SANITIZE_STRING);
	$XXL = filter_input(INPUT_POST, 'XXL', FILTER_SANITIZE_STRING);
	$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
	$gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
	
	$sql = "Select * from product_name
					INNER JOIN product_brand on product_brand.product_id=product_name.product_id
					INNER JOIN product_category on product_category.product_id=product_name.product_id
					INNER JOIN product_size on product_size.product_id=product_name.product_id WHERE product_name.product_id='$id'";
					echo $sql;
	$result = $conn->query($sql);				
	
	while($row=mysqli_fetch_assoc($result)){
		$name_o = $row['product_name'];
		$brand_o = $row['product_brand'];
		$subbrand_o = $row['product_subbrand'];
		$description_o = $row['product_description'];
		$rating_o = $row['product_rating'];
		$class_o = $row['product_class'];
		$category_o = $row['product_category'];
		$categorydescription_o = $row['product_categorydescription'];
		$XS_o = $row['XS'];
		$S_o = $row['S'];
		$M_o = $row['M'];
		$L_o = $row['L'];
		$XL_o = $row['XL'];
		$XXL_o = $row['XXL'];
		$price_o = $row['price'];
		$gender_o = $row['gender'];
	}
	
	if($name == NULL){ $name = $name_o;}
	if($brand == NULL){ $brand = $brand_o;}
	if($subbrand == NULL){ $subbrand = $subbrand_o;}
	if($description == NULL){ $description = $description_o;}
	if($rating == NULL){ $rating = $rating_o;}
	if($class == NULL){ $class = $class;}
	if($category == NULL){ $category = $category_o;}
	if($categorydescription == NULL){ $categorydescription = $categorydescription_o;}
	if($XS == NULL){ $XS = $XS_o;}
	if($S  == NULL){ $S = $S_o;}
	if($M == NULL){ $M = $M_o;}
	if($L == NULL){ $L = $L_o;}
	if($XL == NULL){ $XL = $XL_o;}
	if($XXL == NULL){ $XXL = $XXL_o;}
	if($price == NULL){ $price = $price_o;}
	if($gender == NULL){ $gender = $gender_o;}
	
	$sql="INSERT INTO product_brand (product_brand, product_subbrand, product_class, gender) VALUES ('$brand','$subbrand','$class','$gender') WHERE product_id = '".$_POST['p_id']."'";
	$result=$conn->query($sql);
		
	$sql="INSERT INTO product_category (product_category, product_categorydescription, product_class, gender) VALUES ('$category','$categorydescription','$class','$gender') WHERE product_id = '".$_POST['p_id']."'";
	$result=$conn->query($sql);
		
	$sql="INSERT INTO product_name (product_name, product_description, product_class, product_rating) VALUES ('$name','$description','$class','$rating') WHERE product_id = '".$_POST['p_id']."'";
	$result=$conn->query($sql);
	
	$sql="INSERT INTO product_size (product_class, XS, S, M, L, XL, XXL, price, gender) VALUES ('$class','$XS','$S','$M','$L','$XL','$XXL','$price','$gender') WHERE product_id = '".$_POST['p_id']."'";
	$result=$conn->query($sql);
	
	mysqli_close($conn);
	header("Location: ../admin.php");