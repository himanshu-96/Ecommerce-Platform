<?php
	session_start();
	error_reporting(0);
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
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libaaz&reg;</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <!-- Custom CSS -->
    <link href="css/yamm.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesproddisp.css" />    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
<?php
		include 'phpscripts/navbar.php';
?>
<div class="container-fluid">	
    <div class="row">
        <div class="col col-md-8">
            <div id="carousel1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel1" data-slide-to="1"></li>
                      <li data-target="#carousel1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">    
                    <?php
                        include 'phpscripts/productdisplaycarousel.php';
                    ?>
                </div>
             </div>
             <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only"></span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only"></span></a>
        </div>
                
        <div class="col col-md-4">
            <?php
                include 'phpscripts/productdisplayinfo.php';		
            ?>        
        </div>
	</div>
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="col-lg-12">        
        	<b>Other Products:</b>
        </div>
        <div class="col-lg-12" id="carouseldisplay">        
        </div>
	</div>
    <div class="row">
		<div class="col-lg-10 col-md-10 col-sm-12">
        	<div class="row">
            	<div class="col-md-12 col-sm-12 col-xs-12" style="padding:2%;">
		  			<h3>Product Reviews</h3>
            		<br>
                    <button class="btn btn-link" href="#myDiv1" style="align-content:right;">+ Show more Reviews</button>
		  		</div>
            	<div class="col-lg-12 col-md-12 col-sm-12" id="myDiv1" style="height: 500px;overflow: hidden;">
                    <div class="row">
						<div class="col-md-12 col-lg-12 col-sm-12" style="max-height: 1000px; overflow-y: scroll; overflow-x: hidden;">
							<?php
                                include 'phpscripts/reviews.php';
                            ?>
                    	</div>
                    </div>
            	</div>
		  	</div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
        </div>
    </div>
</div>

<br/>
<br/>


<?php
	include 'phpscripts/footer.php';
?>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/search.js"></script>
<script>
	$(document).ready(function() {
    	$("#cart").click(function(event) {		
			
			var data = event.target.type;
			var add = add;
			var size = event.target.rel;
			var quantity = document.getElementById("input_id").value;
			
		
			$.ajax({
				type: "GET",
				url: "cart.php",
				data: {product_id:data,action:add,size:size,quantity:quantity},
				success: function(){
						alert("Product Added to Cart");
						window.location.reload();
				}
			});
		});
    });
</script>	
<script>
	$(document).ready(function() {
    				var string = window.location.href;
					string=string.split("=").pop();
					alert(string);
    });
</script> 	
<script>
	$(document).ready(function() {
    	$("#fav").click(function(event) {
		
			var data = event.target.type;
			var add = add;
			var size = event.target.rel;
			var quantity = document.getElementById("input_id").value;
			
			$.ajax({
				type: "GET",
				url: "cart.php",
				data: {fav_product_id:data,fav_action:add,fav_size:size,fav_quantity:quantity},
				success: function(){
						alert("Product Added to Fav");
						window.location.reload();
					}
				});
			});
    });
</script>
<script src="js/jquery.easing.min.js"></script>
<script>
jQuery(document).ready(function(){

    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });
	
	var approach=1;
	$.ajax({
       	type: "POST",
       	url: "phpscripts/displaymultiplecarousel.php",
       	data: {approach:approach},
		success: function(data){
			$('#carouseldisplay').html(data);	
		}
    });	
	
});
</script>
<script>
$("button").click(function(e) {
    toggleDiv($(this).attr('href'));
    e.preventDefault();
});

function toggleDiv(selector) {
    var $this = $(selector);
    
    //Close div, if open.
    if($this.hasClass('open'))
    {
        var originalHeight = $this.data('height');
        $this.animate({
                height: originalHeight},
                200,
                function() { $(this).removeClass('open'); });
        return false;
    }
    
    //Open the div
    var currentHeight =  $this.height();
        autoHeight = $this.css('height', 'auto').height()
        $this.data('height', currentHeight)
             .height(currentHeight).animate({
              	height: autoHeight},
                200,
   function() { $(this).addClass('open'); });
}
</script>
<script src="js/review.js"></script>
</body>
</html>