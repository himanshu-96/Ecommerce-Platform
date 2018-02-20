<?php
	session_start();
	if(!isset($_SESSION['seller'])){
		header("Location: ../libaaz2/sellerlogin.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container" style="width:100%">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Seller Panel</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Seller</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
				<!--right nav-->
				<ul class="nav navbar-nav navbar-top-links navbar-right">
					
<?php
	$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
	if(!$conn)
	{
		die("Connection Failed: ".mysqli_connect_error());
	}
	if(isset($_SESSION['admin'])){
		$sql="SELECT * FROM seller_name INNER JOIN seller_private ON seller_name.seller_id=seller_private.seller_id WHERE seller_name.seller_id='".$_SESSION['seller']."'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc(); 
		echo '          <li><a href="#"><strong>'.$row['seller_name'].'</strong></a></li> ';
	}
?>
					
                    <li><a href="phpscripts/logoutadmin.php">Sign Out</a></li> 				
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>   
        <!-- /.container -->
    </nav>


	<div id="wrapper" data-no-scroll="1" style="position:fixed;">
    	<div role="navigation" style="transform: translateY(0px) translateX(0px);"> 
        	<div class="navba-default sidebar" role="navigation">
            	<div class="sidebar-nav navba-collapse">
                	<ul class="nav" id="side-menu">
                    	<li>
                        	<a href="#wrapper1"><i class="fa fa-dashboard fa-fw"></i> Dashboard<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="#wrapper2"><i class="fa fa-dashboard fa-fw"></i> User & Seller Details<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="#wrapper3"><i class="fa fa-dashboard fa-fw"></i> Orders & Product Quantities<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Forms<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
    
    <div id="wrapper1" style="padding-top:50px;">
    	<div id="page-wrap">
        	<div class="row">
            	<div class="col-lg-12">
                	<h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
<?php

		$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
		if(!$conn)
		{
			die("Connection Failed: ".mysql_connect_error());
		}

		$sql1="Select * from product_name";
		$result1=$conn->query($sql1);
		$total_records=mysqli_num_rows($result1);
		echo '<div class="huge">'.$total_records.'</div>';
?>                                    
                                    <div>Total Products</div>
                                </div>
                            </div>
                        </div>
                        <a href="#wrapper1">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>                
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xs-12" style="height:100%;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Product Listing
                            <div class="pull-right">
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body chat" style="height:500px;overflow-y: scroll;">
                            <div id="product_edit">
<?php
		$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
		if(!$conn)
		{
			die("Connection Failed: ".mysql_connect_error());
		}
		$output='';
		$sql="Select * from product_name
				INNER JOIN product_brand on product_brand.product_id=product_name.product_id
				INNER JOIN product_category on product_category.product_id=product_name.product_id
				INNER JOIN product_size on product_size.product_id=product_name.product_id";
		$result=$conn->query($sql);
		$output .='<div class="row">';
		while($row=mysqli_fetch_assoc($result))
		{
			$output .='<div class="col-md-3 col-sm-3 col-xs-12">
		   			   		<div class="col-md-12 col-xs-12 col-sm-12"><img class="img-thumbnail" src="'.$row['product_thumbnail'].'"></div>
							<div class="col-md-12 col-sm-12 col-xs-12" align="center">₹'.$row['price'].' INR</div>
       	 			   		<div class="col-md-12 col-sm-12 col-xs-12" align="center">'.$row['product_name'].'</div>
						    <div class="col-md-12 col-sm-12 col-xs-12" align="center" id="data">
								<input type="checkbox" id="'.$row['product_id'].'" value="'.$row['product_id'].'" name="products"/>
	    					</div>
					   </div>';
		}
		$output .='</div>';
		echo $output;
?>                               
                            </div>
                        </div>
                    </div>
				</div>
                <div class="col-md-4 col-xs-12" style="height:100%;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Product Prices
                            <div class="pull-right">
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body chat" style="height:500px;overflow-y: scroll;">
	                        <div id="price">
                            	<table class="table-responsive table-striped table-bordered" style="width: 100%; align-items:center">
                                   <tr>
                                        <th>ID</th>
                                        <th>XS</th>
                                        <th>S</th>
                                        <th>M</th>
                                        <th>L</th>
                                        <th>XL</th>
                                        <th>XXL</th>
                                        <th>Price</th>
                                        <th>Edit</th>
                                   </tr>
                               
<?php
		$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
		if(!$conn)
		{
			die("Connection Failed: ".mysql_connect_error());
		}
		$output='';
		$sql="Select * from product_size";
		$result=$conn->query($sql);
		while($row=mysqli_fetch_assoc($result))
		{
			$output .='<tr>
							<td>'.$row['product_id'].'</td>
		   			   		<td>'.$row['XS'].'</td>
                            <td>'.$row['S'].'</td>
                            <td>'.$row['M'].'</td>
                            <td>'.$row['L'].'</td>
                            <td>'.$row['XL'].'</td>
                            <td>'.$row['XXL'].'</td>
                            <td>'.$row['price'].'</td>
							<td><input type="checkbox" id="'.$row['product_id'].'" value="'.$row['product_id'].'" name="price"/></td>
					   </tr>';
		}
		$output .='</table>';
		echo $output;
?>                 
                			</div>
						</div>
					</div>
				</div>
    		</div>
		</div>	
    </div>
    <!---------->
        <div id="wrapper3" style="padding-top:50px;">
    	<div id="page-wrap">
        	<div class="row">
            	<div class="col-lg-12">
                	<h1 class="page-header">Orders & Product Quantities</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
    			<div class="col-md-5 col-xs-12" style="height:100%;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Upload Product
                            <div class="pull-right">
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body chat" style="height:500px;overflow-y: scroll;">
	                        <div id="order">
                            	<table class="table-responsive table-striped table-bordered" style="width: 100%; align-items:center">
                                   <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>DATE</th>
                                        <th>USER</th>
                                        <th>STATUS</th>
                                        <th>Edit</th>
                                   </tr>
                             
<?php
		$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
		if(!$conn)
		{
			die("Connection Failed: ".mysql_connect_error());
		}
		$output='';
		$sql="Select * from orders";
		$result=$conn->query($sql);
		while($row=mysqli_fetch_assoc($result))
		{
			$output .='<tr>
		   			   		<td>'.$row['id'].'</td>
							<td>'.$row['name'].'</td>
       	 			   		<td>'.$row['datecreation'].'</td>
						    <td>'.$row['username'].'</td>
					   		<td>'.$row['status'].'</td>
							<td><input type="checkbox" id="'.$row['id'].'" value="'.$row['id'].'" name="orders"/></td>
					   </tr>';
		}
		$output .='</table>';
		echo $output;
?>                 
                			</div>
						</div>
					</div>
				</div> 
				<div class="col-md-7 col-xs-12" style="height:100%;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Product Quantities
                            <div class="pull-right">
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body chat" style="height:500px;overflow-y: scroll;">
	                        <div id="libaaz-area-chart">
                            	<form action="phpscripts/product_upload.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                    	<div class="col-md-6 col-sm-6">
                                        	Product Name : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_name" required="required" placeholder="Product Name">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Brand : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_brand" required="required" placeholder="Product Brand">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Sub-brand : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_subbrand" required="required" placeholder="Product Sub-brand">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Description : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_description" required="required" placeholder="Product Description">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Class : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="Class">
    	                                        <option>APPAREL</option>
	                                            <option>ACCESSORIES</option>
                                            </select>		
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Category : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_category" required="required" placeholder="Product Category">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Category Description : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_categorydescription" required="required" placeholder="Product Category Description">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Price : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_price" required="required" placeholder="Product Price">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Seller Name : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="seller_name" required="required" placeholder="Product Description" value="<?php echo $_SESSION['seller_name']; ?>">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Thumbnail : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input class="btn btn-default btn-file" type="file" name="file[]" required="required" multiple>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Image 1 : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input class="btn btn-default btn-file" type="file" name="file[]" required="required" multiple>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Image 2 : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input class="btn btn-default btn-file" type="file" name="file[]" required="required" multiple>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	Product Image 3 : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input class="btn btn-default btn-file" type="file" name="file[]" required="required" multiple>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6">
                                        	Gender
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="Gender">
    	                                        <option>WOMEN</option>
	                                            <option>MEN</option>
                                            </select>		
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                        	<div class="col-md-6 col-sm-6">
                                        		XS : 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		<input class="form-control" type="text" name="XS" required="required" placeholder="Quantity"> 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		S : 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		<input class="form-control" type="text" name="S" required="required" placeholder="Quantity"> 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		M : 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		<input class="form-control" type="text" name="M" required="required" placeholder="Quantity"> 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		L : 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		<input class="form-control" type="text" name="L" required="required" placeholder="Quantity"> 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		XL : 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		<input class="form-control" type="text" name="XL" required="required" placeholder="Quantity"> 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		XXL : 
                                        	</div>
                                            <div class="col-md-6 col-sm-6">
                                        		<input class="form-control" type="text" name="XXL" required="required" placeholder="Quantity"> 
                                        	</div>
                                        </div>
									</div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-2 col-xs-12">
	                                            <input type="submit" class="btn btn-default" placeholder="Submit">
                                            </div>
                                        </div> 
                                    </div>  
                                </form>	
                			</div>
						</div>
					</div>
				</div>  
    		</div>
		</div>	
    </div>
    
<!-- jQuery -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>
<script>
$(document).on("change", "input[name=products]", function(e) {
		
		var checked1 = $('input[name=products]:checked');
		var checkedValues1 = checked1.map(function(i) { return $(this).val() }).get();
		var product_id = JSON.stringify(checkedValues1);
					
			$.ajax({
				method:"POST",
				url:"phpscripts/adminedit.php",
				data:{product_id:product_id},
				success: function(data){
					$('#product_edit').html(data);
				}
			});
	});
</script>
<script>
$(document).on("change", "input[name=price]", function(e) {
		
		var checked1 = $('input[name=price]:checked');
		var checkedValues1 = checked1.map(function(i) { return $(this).val() }).get();
		var product_id = JSON.stringify(checkedValues1);
							
			$.ajax({
				method:"POST",
				url:"phpscripts/price.php",
				data:{product_id:product_id},
				success: function(data){
					$('#price').html(data);
				}
			});
	});
</script>
<script>
$(document).on("change", "input[name=orders]", function(e) {
		
		var checked1 = $('input[name=orders]:checked');
		var checkedValues1 = checked1.map(function(i) { return $(this).val() }).get();
		var order_id = JSON.stringify(checkedValues1);
		alert(order_id);			
			$.ajax({
				method:"POST",
				url:"phpscripts/orders.php",
				data:{order_id:order_id},
				success: function(data){
					$('#order').html(data);
				}
			});
	});
</script>
</body>

</html>
