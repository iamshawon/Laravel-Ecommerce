<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<style type="text/css">
    .paymentWrap {
    padding: 50px;
}

.paymentWrap .paymentBtnGroup {
    max-width: 800px;
    margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
    padding: 40px;
    box-shadow: none;
    position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
    outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
    border-color: #4cd264;
    outline: none !important;
    box-shadow: 0px 3px 22px 0px #7b7b7b;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
    position: absolute;
    right: 3px;
    top: 3px;
    bottom: 3px;
    left: 3px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    border: 2px solid transparent;
    transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
    background-image: url("data:image/jpeg;base64,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")
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
    background-image: url("https://i0.wp.com/www.ecommerce-nation.com/wp-content/uploads/2018/01/paypal.png?fit=1000%2C600&ssl=1");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWBaBsb7rXCWZnlXW43kbTgwEmGFh8acwWjQ&usqp=CAU");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
	border-color: #4cd264;
	outline: none !important;
}


</style>


<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/')}}"><img src="{{asset('frontend/images/home/logo.png')}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								
							<!-- For Logged in Customer -->
							<?php $customer_id = Session::get ('customer_id');
								  $shipping_id = Session::get ('shipping_id'); 

								// Show customer id & shipping id Logout button side 
								print_r($customer_id);	  
								print_r($shipping_id);	  
							?>
							<?php if($customer_id != NULL && $shipping_id == NULL) { ?>
								<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
							<?php } if($customer_id != NULL && $shipping_id != NULL) { ?>
								<li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
							<?php } else { ?>
								<li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
							<?php } ?>


								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
							
							
							<?php if($customer_id != NULL) { ?>
								<li><a href="{{URL::to('/customer_logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
							<?php } else { ?>
								<li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Login</a></li>
							<?php } ?>


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/')}}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										
										<?php $customer_id = Session::get ('customer_id'); ?>
										<?php if($customer_id != NULL) { ?>
											<li><a href="{{URL::to('/checkout')}}"> Checkout</a></li>
										<?php } else { ?>
											<li><a href="{{URL::to('/login-check')}}"> Checkout</a></li>
										<?php } ?>

										<li><a href="{{URL::to('/show-cart')}}">Cart</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

		@yield('slider');
	

	
	<section>
		<div class="container">
			<div class="row">
			
			<div class="col-sm-4">
				<div class="left-sidebar">
					@yield('sidebar')
				</div>
			</div>
								
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->

						@yield('content')

					</div>						
				</div>

				
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('frontend/images/home/iframe1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('frontend/images/home/iframe2.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('frontend/images/home/iframe3.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('frontend/images/home/iframe4.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('frontend/images/home/map.png')}}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>