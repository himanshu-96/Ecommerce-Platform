<?php
		$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
		if(!$conn)
		{
			die("Connection Failed: ".mysql_connect_error());
		}
		$page_rows = 24;
		$page ='';
		$output='';
		
		if(isset($_POST['page'])){
			$page=$_POST['page'];
		}
		else{
			$page=1;
		}
		if(isset($_POST['value'])){
			if($_POST['value'] == 0){
				$value='APPAREL';	
			}
			else if($_POST['value'] == 1){
				$value='ACCESSORIES';	
			}	
		}
		if(isset($_POST['gender'])){
			if($_POST['gender'] == 0){
				$gender='WOMEN';	
			}
			else if ($_POST['gender'] == 1){
				$gender='MEN';	
			}
			else{
				$gender = NULL;
			}
		}		
		$start_from=($page-1)*$page_rows;
		$limit = 'LIMIT ' .($page - 1) * $page_rows .',' .$page_rows;

		$sql="Select * from product_name
					INNER JOIN product_brand on product_brand.product_id=product_name.product_id
					INNER JOIN product_category on product_category.product_id=product_name.product_id
					INNER JOIN product_size on product_size.product_id=product_name.product_id WHERE product_name.product_class='".$value."'";

		$sql1="Select * from product_name
					INNER JOIN product_brand on product_brand.product_id=product_name.product_id
					INNER JOIN product_category on product_category.product_id=product_name.product_id
					INNER JOIN product_size on product_size.product_id=product_name.product_id WHERE product_name.product_class='".$value."'";
		
		if($gender == NULL){
			$sql .= " AND product_name.gender='".$gender."'";
			$sql1 .= " AND product_name.gender='".$gender."'";
		}
		
		
		if(isset($_POST['brand']))
		{
			$array=json_decode($_POST['brand']);
			if($array == NULL){}
			else{
				$sql .=" AND product_brand IN ('".implode("','",$array)."')";
				$sql1 .=" AND product_brand IN ('".implode("','",$array)."')";
			}
		}
		if(isset($_POST['category']))
		{
			$array=json_decode($_POST['category']);
			if($array == NULL){}
			else{
				$sql .=" AND product_category IN ('".implode("','",$array)."')";
				$sql1 .=" AND product_category IN ('".implode("','",$array)."')";
			}
		}
		if(isset($_POST['pdesc']) && $_POST['pdesc']!='')
		{
			$array=json_decode($_POST['pdesc']);
			if($array == NULL){}
			else{
				$sql .=" AND product_description IN ('".implode("','",$array)."')";
				$sql1 .=" AND product_description IN ('".implode("','",$array)."')";
			}
		}
		$sql .= " ORDER BY product_name.product_id ASC $limit";
		$result=$conn->query($sql);
		//var_dump($sql);
		$output .='<div class="row">';
		while($row=mysqli_fetch_assoc($result))
		{
			$output .='	<a href="productinfo.php?i='.urlencode(base64_encode($row['product_id'])).'">	
						<div class="col-md-3 col-sm-3 col-xs-6" style="padding:2px;">
		   			   		<div class="col-md-12 col-xs-12 col-sm-12"><img class="img-thumbnail" src="'.$row['product_thumbnail'].'"></div>
							<div class="col-md-12 col-sm-12 col-xs-12" align="center">'.$row['product_name'].'</div>
							<div class="col-md-12 col-sm-12 col-xs-12" align="center">₹'.$row['price'].' INR</div>
       	 			   		<div class="col-md-12 col-sm-12 col-xs-12" align="center">
								<a class="btn btn-default" style="background-color:#303F9F; color:#FFFFFF;">LOOK</a>
	    					</div>
					   </div>
					   </a>';
		}                  
		$output .='</div>';

		$result1=$conn->query($sql1);
		$total_records=mysqli_num_rows($result1);
		$total_pages=ceil($total_records/$page_rows);
		$output .='<br>
				   <div class="row">
				   <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-4 col-sm-offset-3">';
		if($total_pages != 1){
			if($page > 1){
				$previous = $page - 1;
				$output .= '<span class="btn btn-default pagination_link" id="'.$previous.'" style="cursor:pointer;"><span class="glyphicon glyphicon-chevron-left"></span></span> &nbsp;';	
			
				for($i=$page-4 ; $i<$page ; $i++){
					if($i > 0){
						$output .= '<span class="btn btn-default pagination_link" id="'.$i.'" style="cursor:pointer;">'.$i.'</span> &nbsp;';
					}	
				}
			}
			
			$output .= '<span class="btn btn-default pagination_link" id="'.$page.'" style="cursor:pointer;">'.$page.'</span> &nbsp;';
			
			for($i=$page+1 ; $i <= $total_pages ; $i++){
				$output .= '<span class="btn btn-default pagination_link" id="'.$i.'" style="cursor:pointer;">'.$i.'</span> &nbsp;';
				if($i >= $page+4){
				break;	
				}
			}
			if($page != $total_pages){
				$next = $page + 1;
				$output .= '<span class="btn btn-default pagination_link" id="'.$next.'" style="cursor:pointer;"><span class="glyphicon glyphicon-chevron-right"></span></span>';
			}
			
		}
		$output .='</div>
				   </div>';
		
		echo $output;
		mysqli_close($conn);