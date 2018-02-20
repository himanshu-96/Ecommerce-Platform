<?php
		
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	
	$query=$_POST['query'];
	$output = '';
	$sql = "SELECT * FROM products WHERE class='APPAREL' AND (category LIKE '%".$query."%') OR (pdesc LIKE '%".$query."%') OR (pbrand LIKE '%".$query."%')";
	$result=$conn->query($sql);
	if(mysqli_num_rows($result) > 0) {
		 
		$output .='<div id="productRow">';
		while($row = mysqli_fetch_array($result))
		{
			$output .='<article id="productInfo">
					   <div><img src="'.$row['pthumb'].'"></div>
					   <p id="price">₹'.$row['price'].' INR</p>								
					   <p id="productContent">'.$row['pname'].'</p>
					   <a class="btn btn-default" href="libaazproddisp.php?pid='.$row['pid'].'">LOOK</a>
					   </article>';
		}
		$output .='</div>';
		echo $output;
	}
	else{
		echo 'Data Not Found';	
	}