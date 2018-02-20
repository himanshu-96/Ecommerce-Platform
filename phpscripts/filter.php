<?php
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}		
	
	$link = urldecode($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
	if(strpos($link , 'Apparel') != false){	
		$value='APPAREL';	
	}
	if(strpos($link , 'Accessories') != false){	
		$value='ACCESSORIES';	
	}	
	if(strpos($link , 'Women') != false){
		$gender='WOMEN';	
	}
	if(strpos($link , 'Men') != false){
		$gender='MEN';	
	}
	if(strpos($link , 'Women') != false ){
		$gender='WOMEN';	
	}
	if(strpos($link , 'Men') != false){
		$gender='MEN';	
	}

	if((strpos($link , 'Apparel') != false && strpos($link , 'Women') == false && strpos($link , 'Men') == false) || (strpos($link , 'Accessories') != false && strpos($link , 'Women') == false && strpos($link , 'Men') == false)){
	
	echo ' <div class="row" id="style-1">';
	echo ' <div class="col-md-12 col-sm-12 col-xs-12" style="border-style: solid;border-color:#ccc;border-width: 0px 0px 1px 0px;">			   <h3>GENDER</h3></div>
		   <div class="col-md-12 col-sm-12 col-xs-12" id="myDiv0" style="height:100px; border-style: solid;border-color:#ccc;border-width: 0px 0px 1px 0px;overflow: hidden;">
		   <input type="checkbox" name="gender" class="type" id="Men" value="Men"/>&nbsp;Men</br>
		   <input type="checkbox" name="gender" class="type" id="Women" value="Men"/>&nbsp;Women</br>
		   </div>
		   <div class="col-md-12 col-sm-12 col-xs-12" style="padding:2%;">
		  		<button class="btn btn-link" href="#myDiv1" style="align-content:right;">+ Show more</button>
		   </div>
		   </div>';	
	}


	$sql = "SELECT DISTINCT(product_brand) FROM product_brand WHERE product_class='".$value."'";
	if ($gender != NULL){
		$sql .= "AND gender='".$gender."'";
	}
	$result=$conn->query($sql);		
	echo ' <div class="row" id="style-1">';
	echo ' <div class="col-md-12 col-sm-12 col-xs-12" style="border-style: solid;border-color:#ccc;border-width: 0px 0px 1px 0px;"><h3>BRAND</h3></div>
		   <div class="col-md-12 col-sm-12 col-xs-12" id="myDiv1" style="height:100px; border-style: solid;border-color:#ccc;border-width: 0px 0px 1px 0px;overflow: hidden;">';
  	while($row=mysqli_fetch_assoc($result))
	{
		echo '<input type="checkbox" name="brand" class="type" id="'.$row['product_brand'].'" value="'.$row['product_brand'].'"/>&nbsp;'.$row['product_brand'].'</br>';	
    }
	echo '</div>
		  <div class="col-md-12 col-sm-12 col-xs-12" style="padding:2%;">
		  		<button class="btn btn-link" href="#myDiv1" style="align-content:right;">+ Show more</button>
		  </div>
		  </div>';	  				
				
	$sql = "SELECT DISTINCT(product_category) FROM product_category WHERE product_class='".$value."'";
	if ($gender != NULL){
		$sql .= "AND gender='".$gender."'";
	}
	$result=$conn->query($sql);
	echo ' <div class="row">';
	echo ' <div class="col-md-12 col-sm-12 col-xs-12" style="border-style: solid;border-color:#ccc;border-width: 0px 0px 1px 0px;"><h3>TYPES</h3></div>
		   <div class="col-md-12 col-sm-12 col-xs-12" id="myDiv2" style="height:100px; border-style: solid;border-color:#ccc;border-width: 0px 0px 1px 0px;overflow: hidden;">';
  	while($row=mysqli_fetch_assoc($result))
	{
		echo '<input type="checkbox" name="category" class="type" id="'.$row['product_category'].'" value="'.$row['product_category'].'"/>&nbsp;'.$row['product_category'].'</br>';	
    }
	echo '</div>
		  <div class="col-md-12 col-sm-12 col-xs-12">
		  		<button class="btn btn-link" href="#myDiv2" style="align-content:right;">+ Show more</button>
		  </div>
		  </div>';
	
	$sql = "SELECT DISTINCT(product_description) FROM product_name WHERE product_class='".$value."'";
	if ($gender != NULL){
		$sql .= "AND gender='".$gender."'";
	}
	$result=$conn->query($sql);
	echo ' <div class="row">';
	echo ' <div class="col-md-12 col-sm-12 col-xs-12" style="border-style: solid;border-color:#ccc;border-width: 0px 0px 1px 0px;"><h3>TYPE</h3></div>
		   <div class="col-md-12 col-sm-12 col-xs-12" id="myDiv3" style="height:100px; border-style: solid;border-color:#ccc;border-width: 0px 0px 1px 0px;overflow: hidden;">';
	while($row=mysqli_fetch_assoc($result))
	{
		echo '<input type="checkbox" name="description" class="type" id="'.$row['product_description'].'" value="'.$row['product_description'].'"/>&nbsp;'.$row['product_description'].'</br>';
    }
	echo '</div>
		  <div class="col-md-12 col-sm-12 col-xs-12">
		  		<button class="btn btn-link" href="#myDiv3" style="align-content:right;">+ Show more</button>
		  </div>
		  </div>';
				
	