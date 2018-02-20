<?php

	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
			if(!$conn)
			{
				die("Connection Failed: ".mysql_connect_error());
			}
			
			if(isset($_GET['i'])){
			$pid = urldecode(base64_decode($_GET['i']));
			$sql="SELECT * FROM product_name where product_id='$pid'";
			$result=$conn->query($sql);
			while($row=mysqli_fetch_assoc($result))
			{
              echo' <div class="item active"><img src="'.$row['product_image1'].'" alt="First slide image" class="center-block">
                    </div>
              		<div class="item"><img src="'.$row['product_image2'].'" alt="Second slide image" class="center-block">
                    </div>
            		<div class="item"><img src="'.$row['product_image3'].'" alt="Third slide image" class="center-block">
                    </div>
			  ';
			}
			}