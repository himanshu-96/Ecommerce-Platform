<?php

	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysql_connect_error());
	}
	$id=json_decode($_POST['product_id']);
	$sql="Select * from product_size where product_id='".implode("','",$id)."'";
	$result=$conn->query($sql);
	$row=mysqli_fetch_assoc($result);
	echo '
		<form method="post" action="phpscripts/quantity-change.php">
		<br>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="col-md-6 col-sm-6">
               		ID : 
               </div>
               <div class="col-md-6 col-sm-6">
                	<input class="form-control" type="text" name="id" placeholder="'.$row['product_id'].'" value="'.$row['product_id'].'"> 
                </div>
               <div class="col-md-6 col-sm-6">
               		XS : 
               </div>
               <div class="col-md-6 col-sm-6">
                	<input class="form-control" type="text" name="XS" placeholder="'.$row['XS'].'"> 
                </div>
                <div class="col-md-6 col-sm-6">
                	S : 
                </div>
                <div class="col-md-6 col-sm-6">
                	<input class="form-control" type="text" name="S" placeholder="'.$row['S'].'"> 
                </div>
                <div class="col-md-6 col-sm-6">
                	M : 
                </div>
                <div class="col-md-6 col-sm-6">
                	<input class="form-control" type="text" name="M" placeholder="'.$row['M'].'"> 
                </div>
                <div class="col-md-6 col-sm-6">
                	L : 
                </div>
                <div class="col-md-6 col-sm-6">
                	<input class="form-control" type="text" name="L" placeholder="'.$row['L'].'"> 
                </div>
                <div class="col-md-6 col-sm-6">
                	XL : 
                </div>
                <div class="col-md-6 col-sm-6">
                	<input class="form-control" type="text" name="XL" placeholder="'.$row['XL'].'"> 
                </div>
                <div class="col-md-6 col-sm-6">
                	XXL : 
                </div>
                <div class="col-md-6 col-sm-6">
                	<input class="form-control" type="text" name="XXL" placeholder="'.$row['XXL'].'"> 
            	</div>
				<div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                	<input class="form-control" type="submit"> 
            	</div>
        	</div>
		</div>
		</form>
	';