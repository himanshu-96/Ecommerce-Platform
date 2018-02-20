<?php
	
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysqli_connect_error());
	}
	
	$sql = "SELECT * FROM product_review WHERE product_id = ".urldecode(base64_decode($_GET['i']))."";
	$result=$conn->query($sql);
	while($row=mysqli_fetch_assoc($result)){
		echo '
			<div class="col-md-12 col-lg-12 col-sm-12">
				<div class="row">
					<div class="col-md-8 col-lg-8">
						<b>'.$row['review_name'].'</b>
					</div>
					<div class="col-md-4 col-lg-4">
						<p>On. '.$row['date'].'</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-lg-8">
						<p>Ratings: '.$row['review_stars'].'
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<p>'.$row['review_description'].'</p>
					</div>
				</div>
				<hr>
			</div>
		';
	}
	mysqli_close($conn);