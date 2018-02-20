<?php
	session_start();
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	if(isset($_POST['approach']))
	{
		$sql="Select * from product_name
						INNER JOIN product_brand on product_brand.product_id=product_name.product_id
						INNER JOIN product_category on product_category.product_id=product_name.product_id
						INNER JOIN product_size on product_size.product_id=product_name.product_id";
		$result=$conn->query($sql);
		$count=mysqli_num_rows($result);
		echo'
				<div id="carousel2" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carousel2" data-slide-to="0" class="active"></li>
					  <li data-target="#carousel2" data-slide-to="1"></li>
					  <li data-target="#carousel2" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">';
		for($i=0;$i<6;$i++)
		{		
			$random=rand(0,$count);	
			$sql="Select * from product_name
						INNER JOIN product_brand on product_brand.product_id=product_name.product_id
						INNER JOIN product_category on product_category.product_id=product_name.product_id
						INNER JOIN product_size on product_size.product_id=product_name.product_id where product_name.product_id='".$random."'";
			$result=$conn->query($sql);		
			while($row=mysqli_fetch_assoc($result))
			{
		
				echo'	<a href="productinfo.php?i='.urlencode(base64_encode($row['product_id'])).'">
							<div class="col-md-2 col-lg-2 col-sm-2 col-xs-3" style="padding:2px;">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<img src="'.$row['product_thumbnail'].'" class="img-responsive img-thumbnail"> 
									</div>
									<div class="col-md-8 col-md-offset-2" align="center">
										<p>'.$row['product_name'].'</p>
									</div>
								</div>
							</div>
						</a>';
			}
		}
		echo'
					</div>
				</div>
				<div class="item">
        			<div class="row">';
		for($i=0;$i<6;$i++)
		{		
			$random=rand(0,$count);	
			$sql="Select * from product_name
						INNER JOIN product_brand on product_brand.product_id=product_name.product_id
						INNER JOIN product_category on product_category.product_id=product_name.product_id
						INNER JOIN product_size on product_size.product_id=product_name.product_id where product_name.product_id='".$random."'";
			$result=$conn->query($sql);		
			while($row=mysqli_fetch_assoc($result))
			{
		
				echo'	<a href="productinfo.php?i='.urlencode(base64_encode($row['product_id'])).'">
							<div class="col-md-2 col-lg-2 col-sm-2 col-xs-3" style="padding:2px;">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<img src="'.$row['product_thumbnail'].'" class="img-responsive img-thumbnail"> 
									</div>
									<div class="col-md-8 col-md-offset-2" align="center">
										<p>'.$row['product_name'].'</p>
									</div>
								</div>
							</div>
						</a>';
			}
		}	
      		
		echo'
	        	</div>
      		</div>
      		<div class="item">
        		<div class="row">';
		for($i=0;$i<6;$i++)
		{		
			$random=rand(0,$count);	
			$sql="Select * from product_name
						INNER JOIN product_brand on product_brand.product_id=product_name.product_id
						INNER JOIN product_category on product_category.product_id=product_name.product_id
						INNER JOIN product_size on product_size.product_id=product_name.product_id where product_name.product_id='".$random."'";
			$result=$conn->query($sql);		
			while($row=mysqli_fetch_assoc($result))
			{
		
				echo'	<a href="productinfo.php?i='.urlencode(base64_encode($row['product_id'])).'">
							<div class="col-md-2 col-lg-2 col-sm-2 col-xs-3" style="padding:2px;">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<img src="'.$row['product_thumbnail'].'" class="img-responsive img-thumbnail"> 
									</div>
									<div class="col-md-8 col-md-offset-2" align="center">
										<p>'.$row['product_name'].'</p>
									</div>
								</div>
							</div>
						</a>';
			}
		}
		echo'
        		</div>
      		</div>
    	</div>
	</div>
	  <a class="left carousel-control" href="#carousel2" role="button" data-slide="prev" style="float:left"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only" style="align-left;"></span></a>
	  <a class="right carousel-control" href="#carousel2" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only"></span></a>
</div>
';
}