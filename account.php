<?php
	session_start();
	if(!isset($_SESSION['user']['id'])){
		header("Location: ../libaaz2/index.php");
	}
	class Item{
	 var $pic;
	 var $id;
	 var $name;
	 var $size;
	 var $price;
	 var $quantity;
	 var $classes;
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/yamm.css" rel="stylesheet">
    <link rel="stylesheet" href="css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link href="css/sb-admin-2.css" rel="stylesheet">

	<script src="js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbarr-fixed-top">
<?php
		include 'phpscripts/navbar.php';	
?>
<div class="container-fluid">  
    <div class="row">
	<div id="wrapper" data-no-scroll="1" style="position:fixed;">
    	<div role="navigation"> 
        	<div class="navbar-default sidebar" role="navigation">
            	<div class="sidebar-nav navbar-collapse">
                	<ul class="nav" id="side-menu">
                    	<li>
                        	<a href="#wrapper1"><i class="fa fa-dashboard fa-fw"></i>Personal Details<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="#wrapper3"><i class="fa fa-dashboard fa-fw"></i>Orders<span class="fa arrow"></span></a>
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
     
    <div id="wrapper1">
    	<div id="page-wrap">
        	<div class="row">
            	<div class="col-lg-12">
                	<h1 class="page-header">Personal Details</h1>
                </div>
            </div>
<?php
		$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
		if(!$conn)
		{
			die("Connection Failed: ".mysql_connect_error());
		}
		$sql="Select * from user_name where user_id='".$_SESSION['user']['id']."'";
		$result=$conn->query($sql);
		$row=mysqli_fetch_assoc($result);
		echo '
            <div class="row">
                                    	<div class="col-md-4 col-sm-6">
                                        	Name : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_name" required="required" placeholder="'.$row['user_name'].'">
                                        </div>
										<div class="col-md-2 col-sm-2">
                                        	<input type="Submit" class="form-control">
                                        </div>
			</div>
			<br />
			<div class="row">
                                        <div class="col-md-4 col-sm-6">
                                        	User Name : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_brand" required="required" placeholder="'.$row['user_username'].'">
                                        </div>
										<div class="col-md-2 col-sm-2">
                                        	<input type="Submit" class="form-control">
                                        </div>
			</div>
			<br />
			<div class="row">
                                        <div class="col-md-4 col-sm-6">
                                        	Email : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_subbrand" required="required" placeholder="'.$row['user_email'].'">
                                        </div>
										<div class="col-md-2 col-sm-2">
                                        	<input type="Submit" class="form-control">
                                        </div>
			</div>
			<br />
			<div class="row">
                                        <div class="col-md-4 col-sm-6">
                                        	Contact No. : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_description" required="required" placeholder="'.$row['user_contact'].'">
                                        </div>
										<div class="col-md-2 col-sm-2">
                                        	<input type="Submit" class="form-control">
                                        </div>
			</div>
			<br />
			<div class="row">
                                        <div class="col-md-4 col-sm-6">
                                        	Address : 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        	<input type="text" class="form-control" name="product_class" required="required" placeholder="'.$row['user_address'].'">
                                        </div>
										<div class="col-md-2 col-sm-2">
                                        	<input type="Submit" class="form-control">
                                        </div>
			</div>
			<br />
			<div class="row">
                                        <div class="col-md-4 col-sm-6">
                                        	Password : 
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                        	<input type="password" class="form-control" name="product_category" required="required" placeholder="Old Password">
                                        </div>
										<div class="col-md-2 col-sm-6">
                                        	<input type="password" class="form-control" name="product_category" required="required" placeholder="New Password">
                                        </div>
										<div class="col-md-2 col-sm-6">
                                        	<input type="password" class="form-control" name="product_category" required="required" placeholder="Re-type New Password">
                                        </div>
										<div class="col-md-2 col-sm-2">
                                        	<input type="Submit" class="form-control">
                                        </div>
    		</div>';
			?>
		</div>	
    </div>
    <!---------->
        <div id="wrapper3">
    	<div id="page-wrap">
        	<div class="row">
            	<div class="col-lg-12">
                	<h1 class="page-header">Orders</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
    			<div class="col-md-12 col-xs-12" style="height:100%;">
                    <div class="panel panel-default">
<?php
		$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
		if(!$conn)
		{
			die("Connection Failed: ".mysql_connect_error());
		}
		$sql="Select * from user_name where user_id='".$_SESSION['user']['id']."'";
		$result=$conn->query($sql);
		$row=mysqli_fetch_assoc($result);
		$output='<table class="table-responsive table-striped table-bordered" style="width: 100%; align-items:center">
                 <tr>
					 <th>NAME</th>
					 <th>DATE</th>
					 <th>STATUS</th>
                 </tr>';
		$sql="Select * from orders where username='".$row['user_username']."'";
		$result=$conn->query($sql);
		while($row=mysqli_fetch_assoc($result))
		{
			$shipping;
			if($row['status'] == 0){ $shipping = 'Shipping';}
			else{ $shipping = 'Shipped';}
			$output .='<tr>
							<td>'.$row['name'].'</td>
       	 			   		<td>'.$row['datecreation'].'</td>
					   		<td>'.$shipping.'</td>
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

<br/>
<br/>
   
<?php
	include 'phpscripts/footer.php';
?>
<!-- jQuery -->
<!-- <script src="js/jquery.js"></script> -->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<script>
jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });
});
</script>
</body>

</html>
