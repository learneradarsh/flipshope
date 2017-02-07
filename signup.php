<!DOCTYPE html>
<html>
<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>Flipshope || SignUp</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="YOURStore - Responsive HTML5 Template">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="favicon.ico">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- External Plugins CSS -->
		<link rel="stylesheet" href="external/slick/slick.css">
		<link rel="stylesheet" href="external/slick/slick-theme.css">
		<link rel="stylesheet" href="external/magnific-popup/magnific-popup.css">
		<link rel="stylesheet" href="external/nouislider/nouislider.css">
		<link rel="stylesheet" href="external/bootstrap-select/bootstrap-select.css">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="external/rs-plugin/css/settings.css" media="screen" />
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="font/style.css">
		<!-- Head Libs -->
		<!-- Modernizr -->
		<script src="external/modernizr/modernizr.js"></script>
	</head>
	<body>
	    <?php include_once 'includes/product_header.php'; ?> 
		<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">LOGIN OR CREATE AN ACCOUNT</h1>
				</div>
				<!-- /title -->		
				<div class="row">
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xl-offset-2">
						 <div class="login-form-box">
						 	 <h3 class="color small">NEW CUSTOMER</h3>
				             <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				            <br>
				            <button class="btn btn--ys btn--xl" onclick="location.href='#';"><span class="icon icon-person_add"></span>CREATE AN ACCOUNT</button>
						 </div>
					</section>
					<div class="divider divider--md visible-sm visible-xs"></div>
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
						<div class="login-form-box">
							<h3 class="color small">RETURNING CUSTOMER</h3>
							<p>
								If you have an account with us, please log in.
							</p>
				              <form action="#" id="form-returning">
				                <div class="form-group">
				                  <label for="email">Email Address <sup>*</sup></label>
				                  <input type="email" class="form-control" id="email">
				                </div>
				                <div class="form-group">
				                  <label for="password">Password <sup>*</sup></label>
				                  <input type="password" class="form-control" id="password">
				                </div>
				                <div class="row">
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<button type="submit" class="btn btn--ys btn-top btn--xl" onclick="document.getElementById('form-returning').submit();"><span class="icon icon-vpn_key"></span>Login</button>			               			
				                	</div>
				                	<div class="divider divider--md visible-xs"></div>
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<div class="pull-right note btn-top">* Required Fields</div>
				                	</div>
				                </div>			               			                
				                <p class="btn-top">
		               				<a class="link-color" href="#">Forgot Your Password?</a>
		               			</p>
				              </form>
						</div>
					</section>
				</div>						
			</div>
		</div>
		<!-- End CONTENT section --> 
		<?php include_once 'includes/footer.php'; ?>
	</body>
</html>