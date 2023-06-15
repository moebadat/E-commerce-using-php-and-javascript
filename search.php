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
		<style>
			
		</style>
	</head>
	<body>	
		<!--start of navigation bar that spans the whole screen-->
		<div class="mainImg">
		<?php include"head.php"?>
			
			<div class="container">
				<div class="row">
				
					
					<div class="col-md-6-offset-3">	
						<div class="panel panel-info">
							<div class="panel-heading">Products</div>
							<div class="panel-body">
								<div id="get_product">
									<!--Here we get product jquery Ajax Request-->
								</div>
							
							</div>
						<div class="panel-footer">&copy; 2016</div>
						</div>
					</div>
				<div class="col-md-1"></div>
				</div>
			</div>
		</div>

 
	</body>	
</html>