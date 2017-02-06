<!DOCTYPE html>
<html>
<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>Flipshope || FeedBack</title>
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
			<form method="" action="">
			<div class="container">
			<h3>Give Us Your Precious FeedBack</h3>
				<div class="form-group">
					<label>How satisfied were you with our Extension ?</label><br/>
					<input type="radio" name="pointforexten" value="1"/> 1<br/>
					<input type="radio" name="pointforexten" value="2"/> 2<br/>
					<input type="radio" name="pointforexten" value="3"/> 3<br/>
					<input type="radio" name="pointforexten" value="4"/> 4<br/>
					<input type="radio" name="pointforexten" value="5" checked="checked"/> 5
				</div>
				<div class="form-group">
					<label>How relevant and helpful do you think it was for your shopping</label><br/>
					<input type="radio" name="pointshop" value="1"/> 1<br/>
					<input type="radio" name="pointshop" value="2"/> 2<br/>
					<input type="radio" name="pointshop" value="3"/> 3<br/>
					<input type="radio" name="pointshop" value="4"/> 4<br/>
					<input type="radio" name="pointshop" value="5" checked="checked"/> 5
				</div>
				<div class="form-group">
					<label>FeedBack Type</label><br/>
					<input type="radio" name="pointcomm" value="1"/>Comments<br/>
					<input type="radio" name="pointqstion" value="2"/> Questions<br/>
					<input type="radio" name="pointbugreport" value="3"/> Bug Reports<br/>
					<input type="radio" name="pointfeature" value="4"/> Feature Request
				</div>
				<div class="form-group">
					<label>FeedBack</label>
					<textarea rows="8" cols="15" name="why" id="why" class="form-control" placeholder="Give Us Your FeedBack Here...."></textarea>
				</div>
				<div class="form-group">
					<label>Suggestions for improvement</label>
					<textarea rows="8" cols="15" name="soi" id="soi" class="form-control" placeholder="Your Answer"></textarea>
				</div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" placeholder="Enter your Name" name="name" id="name" /> 
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" placeholder="Enter your Email" name="email" id="email" /> 
				</div>
				<p><button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button></p>
			</div>
			</form>
		</div>
		<!-- End CONTENT section --> 
		<?php include_once 'includes/footer.php'; ?>

	</body>

</html>