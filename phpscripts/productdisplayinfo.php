<?php

			$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
			if(!$conn)
			{
				die("Connection Failed: ".mysql_connect_error());
			}
			
			if(isset($_GET['i'])){
				$pid = urldecode(base64_decode($_GET['i']));
				$sql="Select * from product_name
					INNER JOIN product_brand on product_brand.product_id=product_name.product_id
					INNER JOIN product_category on product_category.product_id=product_name.product_id
					INNER JOIN product_size on product_size.product_id=product_name.product_id where product_name.product_id='$pid'";
				$result=$conn->query($sql);
	
				while($row=mysqli_fetch_assoc($result)){
					echo '
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<h1>'.$row['product_name'].'</h1>
						</div>
						<div class="col-md-12 col-xs-12">
							<h3>'.$row['product_brand'].'</h3>
						</div>
						<div class="col-md-12 col-xs-12">
							<p>'.$row['product_subbrand'].'</p>
						</div>
						<div class="col-md-12">
							<span class="label label-primary">'.$row['product_class'].'</span>
							<span class="label label-primary">'.$row['product_category'].'</span>
							<span class="label label-primary">'.$row['product_categorydescription'].'</span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h2 class="product-price">Price		₹ '.$row['price'].'</h2>
						</div>
					</div>
					<br>';
					
					if($row['product_class'] == 'APPAREL'){
						echo'
						<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12" id="sizes"> 
									<p>Sizes :
									<a class="btn btn-default" id="size" rel="XS" href="'.$_SERVER['PHP_SELF'].'?i='.urlencode(base64_encode($row['product_id'])).'&s='.urlencode(base64_encode(XS)).'" style="">XS</a>
									<a class="btn btn-default" id="size" rel="S" href="'.$_SERVER['PHP_SELF'].'?i='.urlencode(base64_encode($row['product_id'])).'&s='.urlencode(base64_encode(S)).'" style="">S</a>
									<a class="btn btn-default" id="size" rel="M" href="'.$_SERVER['PHP_SELF'].'?i='.urlencode(base64_encode($row['product_id'])).'&s='.urlencode(base64_encode(M)).'" style="">M</a>
									<a class="btn btn-default" id="size" rel="L" href="'.$_SERVER['PHP_SELF'].'?i='.urlencode(base64_encode($row['product_id'])).'&s='.urlencode(base64_encode(L)).'" style="">L</a>
									<a class="btn btn-default" id="size" rel="XL" href="'.$_SERVER['PHP_SELF'].'?i='.urlencode(base64_encode($row['product_id'])).'&s='.urlencode(base64_encode(XL)).'" style="">XL</a>
									<a class="btn btn-default" id="size" rel="XXL" href="'.$_SERVER['PHP_SELF'].'?i='.urlencode(base64_encode($row['product_id'])).'&s='.urlencode(base64_encode(XXL)).'" style="">XXL</a></p>
								</div>
						</div><br>';
					}
					
					echo'
					<div class="row">
							<div class="col-md-12 col-sm-12 col-lg-12">
								<p>Quantity : <input class="form-control" id="input_id" value="1" type="number"></p>
							</div>
					</div>
					<br>
					<div class="row" align="center">
						<a class="btn btn-default" id="cart" type="'.base64_encode($row['product_id']).'" rel="'.base64_encode(urldecode(base64_decode($_GET['s']))).'"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a>
						<a class="btn btn-default" id="fav" type="'.base64_encode($row['product_id']).'" rel="'.base64_encode(urldecode(base64_decode($_GET['s']))).'"><span class="glyphicon glyphicon-heart" style="color:red;"></span> Add to Favourites</a>
					</div><br>
					<div class="row">
							<div class="col-md-12">
								<div class="well well-sm">
									<div class="text-right">
										<a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
									</div>
								
									<div class="row" id="post-review-box" style="display:none;">
										<div class="col-md-12">
											<form accept-charset="UTF-8" action="" method="post">
												<input id="ratings-hidden" name="rating" type="hidden"> 
												<textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
								
												<div class="text-right">
													<br>
													<a class="btn btn-danger" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
													<span class="glyphicon glyphicon-remove"></span>Cancel</a>
													<button class="btn btn-success" type="submit">Save</button>
												</div>
											</form>
										</div>
									</div>
								</div> 
								 
							</div>			
					</div>';
				}
			}