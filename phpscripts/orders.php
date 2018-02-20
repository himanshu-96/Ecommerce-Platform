<?php

	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	$id=json_decode($_POST['order_id']);
	$sql="Select * from orders where id='".implode("','",$id)."'";
	$result=$conn->query($sql);
	$row=mysqli_fetch_assoc($result);
	echo '
		<div class="row>
			<div class="col-md-4 col-md-offset-4">
				<input type="submit" class="btn btn-default" Value="Back" onClick="window.location.reload()">
			</div>
		</div>
		<br />	
		<form action="phpscripts/orders-change.php" method="post">
		<div class="row">
			<div class="col-md-12">
				<div class=row">
					<div class="col-md-6">
						Order ID :
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="id" value="'.$row['id'].'">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class=row">
					<div class="col-md-6">
						User name :
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" value="'.$row['username'].'">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class=row">
					<div class="col-md-6">
						Name :
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" value="'.$row['name'].'">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class=row">
					<div class="col-md-6">
						Dated :
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" value="'.$row['datecreation'].'">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class=row">
					<div class="col-md-6">
						Contents :
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="id" value="">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class=row">
					<div class="col-md-6">
						Status :
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" value="'.$row['status'].'">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class=row">
					<div class="col-md-6">
						Dispatched :
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<input type="checkbox" name="yes">Yes
						</div>
						<div class="col-md-6">
							<input type="checkbox" name="no">No
						</div>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<input class="form-control" type="submit">
			</div>
		</div>
		</form>';
	mysqli_close($conn);