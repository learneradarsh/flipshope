<!DOCTYPE html>
<html>
<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>Flipshope || Products</title>
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
				<!-- two columns -->
				<div class="row">
					<!-- left column -->
					<aside class="col-md-4 col-lg-3 col-xl-2" id="leftColumn">
						<a href="#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span>back</a>
						<div class="filters-block visible-xs">
							<div class="filters-row__select">
								<label>Sort by: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>Position</option>
										<option>Price</option>
										<option>Rating</option>
									</select>
								</div>
								<a href="#" class="sort-direction icon icon-arrow_back"></a> 
							</div>
							<div class="filters-row__select">
								<label>Show: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select>
								</div>
							</div>
							<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
						</div>
						<!-- shopping by block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">SHOPPING BY:</h4>
							<div class="collapse-block__content">
								<ul class="filter-list">
									<li> Color: <span>White</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
									<li> Size: <span>S</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
								</ul>
								<a class="btn btn--ys btn--sm btn--light">Clear All</a> 
							</div>
						</div>
						<!-- /shopping by block --> 
						<!-- category block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title ">WOMENS</h4>
							<div class="collapse-block__content">
								<ul class="expander-list">
									<li class="active">
										<a href="#">TOPS</a><span class="expander"></span>
										<ul>
											<li class="active"><a href="#">Blouses &amp; Shirts</a></li>
											<li><a href="#">Dresses</a></li>
										</ul>
									</li>
									<li>
										<a href="#">BOTTOMS</a><span class="expander"></span>
										<ul>
											<li><a href="#">Trousers</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">Leggings</a></li>
											<li><a href="#">Jumpsuit &amp; shorts</a></li>
											<li><a href="#">Skirts</a></li>
											<li><a href="#">Tights</a></li>
										</ul>
									</li>
									<li>
										<a href="#">ACCESSORIES</a><span class="expander"></span>
										<ul>
											<li><a href="#">Jewellery</a></li>
											<li><a href="#">Hats</a></li>
											<li><a href="#">Scarves &amp; snoods</a></li>
											<li><a href="#">Belts</a></li>
											<li><a href="#">Bags</a></li>
											<li><a href="#">Shoes</a></li>
											<li><a href="#">Sunglasses</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<!-- /category block --> 
						<!-- price slider block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">PRICE</h4>
							<div class="collapse-block__content">
								<div id="priceSlider" class="price-slider"></div>
								<form action="#">
									<div class="price-input">
										<label>From:</label>
										<input type="text" id="priceMin" />
									</div>
									<div class="price-input-divider">-</div>
									<div class="price-input">
										<label>To:</label>
										<input type="text" id="priceMax" />
									</div>
									<div class="price-input">
										<button type="submit" class="btn btn--ys btn--md">Filter</button>
									</div>
								</form>
							</div>
						</div>
						<!-- /price slider block --> 
						<!-- size block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">SIZE</h4>
							<div class="collapse-block__content">
								<ul class="options-swatch options-swatch--size options-swatch--lg">
									<li><a href="#">XS</a></li>
									<li><a href="#">S</a></li>
									<li><a href="#">M</a></li>
									<li><a href="#">L</a></li>
									<li><a href="#">XL</a></li>
									<li><a href="#">2XL</a></li>
									<li><a href="#">3XL</a></li>
								</ul>
							</div>
						</div>
						<!-- /size block --> 
						<!-- color block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">COLOR</h4>
							<div class="collapse-block__content">
								<ul class="options-swatch options-swatch--color options-swatch--lg">
									<li><a href="#"><span class="swatch-label color-black"></span></a></li>
									<li><a href="#"><span class="swatch-label color-grey"></span></a></li>
									<li><a href="#"><span class="swatch-label color-light-grey"></span></a></li>
									<li><a href="#"><span class="swatch-label color-blue"></span></a></li>
									<li><a href="#"><span class="swatch-label color-dark-turquoise "></span></a></li>
									<li><a href="#"><span class="swatch-label color-orange"></span></a></li>
									<li><a href="#"><span class="swatch-label color-purple"></span></a></li>
									<li><a href="#"><span class="swatch-label color-pale-violet-red"></span></a></li>
									<li><a href="#"><span class="swatch-label color-red"></span></a></li>
									<li><a href="#"><span class="swatch-label color-green"></span></a></li>
									<li><a href="#"><span class="swatch-label color-yellow"></span></a></li>
									<li><a href="#"><span class="swatch-label color-tan"></span></a></li>
								</ul>
							</div>
						</div>
						<!-- /color block --> 
						<!-- brands block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">BRANDS</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									<li><a href="#">Levi’s </a></li>
									<li><a href="#">Gap</a></li>
									<li><a href="#">Zara</a></li>
									<li><a href="#">Polo</a></li>
									<li><a href="#">Ecco</a></li>
									<li><a href="#">H&amp;M</a></li>
									<li><a href="#">Diesel</a></li>
									<li><a href="#">Bockers</a></li>
									<li><a href="#">Lacoste</a></li>
								</ul>
							</div>
						</div>
						<!-- /brands block --> 
						<!-- gender block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">GENDER</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									<li><a href="#">Men</a></li>
									<li><a href="#">Women</a></li>
									<li><a href="#">Unisex</a></li>
								</ul>
							</div>
						</div>
						<!-- /gender block --> 
						<!-- sleeve lenght block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">SLEEVE LENGTH</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									<li><a href="#">Long</a></li>
									<li><a href="#">Short</a></li>
									<li><a href="#">3/4</a></li>
								</ul>
							</div>
						</div>
						<!-- /sleeve lenght block --> 
						<!-- occasion block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">OCCASION</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									<li><a href="#">Partywear</a></li>
									<li><a href="#">Casual</a></li>
									<li><a href="#">Evening</a></li>
									<li><a href="#">Workwear</a></li>
								</ul>
							</div>
						</div>
						<!-- /occasion block --> 
						<!-- compare block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">COMPARE PRODUCTS</h4>
							<div class="collapse-block__content">
								<div class="compare">
									<div class="compare__item">
										<div class="compare__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a></div>
										<div class="compare__item__delete"><a href="#" class="icon icon-close"></a></div>
										<div class="compare__item__title">
											<h2><a href="#">Quis nostrud exercit ation ullamco</a></h2>
										</div>
									</div>
									<div class="compare__item">
										<div class="compare__item__image pull-left"><a href="#"><img src="images/product/product-80x100-2.jpg" alt=""></a></div>
										<div class="compare__item__delete"><a href="#" class="icon icon-close"></a></div>
										<div class="compare__item__title">
											<h2><a href="#">Quis nostrud exercit ation ullamco</a></h2>
										</div>
									</div>
								</div>
								<div><a href="#" class="btn btn--ys btn--md">Compare</a> <a href="#" class="btn btn--ys btn--md btn--light">Clear All</a></div>
							</div>
						</div>
						<!-- /compare block --> 
						<!-- poll block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">COMMUNITY POLL</h4>
							<div class="collapse-block__content">
								<p class="under-form-text color">What is your favorite color</p>
								<form id="pollForm" action="#">
									<ul class="filter-list">
										<li>
											<label class="radio">
											<input id="radio1" type="radio" name="radios" checked>
											<span class="outer"><span class="inner"></span></span>Green</label>
										</li>
										<li>
											<label class="radio">
											<input id="radio2" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Red</label>
										</li>
										<li>
											<label class="radio">
											<input id="radio3" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Black</label>
										</li>
										<li>
											<label class="radio">
											<input id="radio4" type="radio" name="radios">
											<span class="outer"><span class="inner"></span></span>Magenta</label>
										</li>
									</ul>
									<button type="submit" class="btn btn--ys btn--md btn--light">Vote</button>
								</form>
							</div>
						</div>
						<!-- /poll block --> 
						<!-- featured block -->
						<div class="collapse-block open coll-products-js">
							<h4 class="collapse-block__title">FEATURED</h4>
							<div class="collapse-block__content coll-gallery">
							</div>
							
							<div class="coll-gallery-clone" style="display:none">
								
									<div class="vertical-carousel vertical-carousel-2 offset-top-10">
										<div class="vertical-carousel__item">
											<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a>
											</div>
											<div class="vertical-carousel__item__title">
												<h2><a href="#">Quis nostrud exercit ation</a></h2>
											</div>
											<div class="price-box">$26.00 <span class="price-box__old">$28.00</span></div>
											<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										</div>
										<div class="vertical-carousel__item">
											<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-2.jpg" alt=""></a>
											</div>
											<div class="vertical-carousel__item__title">
												<h2><a href="#">Quis nostrud exercit ation</a></h2>
											</div>
											<div class="price-box">$26.00</div>
											<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										</div>
										<div class="vertical-carousel__item">
											<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a></div>
											<div class="vertical-carousel__item__title">
												<h2><a href="#">Quis nostrud exercit ation</a></h2>
											</div>
											<div class="price-box">$26.00</div>
											<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										</div>
									</div>
								
							</div>
						</div>
						<!-- /featured block -->
						<!-- tags block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">POPULAR TAGS</h4>
							<div class="collapse-block__content">
								<ul class="tags-list">
									<li><a href="#">Grey</a></li>
									<li><a href="#">Shirt</a></li>
									<li><a href="#">suit</a></li>
									<li><a href="#">Dresses </a></li>
									<li><a href="#">Outerwear</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags block --> 
						<!-- custom block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">CUSTOM BLOCK</h4>
							<div class="collapse-block__content">
								<p class="light-font">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
								<ul class="marker-list">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Conse ctetur adipisicing</li>
									<li>Elit sed do eiusmod tempor</li>
								</ul>
								<p class="light-font">Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.</p>
							</div>
						</div>
						<!-- /custom block --> 
					</aside>
					<!-- /left column --> 
					<!-- center column -->
					<aside class="col-md-8 col-lg-9 col-xl-10" id="centerColumn">
						<!-- title -->
						<div class="title-box">
							<h2 class="text-center text-uppercase title-under">women’s</h2>
						</div>
						<!-- /title -->
						
						
					
						<!-- filters row -->
						<div class="filters-row border-top-none">
							<div class="pull-left">
								<div class="filters-row__mode">
										<a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a> 
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
								</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Sort by: </label>
									<div class="select-wrapper">
										<select class="select--ys sort-position">
											<option>Position</option>
											<option>Price</option>
											<option>Rating</option>
										</select>
									</div>
									<a href="#" class="sort-direction icon icon-arrow_back"></a> 
								</div>
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Show: </label>
									<div class="select-wrapper">
										<select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
									</div>
									<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
								</div>
								<div class="filters-row__pagination">
									<ul class="pagination">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><span class="icon icon-chevron_right"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /filters row -->
						<div class="product-listing row">
							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
								<?php include_once 'includes/product_template.php'; ?>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
								
							</div>
							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
								
							</div>
							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
								
							</div>
							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
								
							</div>
							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
								
							</div>
							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
								
							</div>
							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
								
							</div>
						</div>
						<!-- filters row -->
						<div class="filters-row">
							<div class="pull-left">
								<div class="filters-row__mode">
										<a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a> 
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
								</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Sort by: </label>
									<div class="select-wrapper">
										<select class="select--ys sort-position">
											<option>Position</option>
											<option>Price</option>
											<option>Rating</option>
										</select>
									</div>
									<a href="#" class="sort-direction icon icon-arrow_back"></a> 
								</div>
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Show: </label>
									<div class="select-wrapper">
										<select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
									</div>
									<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
								</div>
								<div class="filters-row__pagination">
									<ul class="pagination">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><span class="icon icon-chevron_right"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /filters row --> 
					</aside>
					<!-- center column --> 
				</div>
				<!-- /two columns --> 
			</div>
		</div>
		<!-- End CONTENT section --> 
		<?php include_once 'includes/footer.php'; ?>		
	</body>

</html>