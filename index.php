<?php
	error_reporting(0);
	session_start();
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

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libaaz&reg;</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <!-- Custom CSS -->
    <link href="css/yamm.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesproddisp.css" /> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
		/*parallax*/
		#parallax {
			/* The image used */
			background-image: url("images/img_parallax3.jpg");
		
			/* Set a specific height */
			min-height: 100%; 
		
			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll">
<?php
	include 'phpscripts/navbar.php';	

	$link = urldecode($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
	if(strpos($link ,'Women')){
		echo '
	<div class="container-fluid">		
		<!-- Intro Section -->
		<section id="intro" class="services-section">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12" style="overflow:hidden;" align="left">
							<b>SHOP BY</b>
						</div>
						<div class="col-md-12 col-sm-4 col-xs-12" style="overflow:hidden;margin-top: 3%;">
							<a href="productpage.php?Women-Apparel">
								<img class="img-responsive" src="images/K0031_Home-Top-Banner-Women-27032017_desktop_1490613628248-APP.jpg">
							</a>
						</div>
						<div class="col-md-12 col-sm-4 col-xs-12" style="overflow:hidden;margin-top: 4%;">
							<a href="productpage.php?Women-Accessories">
								<img class="img-responsive" src="images/K0031_Home-Top-Banner-Women-27032017_desktop_1490613628248-ACC.jpg">
							</a>
						</div>
						<div class="col-md-12 col-sm-4 col-xs-12" style="overflow:hidden;margin-top: 4%;">
							<img class="img-responsive" src="images/K0031_Home-Top-Banner-Women-27032017_desktop_1490613628248.jpg">
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-9">
					<div id="carousel1" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						  <li data-target="#carousel1" data-slide-to="0" class="active"></li>
						  <li data-target="#carousel1" data-slide-to="1"></li>
						  <li data-target="#carousel1" data-slide-to="2"></li>
						  <li data-target="#carousel1" data-slide-to="3"></li>
						  <li data-target="#carousel1" data-slide-to="4"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
						  <div class="item active"><img class="img-responsive" src="images/car1.jpg" alt="First slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img class="img-responsive" src="images/car2.jpg" alt="Second slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img  class="img-responsive" src="images/car3.jpg" alt="Third slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img  class="img-responsive" src="images/car4.jpg" alt="Third slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img class="img-responsive" src="images/car5.jpg" alt="Third slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>                            
						</div>
						<a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
					</div>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive"src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>                
					</div>
				</div>
			</div>
			<br />
		</section>
	
		<section id="apparel" class="services-section" style="width: 100%;">
			<br />
			<hr>  
			<div class="row">
				<div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<a href="productpage.php?Women-Apparel/SANGARIA"><img class="img-responsive" src="images/R6438_Mens_Brand-Logo-8_Levis_21022017_desktop_1487668313368.jpg"></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<a href="productpage.php?Women-Apparel/ADIDAS"><img class="img-responsive" src="images/R6456_Mens_Brand-Logo-1_Jack-Jones_21022017_desktop_1487667978969.jpg"></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<a href="productpage.php?Women-Apparel/VERO MODA"><img class="img-responsive" src="images/R6436_Mens_Brand-Logo-6_US-Polo_21022017_desktop_1487668163923.jpg"></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<a href="productpage.php?Women-Apparel/PUMA"><img class="img-responsive" src="images/R6435_Mens_Brand-Logo-5_UCB_21022017_desktop_1487668117970.jpg"></a>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<a href="productpage.php?Women-Apparel/SANGARIA"><img class="img-responsive" src="images/R6438_Mens_Brand-Logo-8_Levis_21022017_desktop_1487668313368.jpg"></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<a href="productpage.php?Women-Apparel/ADIDAS"><img class="img-responsive" src="images/R6456_Mens_Brand-Logo-1_Jack-Jones_21022017_desktop_1487667978969.jpg"></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<a href="productpage.php?Women-Apparel/VERO MODA"><img class="img-responsive" src="images/R6436_Mens_Brand-Logo-6_US-Polo_21022017_desktop_1487668163923.jpg"></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<a href="productpage.php?Women-Apparel/PUMA"><img class="img-responsive" src="images/R6435_Mens_Brand-Logo-5_UCB_21022017_desktop_1487668117970.jpg"></a>
						</div>
					</div>
				</div>
			</div>
			<br />
			<hr>
		</section>
		
		<!-- Apparel Section -->
		<section id="apparel" class="services-section" style="width: 100%;">
			<br/>
			<div class="row">
				<div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-12">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-6" style="overflow:hidden">
									<img src="images/325x350._V534915107_.jpg" class="img-responsive img-thumbnail">
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6">
									<h4><a href="productpage.php?Women-Apparel/KURTAS">KURTAS</a></h4>
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6">
									<h4><a href="productpage.php?Women-Apparel/SALWAR SUITS">SALWAR SUITS</a></h4>
									<hr/>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6">
									<h4><a href="productpage.php?Women-Apparel/SAREES">SAREES</a></h4>
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6">
									<h4><a href="productpage.php?Women-Apparel/HANDLOOM">HANDLOOM</a></h4>
									<hr />
								</div>
							</div>    
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-6" style="overflow:hidden">
									<img src="images/325x350-1040991._V530494834_.jpg" class="img-responsive img-thumbnail"> 
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4><a href="productpage.php?Women-Apparel/Casual Wear">JEANS</a></h4>
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4><a href="productpage.php?Women-Apparel/Sports Wear">TROUSERS</a></h4>
									<hr/>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4><a href="productpage.php?Women-Apparel/Ethnic Wear">TOPS, TEES & SHIRTS</a></h4>
									<hr />
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-6 " style="overflow:hidden">
									<img src="images/spowom._V534241644_.jpg" class="img-responsive img-thumbnail"> 
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4><a href="productpage.php?Women-Apparel/Ethnic Wear">T-SHIRT & POLOS</a></h4>
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4><a href="productpage.php?Women-Apparel/Ethnic Wear">SHIRTS</a></h4>
									<hr/>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4><a href="productpage.php?Women-Apparel/Ethnic Wear">TRACK PANTS</a></h4>
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4><a href="productpage.php?Women-Apparel/Ethnic Wear">SPORTS SHORTS</a></h4>
									<hr />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<img class="img-responsive img-thumbnail" src="images/640X290-DENIM-FEST-3._V531023453_.jpg">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<img class="img-responsive img-thumbnail" src="images/Fash_Bash_March._V531295435_.jpg">
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img src="images/Wrangler-SS17._V534672584_.jpg" class="img-responsive img-thumbnail">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img src="images/Reebok-SS17._V532979835_.jpg" class="img-responsive img-thumbnail">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img src="images/UA-SS17._V532516900_.jpg" class="img-responsive img-thumbnail">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img src="images/M_S-SS17._V532987457_.jpg" class="img-responsive img-thumbnail">
						</div>	
					</div>
				</div>
			</div>
		</section> 
	</div>   
	<br />
	<br />';	
	}
	
	else if(strpos($link , 'Men')){
		echo '
	<div class="container-fluid">
	<!-- Intro Section -->
		<section id="intro" class="services-section">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12" style="overflow:hidden;" align="left">
							<b>SHOP BY</b>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12" style="overflow:hidden;margin-top: 3%;">
							<a href="productpage.php?Men-Apparel">
								<img class="img-responsive" src="images/K0030_Home-Top-Banner-Mens-27032017_desktop_1490613667545-APP.jpg">
							</a>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12" style="overflow:hidden;margin-top: 4%;">
							<a href="productpage.php?Men-Accessories">
								<img class="img-responsive" src="images/K0030_Home-Top-Banner-Mens-27032017_desktop_1490613667545-ACC.jpg">
							</a>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12" style="overflow:hidden;margin-top: 4%;">
							<img class="img-responsive" src="images/K0030_Home-Top-Banner-Mens-27032017_desktop_1490613667545.jpg">
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-9">
					<div id="carousel1" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						  <li data-target="#carousel1" data-slide-to="0" class="active"></li>
						  <li data-target="#carousel1" data-slide-to="1"></li>
						  <li data-target="#carousel1" data-slide-to="2"></li>
						  <li data-target="#carousel1" data-slide-to="3"></li>
						  <li data-target="#carousel1" data-slide-to="4"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
						  <div class="item active"><img class="img-responsive" src="images/car1.jpg" alt="First slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img class="img-responsive" src="images/car2.jpg" alt="Second slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img  class="img-responsive" src="images/car3.jpg" alt="Third slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img  class="img-responsive" src="images/car4.jpg" alt="Third slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img class="img-responsive" src="images/car5.jpg" alt="Third slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>                            
						</div>
						<a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
					</div>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive"src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>                
					</div>
				</div>
			</div>
			<br />
		</section>
	
		<section id="apparel" class="services-section" style="width: 100%;">
			<br />
			<hr>
			<div class="row">
				<div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/R6438_Mens_Brand-Logo-8_Levis_21022017_desktop_1487668313368.jpg">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/R6456_Mens_Brand-Logo-1_Jack-Jones_21022017_desktop_1487667978969.jpg">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/R6436_Mens_Brand-Logo-6_US-Polo_21022017_desktop_1487668163923.jpg">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/R6435_Mens_Brand-Logo-5_UCB_21022017_desktop_1487668117970.jpg">
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/R6438_Mens_Brand-Logo-8_Levis_21022017_desktop_1487668313368.jpg">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/R6456_Mens_Brand-Logo-1_Jack-Jones_21022017_desktop_1487667978969.jpg">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/R6436_Mens_Brand-Logo-6_US-Polo_21022017_desktop_1487668163923.jpg">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img class="img-responsive" src="images/R6435_Mens_Brand-Logo-5_UCB_21022017_desktop_1487668117970.jpg">
						</div>
					</div>
				</div>
			</div>
			<br />
			<hr>
		</section>
		
		<!-- Apparel Section -->
		<section id="apparel" class="services-section" style="width: 100%;">
			<br/>
			<div class="row">
				<div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-10 col-sm-push-1 col-xs-12">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-6" style="overflow:hidden">
									<img src="images/325x350-sportswear._V533951562_.jpg" class="img-responsive img-thumbnail">
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6">
									<h4>SPORTS T-SHIRT</h4>
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6">
									<h4>TRACK JACKETS</h4>
									<hr/>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6">
									<h4>SPORTS SHORTS</h4>
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6">
									<h4>TRACK PANTS</h4>
									<hr />
								</div>
							</div>    
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-6" style="overflow:hidden">
									<img src="images/bottomwear._V534959787_.jpg" class="img-responsive img-thumbnail"> 
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4>JEANS</h4>
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4>TROUSERS</h4>
									<hr/>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4>SHORTS</h4>
									<hr />
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-6 " style="overflow:hidden">
									<img src="images/top-wear._V534959785_.jpg" class="img-responsive img-thumbnail"> 
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4>T-SHIRT & POLOS</h4>
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4>SHIRTS</h4>
									<hr/>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4>KURTAS</h4>
									<hr />
								</div>
								<div class="col-md-12 col-sm-12 col-xs-6 ">
									<h4>SUITS & BLAZERS</h4>
									<hr />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<img class="img-responsive img-thumbnail" src="images/640X290-DENIM-FEST-3._V531023453_.jpg">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<img class="img-responsive img-thumbnail" src="images/Fash_Bash_March._V531295435_.jpg">
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img src="images/Wrangler-SS17._V534672584_.jpg" class="img-responsive img-thumbnail">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img src="images/Reebok-SS17._V532979835_.jpg" class="img-responsive img-thumbnail">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img src="images/UA-SS17._V532516900_.jpg" class="img-responsive img-thumbnail">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<img src="images/M_S-SS17._V532987457_.jpg" class="img-responsive img-thumbnail">
						</div>	
					</div>
				</div>
			</div>
		</section>
	</div>
	<br />
	<br />';	
	}

	else if(strpos($link , 'Registration')){
		echo '
	<div class="container-fluid" style="">
	<!-- Intro Section -->
		<section id="intro" class="services-section" style="background-image: url(images/shop_shopping_people_stock_57077_1920x1200.jpg); height:900px;">
			<br/>
			<br/>
			<br/>
			<br/>
			<div class="row">
				<div class="col-md-4 col-sm-5 col-xs-6 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" style="background-color:#FFFFFF;box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);background-color:#FFFFFF; border-bottom:thin; border-radius: 10px;">
					<div class="col-md-12 col-lg-12"> <br /><b>REGISTRATION</b>
					</div>
					<div class="col-md-12 col-lg-12">
						<br />
						<br/>
						<form action="phpscripts/register.php" autocomplete="on" method="post" name="register" onSubmit="return validateForm();" class="form-horizontal">
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">
											Name</label>
										<div class="col-sm-10">
											<div class="row">
												<div class="col-md-12">
													<input type="text" class="form-control" placeholder="Name" name="user_name" required="required" />
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="mobile" class="col-sm-2 control-label">
											Address</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="mobile" placeholder="Address" name="user_address" required="required" />
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">
											Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="email" name="user_emailid" required="required" placeholder="Email Id"/>
										</div>
									</div>
									<div class="form-group">
										<label for="mobile" class="col-sm-2 control-label">
											Mobile</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="mobile" placeholder="Mobile" name="user_contact" required="required" />
										</div>
									</div>
									<div class="form-group">
										<label for="username" class="col-sm-2 control-label">
											Username</label>
										<div class="col-sm-10">
											<input type="text" name="user_id" class="form-control" id="password" placeholder="User Name" required="required"/>
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="col-sm-2 control-label">
											Password</label>
										<div class="col-sm-10">
											<input type="password" required="required" name="pwd" class="form-control" id="password" placeholder="Password" />
										</div>
									</div>
									<br/>
									<div class="row">
										<div class="col-md-2 col-md-offset-5">
											<input type="submit" class="btn btn-primary btn-sm" value="Save & Continue"></input>
										</div>
									</div>
						</form>
						<br />					
					</div>
				</div>
			</div>
			<br/>
			<br/>
			<br/>
			<br/>
		</section>
	</div>
	<br />
	<br />';	
	}
	
	else if(strpos($link , 'Verification')){
		
		echo '<script>
					var string = window.location.href;
					string=string.split("=").pop();
					alert(string);
					//document.getElementById("valueofvalue").value = string;
			  </script>';
		echo '
	<div class="container-fluid">
	<!-- Intro Section -->
		<section id="intro" class="services-section" style="height:100%; background-image: url(images/shop_shopping_people_stock_57077_1920x1200.jpg); height:900px;">
			<br/>
			<div class="row">
				<div class="col-md-4 col-sm-5 col-xs-6 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" style="background-color:#FFFFFF;box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);background-color:#FFFFFF; border-bottom:thin; border-radius: 10px; height:100%;">
					<div class="col-md-12 col-lg-12"> <br /><b>VERIFICATION</b>
					</div>
					<div class="col-md-12 col-lg-12">
						<br />
						<form class="form-horizontal" action="phpscripts\verify.php" autocomplete="on" method="post">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                         Verification Code</label>
                                    <div class="col-sm-10">
										<input class="form-control" type="hidden" id= "valueofvalue"name="user_id" value="">
                                        <input class="form-control" name="verify" required="required" type="text" placeholder="Verification Code" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-primary btn-sm" type="submit" value="Submit"></input>
                                    </div>
                                </div>
                        </form>
						<br />					
					</div>
				</div>
			</div>
			<br/>
		</section>
	</div>
	<br />
	<br />';	
	}

	else if(strpos($link , 'ForgotPassword')){
		
		echo '
	<div class="container-fluid">
	<!-- Intro Section -->
		<section id="intro" class="services-section" style="height:100%; background-image: url(images/shop_shopping_people_stock_57077_1920x1200.jpg); height:900px;">
			<br/>
			<div class="row">
				<div class="col-md-4 col-sm-5 col-xs-6 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" style="background-color:#FFFFFF;box-shadow: 0 10px 10px 0 rgba(0,0,0,0.5);background-color:#FFFFFF; border-bottom:thin; border-radius: 10px; height:100%;">
					<div class="col-md-12 col-lg-12"> <br /><b>FORGOT PASSWORD</b>
					</div>
					<div class="col-md-12 col-lg-12">
						<br />
						<form class="form-horizontal" action="phpscripts\forgotpassword.php" autocomplete="on" method="post">
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">
                                         Email Id</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="email" required="required" type="text" placeholder="Email Id" />
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="col-sm-2 col-sm-offset-5">
                                        <label for="OR" class="col-sm-3 control-label">OR</label>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="contact" class="col-sm-3 control-label">
                                         Contact No.</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="contact" required="required" type="text" placeholder="Contact No." />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-primary btn-sm" type="submit" value="Submit"></input>
                                    </div>
                                </div>
                        </form>
						<br />					
					</div>
				</div>
			</div>
			<br/>
		</section>
	</div>
	<br />
	<br />';	
	}
	
	else{
		echo '  
	<div class="container-fluid">
	<!-- Intro Section -->
		<section id="intro" class="services-section">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div id="carousel1" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						  <li data-target="#carousel1" data-slide-to="0" class="active"></li>
						  <li data-target="#carousel1" data-slide-to="1"></li>
						  <li data-target="#carousel1" data-slide-to="2"></li>
						  <li data-target="#carousel1" data-slide-to="3"></li>
						  <li data-target="#carousel1" data-slide-to="4"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
						  <div class="item active"><img class="img-responsive" src="images/car1.jpg" alt="First slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img class="img-responsive" src="images/car2.jpg" alt="Second slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img  class="img-responsive" src="images/car3.jpg" alt="Third slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img  class="img-responsive" src="images/car4.jpg" alt="Third slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>
						  <div class="item"><img class="img-responsive" src="images/car5.jpg" alt="Third slide image" class="center-block" style="width:100%;height:100%; display: block;">
						  </div>                            
						</div>
						<a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12" style="overflow:hidden;" align="left">
							<b>SHOP BY</b>
						</div>
						<div class="col-md-12 col-sm-4 col-xs-12" style="overflow:hidden;margin-top: 3%;">
							<a href="index.php?Men">
								<img class="img-responsive" src="images/K0030_Home-Top-Banner-Mens-27032017_desktop_1490613667545.jpg">
							</a>
						</div>
						<div class="col-md-12 col-sm-4 col-xs-12" style="overflow:hidden;margin-top: 4%;">
							<a href="index.php?Women">
								<img class="img-responsive" src="images/K0031_Home-Top-Banner-Women-27032017_desktop_1490613628248.jpg">
							</a>
						</div>
						<div class="col-md-12 col-sm-4 col-xs-12" style="overflow:hidden;margin-top: 4%;">
							<img class="img-responsive" src="images/K0029_Home-Top-Banner-Kids-27032017_desktop_1490613691828.jpg">
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<br />
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12" style="overflow:hidden;margin-top: 1%;">
							<img class="img-responsive" src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12" style="overflow:hidden;margin-top: 1%;">
							<img class="img-responsive" src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12" style="overflow:hidden;margin-top: 1%;">
							<img class="img-responsive"src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12" style="overflow:hidden;margin-top: 1%;">
							<img class="img-responsive" src="images/sunglasses-banner.jpg" style="width:100%;height:100%;">
						</div>                
					</div>
				</div>
			</div>
			<br />
			<hr />
		</section>
	
		<!--section id="parallax" class="about-section" style="height:500px;">
			<div class="row">
				<div class="container">
					<div class="row">
		
					</div>
				</div>
			</div>
		</section-->
		
		<section id="" class="services-section">
			<br/>
			<div class="row">
				<div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12">
					<div class="row">
						<div class="col-md-6 col-xs-12 col-sm-6">
							<div class="row">
								<div class="col-md-12 col-xs-12 col-sm-12"  style=" overflow:hidden">
									<img class="img-thumbnail img-responsive" src="images/R6733_Home_Promotional-Offer-1_Reebok-New-Arrivals_27032017_desktop_1490589956247.jpg">
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-12 col-xs-12 col-sm-12"  style=" overflow:hidden">
									<img class="img-thumbnail img-responsive" src="images/K0025_Home_Promotional-Offer-2_Next-New-Arrival_27032017_desktop_1490605690180.jpg">
								</div>           
							</div>             
						</div>
						<div class="col-md-6 col-xs-12 col-sm-6">
							<div class="row">
								<div class="col-md-12 col-xs-12 col-sm-12"  style=" overflow:hidden">
									<img class="img-thumbnail img-responsive" src="images/K0024_Home_Promotional-Offer-3_W-New-Arrival_27032017_desktop_1490605607815.jpg">
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-12 col-xs-12 col-sm-12"  style=" overflow:hidden">
									<img class="img-thumbnail img-responsive" src="images/R6669_Home_Promotional-Offer-4_Tiktauli-New-Arrivals_21032017_desktop_1490084618425.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
			<br />
		</section>
		
		<section id="" class="services-section">
			<hr/>
			<br/>
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
					<div class="row">
						<div class="col-md-6 col-xs-12 col-sm-6">
							<div class="row">
								<div class="col-md-12 col-xs-12 col-sm-12"  style=" overflow:hidden">
									<img class="img-thumbnail img-responsive" src="images/K0027_Home-Fashion-Trends-Mens_27032017_desktop_1490613259322.jpg">
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-12 col-sm-12 col-sm-12">
									<div class="row">
										<div class="col-md-12 col-sm-12 col-sm-12">
											<h4>Hippy Oasis</h4>
										</div>
										<div class="col-md-12 col-sm-12 col-sm-12">
											<p>Immerse yourself in vintage basics like tropical print shirts, light denim and 3/4ths to master the hippie style</p>
										</div>
									</div>
								</div>
							</div>             
						</div>
						<div class="col-md-6 col-xs-12 col-sm-6">
							<div class="row">
								<div class="col-md-12 col-xs-12 col-sm-12"  style=" overflow:hidden">
									<img class="img-thumbnail img-responsive" src="images/K0028_Home-Fashion-Trends-Women_27032017_desktop_1490613543768.jpg">
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-12 col-sm-12 col-sm-12">
									<div class="row">
										<div class="col-md-12 col-sm-12 col-sm-12">
											<h4>Hippy Oasis</h4>
										</div>
										<div class="col-md-12 col-sm-12 col-sm-12">
											<p>Immerse yourself in vintage basics like tropical print shirts, light denim and 3/4ths to master the hippie style</p>
										</div>
									</div>
								</div>                            
							</div>
						</div>
					</div>
				</div>
			</div> 
			<br />
			<hr>
		</section>    
	
		<!-- About Section -->
		<!--section id="about" class="services-section">
			<br/>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
					<div class="row">
			   
						<div class="col-lg-12">
							<h1 class="page-header" style="color:#000000;">Who we are?</h1>
							<p style="color:#000000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
						</div>
		
						<div class="row">
							<div class="col-sm-6 col-md-3 col-xs-12">
								<div class="thumbnail">
								  <img src="images/600x400.png" alt="about us page design using bootstrap">
								   <img class="team-pic" src="images/place.png">
								  <div class="caption">
									<h3>Member Name</h3>
									<p class="card-description">A customized about us page design using bootstrap framework, HTML and CSS.</p>
								  </div>
								</div>
							</div>
							
							<div class="col-sm-6 col-md-3 col-xs-6">
								<div class="thumbnail">
								  <img src="images/600x400.png" alt="about us page design using bootstrap">
								   <img class="team-pic" src="images/place.png">
								  <div class="caption">
									<h3>Member Name</h3>
									<p class="card-description">A customized about us page design using bootstrap framework, HTML and CSS.</p>
								  </div>
								</div>
							</div>
							  
							<div class="col-sm-6 col-md-3 col-xs-6">
								<div class="thumbnail">
								  <img src="images/600x400.png" alt="about us page design using bootstrap">
									<img class="team-pic" src="images/place.png">
								  <div class="caption">
									<h3>Member Name</h3>
									<p class="card-description">A customized about us page design using bootstrap framework, HTML and CSS.</p>
								  </div>
								</div>
							</div>
							  
							<div class="col-sm-6 col-md-3 col-xs-6">
								<div class="thumbnail">
								  <img src="images/600x400.png" alt="about us page design using bootstrap">
								   <img class="team-pic" src="images/place.png">
								  <div class="caption">
									<h3>Member Name</h3>
									<p class="card-description">A customized about us page design using bootstrap framework, HTML and CSS.</p>
								  </div>
								</div>
							</div>
						</div>          
					</div>
				</div>
			</div>
			<br />
			<hr>
		</section-->
	
		<!--section id="contact" class="services-section" style="width:100%;">
			<br/>
			<div class="container">
				<div class="row">
						<div class="col col-md-12">
							<h1 style=" color:#000000;">CONTACT US</h1><br><br><br>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="">
								<h3 style="line-height:20%;color:#000000"><i class="fa fa-home fa-1x" style="line-height:6%;color:#000000"></i>Lorem ipsum dolor sit amet</h3>               
								<p style="margin-top:6%;line-height:35%;color:#000000">Lorem ipsum dolor sit amet</p>
								<br />
								<br />
								<h3 style="line-height:20%;color:#000000"><i class="fa fa-envelope fa-1x" style="line-height:6%;color:#000000"></i>Lorem ipsum dolor sit amet</h3>
								<p style="margin-top:6%;line-height:35%;color:#000000">Lorem ipsum dolor sit amet@birisi.com</p>
								<br />
								<br />
								<h3 style="line-height:20%;color:#000000"><i class="fa fa-user fa-1x" style="line-height:6%;color:#000000"></i>Lorem ipsum dolor sit amet</h3>
								<p style="margin-top:6%;line-height:35%;color:#000000">Lorem ipsum dolor sit amet</p>
								<br />
								<br />
								<h3 style="line-height:20%;color:#000000"><i class="fa fa-yelp fa-1x" style="line-height:6%;color:#000000"></i>Lorem ipsum dolor sit amet</h3>
								<p style="margin-top:6%;line-height:35%;color:#000000"><a href="siteadresi.com/destek">Lorem ipsum dolor sit amet</a></p>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96690.80542089987!2d29.864461132544537!3d40.77109282810726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb4f66644bfb9d%3A0x82690ee7586b7eb9!2zxLB6bWl0LCBLb2NhZWxp!5e0!3m2!1str!2str!4v1480782606579" width="565" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
				</div>
			</div>
			<br />
		</section-->
	</div>
	<br />
	<br />';
	}

	if(isset($_GET['error']))
	{
		echo'<script>alert('.$_GET['error'].');</script>';
	}

	include 'phpscripts/footer.php';
?>
	
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.easing.min.js"></script> 
<script src="js/bootstrap-spinner.js"></script>
<script src="js/search.js"></script>
<script src="js/bootstrap-spinner.js"></script>
<script>
function validateForm() {
	var a = document.forms["register"]["cno"].value;
	if(a==''){
			alert("Enter phone number");
			return false;
		}
	else if(a.length != 10){
			alert("Enter 10 digit number");
			return false;
		}
	else{
			return true;
		}
}
</script>
<script>
jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });
	document.getElementById("valueofvalue").value = string;
});
</script>
</body>

</html>
