<?php
#If user is logged in then restrict this page
if (isset($_SESSION["uid"])) {
	header("location:index.php");
}

if (isset($_POST["login_user_with_product"])) {
	//product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and naming it
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
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
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<!--Class for background image-->
		<div class="mainImg">
			<div class="wait overlay">
				<div class="loader"></div>
			</div>
				<!--full screen container to store the login form-->
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8" id="signup_msg">
							<!--display validation alerts -->
						</div>
						<div class="col-md-2"></div>
					</div>
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<!--panel to store the login form-->
							<div class="panel panel-primary">
								<div class="panel-heading">Customer Login Form</div>
								<div class="panel-body">
									<!--User Login Form-->
									<!--when form is submitted, "login" will be passed, which will trigge a jquery function to validate the login details in a php file-->
									<form onsubmit="return false" id="login">
										<!--login form fields start here-->
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<!--sumbit input button-->
										<a href="#" style="color:#333; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;" Value="Login">
										<!--If user dont have account, they can click here to be directed to 
											 registration page-->
										<div><a href="customer_registration.php?register=1">Register</a></div>						
									</form>
							</div>
							<div class="panel-footer"><div id="e_msg"></div></div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		<div class="row loginspan"></div>
	</body>
		<?php include "foot.php"?>
		</div>
</html>






















