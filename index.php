<?php
require "config/constants.php";
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Eco ways</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
	<body>
		<!--Class for background image-->
		<div class="mainImg">
			<!--Include the head.php file with the navigation bar-->
			<?php include"head.php"?>
					<!--header section on homepage-->
					<header class="header">
						<!--Jumbotron header section-->
						<div class="jumbotron jumbotron-fluid">
						
								<!--container inside jumbotron to store text-->
							  <div class="container">
								<h1>ECO-FRIENDLY PRODUCTS</h1>
								<p class="jumbP">PRODUCTS THAT ARE SAFE FOR OUR ENVIRONMENT</p>
									<!--Jview products link-->
									<div class="link">
									<a class="jumbLink" href="categories.php">View Products</a>
									</div>
							  </div> 
						</div>
					 </header>
					 
					 <!--about section on home page containing an image, a heading and and information about the company-->
					 <div class="row about">
						   
						   
								<div class="col-lg-4 col-md-4 col-sm-12">
								<img src="https://www.annecohenwrites.com/wp-content/uploads/2019/03/Benefits-of-an-Eco-Friendly-Lifestyle.jpg" class="img-fluid">
								
								</div>
							   
							   <div class="col-lg-7 col-md-7 col-sm-12- desc">
								 
								<h3>ECO WAYS</h3>
								<p>
								   Eco Ways is a small-sized business based in London, the company that prides itself on providing customers with products that are totally Eco-friendly. Where we lack in size, we make up for in product quality and customer service. years of experience means that we have formed close bonds with our suppliers, thus we can garuantee our customers that products that do not harm the environment in any way, this includes during their production, use and disposal. Our  goal is to provide customers with products that are not only eco-friendly but also of the best quality.
								</p>
								</div>
							
						</div>
						
						<!--navigation tiles to navigate to site content-->
						<!--container to store the navigation tiles-->
						<!--start of navigation section-->
						<div class="container-fluid">
						
							<!--row to store the heading-->
							<div class="row">
								<div class="col-md-12">
								<div class="tile_heading">
								  <h1><strong>Navigation</strong></h1>
								</div>
								</div>
							</div>
							<!--separate row to store the tiles-->
							<div class="row tiles">
								<!--1st tile-->
								<div class="col-sm-4">
								  <div class="tile_title">
									<h3 class="title">Categories</h3>
									<p><a href="categories.php">Browse our different categories.</a></p>
								  </div>
								</div>
								<!--2nd tile-->
								<div class="col-sm-4">
								  <div class="tile_title">
									<h3 class="title">On Special</h3>
									<p><a href="categories.php">View all our specials.</a></p>
								  </div>
								</div>
								<!--3rd tile-->
								<div class="col-sm-4">
									  <div class="tile_title">
										<h3 class="title">Popular</h3>
										<p><a href="categories.php">See what products our customers love.</a></p>
									  </div>
								</div>
							</div>
						</div>
						
							<!--Start of content tiles section-->
						  
							<!--container to store content tiles-->
							<div class="container">
							  <div class="row contentTilesRow">
								<!--class for cont tiles header, for css editing-->
								<div class="contentTileHead col-sm-12">
								  <h4>What do we offer?</h4>
								  <p>Here at delivery guys, we offer our customers a wide range of different products and now we also provide customers with multiple purchasing options</p>
								</div>
								<!--1st tile-->
								<div class="col-lg-4 col-sm-6">
								  <div class="item"> <span class="icon feature_box_col_one"></span>
									<h6>Grooming products</h6>
									<p>These are eco-friendly products that can be used to groom yourself, this includes everything from brushing your hair to cleaning your body.</p>
								  </div>
								</div>
								<!--2nd tile-->
								<div class="col-lg-4 col-sm-6">
								  <div class="item"> <span class="icon feature_box_col_two"></span>
									<h6>Clothing products</h6>
									<p>We offer a range of eco-friendly clothing and includes everything from hats to socks. All clothes are made from textiles which do harm the environment in any way.</p>
								  </div>
								</div>
								<!--3rd tile-->
								<div class="col-lg-4 col-sm-6">
								  <div class="item"> <span class="icon feature_box_col_three"></span>
									<h6>Lotion</h6>
									<p>We offer a range of different bosy lotions, all of which are totally dafe for the environment. Keep your body moisturized while also protecting the environment.</p>
								  </div>
								  <!--4th tile-->
								</div>
								<div class="col-lg-4 col-sm-6">
								  <div class="item"> <span class="icon feature_box_col_four"></span>
									<h6>Pet products</h6>
									<p>Our pets are a big part of our lives, we now offer pet products that are totally eco-friendly so you can now keep you pets happy and at the same time, protect the environment.</p>
								  </div>
								</div>
								<!--5th tile-->
								<div class="col-lg-4 col-sm-6">
								  <div class="item"> <span class="icon feature_box_col_five"></span>
									<h6>Travel products</h6>
									<p> Eco-ways now offers bags which are made of textiles that re totally-ecofriendly. You can no carry your items and protect the environment at the same time</p>
								  </div>
								</div>
								<!--6th tile-->
								<div class="col-lg-4 col-sm-6">
								  <div class="item"> <span class="icon feature_box_col_six"></span>
									<h6>Utensils</h6>
									<p>We all use utensile everyday. Thus, Eco Ways has decided to offer customers a range of different utensils. You can now protect the environement and eat nicely.</p>
								  </div>
								</div>
							  </div>
							</div>
						

				
						<!--start of home-page products section-->
						<!--home-page products sections header -->
						<div class="product_head">
						<div class=" col-md-offset-5">
							  <h4>Products</h4>
							</div>
							</div>
						<div class="row product_row">
							<div class="col-md-12">
							<!--panel to store the products-->
								<div class="panel-body">
									<div id="get_product">
										<!--display products here-->
										<!--"get_product" requests and fetches products and html to be displayed here-->
									</div>
								</div>
							</div>
						<div class="col-md-1"></div>
						</div>
		
	</body>
	<?php include "foot.php"?>
	</div>	
</html>
















































