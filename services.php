<?php
session_start();
require "config/constants.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"><!-- specify set of characters-->
		<title>Eco Ways</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" href="style.css">
		<style>
			
		</style>
		</head>
	<body>	
		<!--Class for background image-->
		<div class="mainImg">
			<!--Include the head.php file with the navigation bar-->
			<?php include"head.php"?>
				
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
				<div class="row servicespan"></div>
		</div>
	</body>
	<?php include "foot.php"?>
</html>