<?php
//require "config/constants.php";

session_start();
//if user is not logged in, log in first
if(!isset($_SESSION["uid"])){
	header("location:login_form.php");
}
?><!DOCTYPE html>
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
		<!--class for background image-->
		<div class="mainImg">
			<!--Include the head.php file with the navigation bar-->
			<?php include"head.php"?>

				<!--container to store panel with customer order deails-->
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="panel panel-default">
								<div class="panel-heading"></div>
								<div class="panel-body">
									<h1>Customer Order details</h1>
									<hr/>
									<?php
									/*php code to match the user with an order and then retrieve details related to that order*/
										include_once("db.php");
										$user_id = $_SESSION["uid"];
										$orders_list = "SELECT o.order_id,o.user_id,o.product_id,o.qty,o.trx_id,o.p_status,p.product_title,p.product_price,p.product_image FROM orders o,products p WHERE o.user_id='$user_id' AND o.product_id=p.product_id";
										$query = mysqli_query($con,$orders_list);
										if (mysqli_num_rows($query) > 0) {
											while ($row=mysqli_fetch_array($query)) {
												?>
												<!--Below is a table to store and display the datils fetch in the above php code-->
													<div class="row">
														<div class="col-md-6">
															<img style="float:right;" src="product_images/<?php echo $row['product_image']; ?>" class="img-responsive img-thumbnail"/>
														</div>
														<div class="col-md-6">
															<table>
																<tr><td>Product Name</td><td><b><?php echo $row["product_title"]; ?></b> </td></tr>
																<tr><td>Product Price</td><td><b><?php echo  CURRENCY." ".$row["product_price"]; ?></b></td></tr>
																<tr><td>Quantity</td><td><b><?php echo $row["qty"]; ?></b></td></tr>
																<tr><td>Transaction Id</td><td><b><?php echo $row["trx_id"]; ?></b></td></tr>
															</table>
														</div>
													</div>
												<?php
											}
										}
									?>
									
								</div>
								<div class="panel-footer"></div>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			<div class="row c_orderspan"></div>
    </body>
	<?php include "foot.php"?>
	</div>
</html>
















































