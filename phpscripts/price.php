<?php

	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	$product_id=json_decode($_POST['product_id']);
	$sql="Select * from product_size WHERE product_id='".implode("','",$product_id)."'";
	$result=$conn->query($sql);
	$row=mysqli_fetch_assoc($result);
	echo '
		<div class="row>
			<div class="col-md-4 col-md-offset-4">
				<input type="submit" class="btn btn-default" Value="Back" onClick="window.location.reload()">
			</div>
		</div>
		<br />
		<form action="phpscripts/price-change.php" method="post">	
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6 col-sm-6">
					Product :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="id" value="'.$row['product_id'].'">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6 col-sm-6">
					Quantity size XS :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="XS" placeholder="'.$row['XS'].'">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6 col-sm-6">
					Quantity size S :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="S" placeholder="'.$row['S'].'">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6 col-sm-6">
					Quantity size M :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="M" placeholder="'.$row['M'].'">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6 col-sm-6">
					Quantity size L :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="L" placeholder="'.$row['L'].'">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6 col-sm-6">
					Quantity size XL :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="XL" placeholder="'.$row['XL'].'">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6 col-sm-6">
					Quantity size XXL :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text" name="XXL" placeholder="'.$row['XXL'].'">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6 col-sm-6">
					Price :
				</div>
				<div class="col-md-6 col-sm-6">
					<input class="form-control" type="text"  name="price" placeholder="'.$row['price'].'">
				</div>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<input type="submit" value="Update">
			</div>
			</form>
		</div>

	';
	mysqli_close($conn);