<?php
require "config/constants.php";
session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Eco Ways</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" href="style.css">
		
		
	</head>
	<body>	
		<!--class for background image-->
		<div class="mainImg">
		
			<!--Include the head.php file with the navigation bar-->
			<?php include"head.php"?>
			
			
			<!--Container to store brands and types of products-->
			<div class="container-fluid">
					<div class="row">

							<div class="col-md-3 col-xs-12">
							<!--Display categories here-->
									<div id="get_category">
									</div>
									<!--Display types here-->
									<div id="get_brand">
									</div>
									
							</div>
							
							<!--Panel with actual products in -->
							<div class="col-md-9 col-xs-12">
									<div class="row">
										<div class="col-md-12 col-xs-12" id="product_msg">
										</div>
									
									<div class="panel panel-info">
											<div class="panel-heading">Products</div>
											<div class="panel-body">
													<div id="get_product">
															<!--fetch and display the code and products here-->
													</div>
													<
											</div>
											<div class="panel-footer">&copy;Eco ways 2022</div>
									</div>
									</div>
							<div class="col-md-1"></div>
							
							</div>
					</div>
			</div>
		</div>
	
    </body>
	<?php include "foot.php"?>
</html>






