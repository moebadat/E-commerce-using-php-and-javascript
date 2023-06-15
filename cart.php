<?php
require "config/constants.php";
session_start();
/*User must be logged in or else direct to log-in form*/
if(!isset($_SESSION["uid"])){
header("location:login_form.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ECO WAYS</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet"  href="style.css">
	</head>
<body>
<!--Class for background image-->
		<div class="mainImg">
		<!--Include the head.php file with the navigation bar-->
					<?php include"head.php"?>

						<!--container for the cart-->
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-2 col-sm-12 col-lg-2"></div>
								<div class="col-md-8 col-sm-12 col-lg-8" id="cart_msg">
								</div>
								<div class="col-md-2 col-sm-12 col-lg-2"></div>
							</div>
							<!--panel to store cart items-->
							<div class="row">
								<div class="col-md-2 col-sm-12 col-lg-2"></div>
								<div class="col-md-8 col-sm-12 col-lg-8">
									<div class="panel panel-primary">
									<!--panel heading-->
										<div class="panel-heading">Cart Checkout</div>
										<div class="panel-body">
											<div class="row">
											<!--column headings-->
												<div class="col-md-2 col-xs-2"><b>Action</b></div>
												<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
												<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
												<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
												<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
												<div class="col-md-2 col-xs-2"><b>Price in <?php echo CURRENCY; ?></b></div>
											</div>
											<!--fetch and display cart item here-->
											<div id="cart_checkout"></div>
										</div> 
									</div>
									<div class="panel-footer"></div>
								</div>
							</div>
							<div class="col-md-2"></div>
						</div>
		
		<script>var CURRENCY = '<?php echo CURRENCY; ?>';</script>
		<div class="row cartspan"></div>
	</body>	
		<?php include "foot.php"?>
		</div>
</html>
















		