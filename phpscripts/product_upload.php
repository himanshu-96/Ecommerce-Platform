<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	
	$product_name = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_STRING);
	$product_brand = filter_input(INPUT_POST, 'product_brand', FILTER_SANITIZE_STRING);
	$product_subbrand = filter_input(INPUT_POST, 'product_subbrand', FILTER_SANITIZE_STRING);
	$product_description = filter_input(INPUT_POST, 'product_description', FILTER_SANITIZE_STRING);
	$product_class = $_POST['Class'];
	$product_category = filter_input(INPUT_POST, 'product_category', FILTER_SANITIZE_STRING);
	$product_price = filter_input(INPUT_POST, 'product_price', FILTER_SANITIZE_STRING);
	$product_categorydescription = filter_input(INPUT_POST, 'product_categorydescription', FILTER_SANITIZE_STRING);
	$gender = $_POST['Gender'];
	$XS = filter_input(INPUT_POST, 'XS', FILTER_SANITIZE_STRING);
	$S = filter_input(INPUT_POST, 'S', FILTER_SANITIZE_STRING);
	$M = filter_input(INPUT_POST, 'M', FILTER_SANITIZE_STRING);
	$L = filter_input(INPUT_POST, 'L', FILTER_SANITIZE_STRING);
	$XL = filter_input(INPUT_POST, 'XL', FILTER_SANITIZE_STRING);
	$XXL = filter_input(INPUT_POST, 'XXL', FILTER_SANITIZE_STRING);
	$array;
	
	if (isset($_FILES['file'])) {
		$j = 0; //Variable for indexing uploaded image 
		$target_path = "../images/check/"; //Declaring Path for uploaded images
		for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {//loop to get individual element from the array
			$validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed
			$ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
			$file_extension = end($ext); //store extensions in the variable
	  		$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
			$j = $j + 1;//increment the number of uploaded images according to the files in array       
		  
		   if (($_FILES["file"]["size"][$i] < 2000000) //Approx. 100kb files can be uploaded.
						&& in_array($file_extension, $validextensions)) {
					if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
						$array[$i] = $target_path; 
					} 
			} 
		}
	}
	/*	
	$sql="INSERT INTO product_brand (product_brand, product_subbrand, product_class, gender) VALUES ('$product_brand','$product_subbrand','$product_class','$gender')";
	$result=$conn->query($sql);
	echo $sql;
	echo "                                                                   ";	
	 $sql="INSERT INTO product_category (product_category, product_categorydescription, product_class, gender) VALUES ('$product_category','$product_categorydescription','$product_class','$gender')";
	$result=$conn->query($sql);
		echo $sql;
		echo "                                                                          "*/
	$sql="INSERT INTO newtable (product_name, product_description, product_class, product_thummbnail, product_image1, product_image2, product_image3, gender) VALUES ('1','1','1','1','1','1','1','1')";
	echo "result";
	$result=$conn->query($sql);
	echo mysqli_affected_rows($sql);
	echo $sql;
	echo "                                                                       ";
	/*$sql="INSERT INTO product_size (product_class, XS, S, M, L, XL, XXL, price, gender) VALUES ('$product_class','$XS','$S','$M','$L','$XL','$XXL','$product_price','$gender')";
	$result=$conn->query($sql);
	*/
	
	//header("Location: ../admin.php");	