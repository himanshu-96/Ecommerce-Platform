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
</head>

<body>
<?php
	include 'phpscripts/navbar.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-lg-12 col-sm-12">
<?php
			if(strpos($_SERVER['QUERY_STRING'], 'Women') !== false){
				echo '<img class="img img-responsive" src="images/SL-women-accessories.jpg">';
			}
			else{
				echo '<img class="img img-responsive" src="images/NEW-Header-Images-1600x200-Sales-and-Specials_2048x.jpg">';
			}
?>		
		</div>
	</div>
	<br>
	<ol class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<?php
			if(strpos($_SERVER['QUERY_STRING'], 'Women') !== false){
				echo '<li><a href="index.php?Women">Women</a></li>';
			}
			else{
				echo '<li><a href="index.php?Men">Men</a></li>';
			}

			if(strpos($_SERVER['QUERY_STRING'], 'Apparel') !== false){
				echo '<li class="active">Apparel</li>';
			}
			else{
				echo '<li class="active">Accessories</li>';
			}
		?>
	</ol>
	<hr>

	<div class="row">
		<div class="col-md-2 col-sm-2 col-xs-12" id="sidebar" style="border-style: solid;border-color:#ccc;border-width: 0px 1px 0px 0px;">
			<div class="row">
				<div class="col-md-12 col-xs-12 col-sm-12" style="padding-left:10%;padding-right:10%;">
					<?php
						include 'phpscripts/filter.php';
					?>
				</div>
			</div>
		</div>
		<div class="col-md-10 col-sm-10 col-xs-12" id="mainContent">
		</div>
	</div>

</div>
<br/>
<br/>

<?php
	include 'phpscripts/footer.php';
?>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/filter.js"></script>
<script src="js/search.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap-spinner.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script>
jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });
});
</script>
<script>
jQuery(document).ready(function(){
    var string = window.location.href; 
	string=string.split("/").pop();
	string=string.replace("%20"," ");
	document.getElementById(string).click();
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
</body>
</html>
