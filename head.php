	
        <!--start of navigation bar that spans the whole screen-->
		<div class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
		<!--navbar navbar-light bg-transparent-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
					
						<!--Create a button made of three icon bars the allow you to hide the navbar menu -->
						<div class="navbar-header">
							<button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
							<a href="#" class="navbar-brand">ECO WAYS</a>
						</div>
						
						<!--Assign the button created above to the collapsable navigation menu -->
						<div class="navbar-collapse collapse" id="mobile_menu">
						
							<!--navigation bar items right-->
							<ul class="nav navbar-nav">
									<li><a class="nav-link" href="index.php">HOME</a></li>
									<li><a class="nav-link" href="about.php">ABOUT</a></li>
									<li><a class="nav-link" href="categories.php">CATEGORIES</a></li>
									<li><a class="nav-link"href="services.php">SERVICES</a></li>
							</ul>
							
							<!--Search bar on navigation bar -->
							<ul class="nav navbar-nav">
								<li>
                                <form class="navbar-form navbar-left">
					                <div class="form-group">
		                                <input type="text" class="form-control" placeholder="Search" id="search">
		                            </div>
									    <!--submit button, "search_btn" makes a request to look and display the searched item -->
									    <button type="submit" class="btn btn-outline-warning btn-rounded btn-sm my-0" id="search_btn" >Search</button>   
		                        </form>
                                </li>
                            </ul>
							</ul>
							 
							<!--Left list in the navbar, that contains the cart and profile icons and are alligned right-->
							<ul class="nav navbar-nav navbar-right">
							
								<!--The cart item is added to the right-alinged list and is assigned a dropdown toggle feature and icon  -->
								<li><a class="nav-link"href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>CART<span class="badge">0</span></a>
								
									<!--Cart dropdown menu-->
									<div class="dropdown-menu" style="width:400px;">
										<div class="panel panel-success"><!--sizes menu accordingly (to context)-->
											
											<!--Create columns and headings for the dropdown menu-->
											<div class="panel-heading">
												<div class="row">
													<div class="col-md-3 col-xs-3">Sl.No</div>
													<div class="col-md-3 col-xs-3">Product Image</div>
													<div class="col-md-3 col-xs-3">Product Name</div>
													<div class="col-md-3 col-xs-3">Price in </div>
												</div>
											</div>
											
											<!--"cart_product" requests and fetches the product details from the database and html to be displayed here -->
											<div class="panel-body">
												<div id="cart_product">
												</div>
											</div>
											<div class="panel-footer"></div>
										</div>
									</div>
								</li>
						<!--if user is not logged in, display this profile option on the navbar -->
						<?php if(!isset($_SESSION["uid"])){  ?>
								<li><a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
									<!--Prop-down menu option on the navigation bar to show login form -->
									<ul class="dropdown-menu">
										<div style="width:300px;">
											<!--panel to store login form -->
											<div class="panel panel-primary">
												<div class="panel-heading">Login</div>
												<div class="panel-heading">
													<!--start of drop-down log-in form-->
													
													<!--id="login"  request the details to be validated and stored-->
													<form onsubmit="return false" id="login">
														<label for="email">Email</label>
														<input type="email" class="form-control" name="email" id="email" required/>
														<label for="email">Password</label>
														<input type="password" class="form-control" name="password" id="password" required/>
														<p><br/></p>
														<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
														<p></p>
														Dont yet have an account?
														<!--if customer needs to register, direct to register form -->
														<a href="customer_registration.php" style="color:white; list-style:none;">Register</a
													</form>
												</div>
												<div class="panel-footer" id="e_msg"></div>
											</div>
										</div>
									</ul>
								</li>
								
								<!--if user is logged in, display this profile option on the navbar -->
								<?php } else { ?>
								<!--Second item (profile) of the right aligned list in the navbar is assigned a dropdown toggle feature and icon-->
									<li><a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span><?php echo 'Hi,'.$_SESSION['name']; ?></a>
									
									<!--Profile doropdown menu with options to direct you elsewhere-->
										<ul class='dropdown-menu'>
											<li><a href='cart.php' style='text-decoration:none; color:grey;'><span class='glyphicon glyphicon-shopping-cart'>CART</a></li>
											<li class='divider'</li>
											<li><a href='customer_order.php' style='text-decoration:none; color:green;'>Orders</a></li>
											<li class='divider'></li>
											<li><a href='' style='text-decoration:none; color:green;'>Change Password</a></li>
											<li class='divider'></li>
											<!--clicking here will log the user out -->
											<li><a href='logout.php' style='text-decoration:none; color:green;'>Logout</a></li>
										</ul>
											</li>
									
									<?php } ?>
							</ul>
						</div>
							
					</div>
				</div>
			</div>
		</div>
	
			
