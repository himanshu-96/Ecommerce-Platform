<?php

	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	$product_id=json_decode($_POST['product_id']);
	$sql="Select * from product_name
					INNER JOIN product_brand on product_brand.product_id=product_name.product_id
					INNER JOIN product_category on product_category.product_id=product_name.product_id
					INNER JOIN product_size on product_size.product_id=product_name.product_id WHERE product_name.product_id='".implode("','",$product_id)."'";
	$result=$conn->query($sql);
	$row=mysqli_fetch_assoc($result);
	echo '
		<div class="row>
			<div class="col-md-4 col-md-offset-4">
				<input type="submit" class="btn btn-default" Value="Back" onClick="window.location.reload()">
			</div>
		</div>
		<br />
		<form action="phpscripts/adminedit-edit.php" method="post">
		<div class="row">
			<div class="col=md-3 col-sm-3">
				<img class="img-thumbnail" src="'.$row['product_thumbnail'].'" />
			</div>
			<div class="col=md-3 col-sm-3">
				<img class="img-thumbnail" src="'.$row['product_image1'].'" />
			</div>
			<div class="col=md-3 col-sm-3">
				<img class="img-thumbnail" src="'.$row['product_image2'].'" />
			</div>
			<div class="col=md-3 col-sm-3">
				<img class="img-thumbnail" src="'.$row['product_image3'].'" />
			</div>
		</div>
		<div class="row">
			<div class="col=md-3 col-sm-3">
				Product Thumbnail
			</div>
			<div class="col=md-3 col-sm-3">
				Product Image 1
			</div>
			<div class="col=md-3 col-sm-3">
				Product Image 2
			</div>
			<div class="col=md-3 col-sm-3">
				Product Image 3
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					ID :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="p_id" value="'.$row['product_id'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Name :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="name" placeholder="'.$row['product_name'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Brand :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="brand" placeholder="'.$row['product_brand'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Brand :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="subbrand" placeholder="'.$row['product_subbrand'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Description :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="description" placeholder="'.$row['product_description'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Rating :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="rating" placeholder="'.$row['product_rating'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Class :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="class" placeholder="'.$row['product_class'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Category :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="category" placeholder="'.$row['product_category'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Category Description :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="categorydescription" placeholder="'.$row['product_categorydescription'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Gender :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="gender" placeholder="'.$row['gender'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Quantity size XS :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="XS" placeholder="'.$row['XS'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Quantity size S :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="S" placeholder="'.$row['S'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Quantity size M :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="M" placeholder="'.$row['M'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Quantity size L :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="L" placeholder="'.$row['L'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Quantity size XL :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="XL" placeholder="'.$row['XL'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Quantity size XXL :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="XXL" placeholder="'.$row['XXL'].'">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="col-md-6 col-sm-6">
					Price :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="price" placeholder="'.$row['price'].'">
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
				<input class="form-control" type="submit">
			</div>
		</div>
		<br>
		</form>
	</div>
	';
	mysqli_close($conn);