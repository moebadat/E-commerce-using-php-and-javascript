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

	<!--Container for about section-->
		<div class="container">
			<div class="row">
						   <!--start of about section-->
						   <div class="about">
						   <!-- add and position 4 grids on right-->
								<div class="col-lg-4 col-md-4 col-sm-12">
								<img src="https://www.annecohenwrites.com/wp-content/uploads/2019/03/Benefits-of-an-Eco-Friendly-Lifestyle.jpg" class="img-fluid">
								
								</div>
							   <!--add and position a heading and a paragraph for the image, 7grids wide from the left-->
							   <div class="col-lg-7 col-md-7 col-sm-12- desc">
								 
								<h3>ECO WAYS</h3>
								<p>
								   Eco Ways is a small-sized business based in London, the company that prides itself on providing customers with products that are totally Eco-friendly. Where we lack in size, we make up for in product quality and customer service. years of experience means that we have formed close bonds with our suppliers, thus we can garuantee our customers that products that do not harm the environment in any way, this includes during their production, use and disposal. Our  goal is to provide customers with products that are not only eco-friendly but also of the best quality.
								</p>
								</div>
							</div>
			</div>
		</div>
		<div class="row aboutspan"></div>
	
	</body>
	<?php include "foot.php"?>
	</div>
</html>