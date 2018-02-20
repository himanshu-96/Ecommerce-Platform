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

if(isset($_GET['product_id']) && !isset($_POST['update'])){ 
	$sql = "Select * from product_name
				INNER JOIN product_brand on product_brand.product_id=product_name.product_id
				INNER JOIN product_category on product_category.product_id=product_name.product_id
				INNER JOIN product_size on product_size.product_id=product_name.product_id WHERE product_name.product_id=".base64_decode($_GET['product_id'])."";
	$result = $conn->query($sql);
	$product = mysqli_fetch_object($result); 
	$item = new Item();
	$item->pic = $product->product_thumbnail;
	$item->id = $product->product_id;
	$item->classes = $product->product_class;
	$item->name = $product->product_name;
	$item->price = $product->price;
    $iteminstock = $product->$_GET['size'];
	$item->quantity = $_GET['quantity'];
	$item->size = base64_decode($_GET['size']);
	// Check product is existing in cart
	$index = -1;

	$cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
	for($i=0; $i<count($cart);$i++)
		if ($cart[$i]->id == base64_decode($_GET['product_id'])){
			$index = $i;
			break;
		}
		if($index == -1) 
			$_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
		else {
			
			if (($cart[$index]->quantity) < $iteminstock)
				 $cart[$index]->quantity ++;
			     $_SESSION['cart'] = $cart;
		}
}
// Delete product in cart
if(isset($_GET['cart_index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['cart_index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}
// Update quantity in cart
if(isset($_POST['update'])) {
  $arrQuantity = $_POST['quantity'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->quantity = $arrQuantity[$i];
  }
  $_SESSION['cart'] = $cart;
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_GET['fav_product_id']) && !isset($_POST['fav_update'])){ 
	$sql = "Select * from product_name
				INNER JOIN product_brand on product_brand.product_id=product_name.product_id
				INNER JOIN product_category on product_category.product_id=product_name.product_id
				INNER JOIN product_size on product_size.product_id=product_name.product_id WHERE product_name.product_id=".base64_decode($_GET['fav_product_id'])."";
	$result = $conn->query($sql);
	$product = mysqli_fetch_object($result); 
	$fav_item = new Item();
	$fav_item->pic = $product->product_thumbnail;
	$fav_item->id = $product->product_id;
	$fav_item->classes = $product->product_class;
	$fav_item->name = $product->product_name;
	$fav_item->price = $product->price;
    $fav_iteminstock = $product->product_quantity1;
	$fav_item->quantity = $_GET['fav_quantity'];
	$fav_item->size = base64_decode($_GET['fav_size']);
	// Check product is existing in cart
	$fav_index = -1;
	$fav = unserialize(serialize($_SESSION['fav'])); // set $cart as an array, unserialize() converts a string into array
	for($i=0; $i<count($cart);$i++)
		if ($fav[$i]->id == base64_decode($_GET['fav_product_id'])){
			$fav_index = $i;
			break;
		}
		if($fav_index == -1) 
			$_SESSION['fav'][] = $fav_item; // $_SESSION['fav']: set $fav as session variable
		else {
			
			if (($fav[$fav_index]->quantity) < $fav_iteminstock)
				 $fav[$fav_index]->quantity ++;
			     $_SESSION['fav'] = $fav;
		}
}
// Delete product in fav
if(isset($_GET['fav_index']) && !isset($_POST['fav_update'])) {
	$fav = unserialize(serialize($_SESSION['fav']));
	unset($fav[$_GET['fav_index']]);
	$fav = array_values($fav);
	$_SESSION['fav'] = $fav;
}
// Update quantity in fav
if(isset($_POST['fav_update'])) {
  $arrQuantity = $_POST['fav_quantity'];
  $fav = unserialize(serialize($_SESSION['fav']));
  for($i=0; $i<count($fav);$i++) {
     $fav[$i]->quantity = $arrQuantity[$i];
  }
  $_SESSION['fav'] = $fav;
}