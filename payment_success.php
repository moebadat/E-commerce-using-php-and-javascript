
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ECO WAYS</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		table tr td {padding:10px;}
	</style>
</head>
	<body>
		<!--Class for background image-->
	<div class="mainImg">
		<!--Include the head.php file with the navigation bar-->
        <?php include"head.php"?>

			<!--container to store panel that houses the success  message-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 col-sm-4"></div>
					<div class="col-md-8 col-sm-12">
						<!--start of panel-->
						<div class="panel panel-default">
							<div class="panel-heading"></div>
							<div class="panel-body">
								<!--start of message-->
								<h1>Thankyou </h1>
								<hr/>
								<!--$_SESSION["name"], prints out the customers name-->
								<p>Hello <?php echo "<b>".$_SESSION["name"]."</b>"; ?>,Your payment process is 
								successfully completed and your Transaction id is <b><?php echo $trx_id; ?></b><br/>
								you can continue your Shopping <br/></p>
								<a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
			<div class="row successspan"></div>
    </body>
	<?php include "foot.php"?>
	</div>
</html>

			





























