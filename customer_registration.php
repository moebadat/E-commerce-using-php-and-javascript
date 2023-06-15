
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Khan Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	
	<body>
	<!--class for background image-->
		<div class="mainImg">
			<div class="wait overlay">
				<div class="loader"></div>
			</div>
				
				<!--row to display the alerts-->
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8" id="signup_msg">
							<!--Alert displayed here-->
						</div>
						<div class="col-md-2"></div>
					</div>
					
					<!--row to store the panel that contains the signup form-->
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<!--panel start here-->
							<div class="panel panel-primary">
								<div class="panel-heading">Customer SignUp Form</div>
								<div class="panel-body">
								<!--start of form-->
								<!--signup_for is used to trigger the jquery function to validate form and store detaols-->
								<form id="signup_form" onsubmit="return false">
									<div class="row">
										<!--start of the different field in the form-->
										<div class="col-md-6">
											<label for="f_name">First Name</label>
											<input type="text" id="f_name" name="f_name" class="form-control">
										</div>
										<div class="col-md-6">
											<label for="f_name">Last Name</label>
											<input type="text" id="l_name" name="l_name"class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label for="email">Email</label>
											<input type="text" id="email" name="email"class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label for="password">password</label>
											<input type="password" id="password" name="password"class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label for="repassword">Re-enter Password</label>
											<input type="password" id="repassword" name="repassword"class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label for="mobile">Mobile</label>
											<input type="text" id="mobile" name="mobile"class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label for="address1">Address Line 1</label>
											<input type="text" id="address1" name="address1"class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<label for="address2">Address Line 2</label>
											<input type="text" id="address2" name="address2"class="form-control">
										</div>
									</div>
									<p><br/></p>
									<div class="row">
										<div class="col-md-12">
											<!--for submit button-->
											<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
										</div>
									</div>
									
								</div>
								</form>
								<div class="panel-footer"></div>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
		</div>
	</body>
	<?php include "foot.php"?>
</html>






















