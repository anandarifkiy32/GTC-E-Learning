<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>GTC E-Learning</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/bootstrap.min.css"/>

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/style.css"/>

	</head>
	<body>

		<!-- Header -->
		<header id="header" class="transparent-nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.html">
							<img src="<?php echo base_url()?>assets/gtc_client/img/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url() ?>">Home</a></li>
						<li><a href="<?php echo base_url('homepage/coursecatalog/') ?>">Courses</a></li>

						<li><a href="<?php echo base_url('homepage/contact/')?>">Contact</a></li>
						<li class="dropdown"><a href="<?php if(!$profile){echo base_url();} ?>" <?php if($profile){ ?>class="dropdown-toggle" data-toggle="dropdown" <?php } ?> >              
							<?php 
							if($profile){
								foreach ($profile as $p) {
									echo $p->nama ;
								}
							}else{
								echo 'Login';
							}
							?></a>
							<ul class="dropdown-menu">
								<li><a href="#" style="color: #262626;background-color: transparent;">Profile</a></li>
								<li><a href="<?php echo base_url('homepage/logout')?>" style="color: #262626">Logout</a></li>
							</ul>
						</li>
					</ul>

				</nav>

				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/gtc_client/img/contact.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="<?php echo base_url('')?>">Home</a></li>
							<li>Contact</li>
						</ul>
						<h1 class="white-text">Get In Touch</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-5 col-md-offset-1">
						<h4>Contact Information</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>globaltopcareer@gmail.com</li>
							<li><i class="fa fa-phone"></i>+62 727 93636</li>
							<li><i class="fa fa-map-marker"></i>Permata Indo Niaga - Head Office <p style="    margin: 8px 55px 10px;"> Jalan Cidodol Raya No 40, Kebayoran Lama, Jakarta Selatan</p></li>
						</ul>



					</div>
					<div class="col-md-6">
						<!-- contact map -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.256512601126!2d106.77072931476913!3d-6.229874995490378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f127cfec28bd%3A0xd28a99b4e988a7fd!2sJl.+Cidodol+Raya+No.40%2C+RT.7%2FRW.6%2C+Grogol+Sel.%2C+Kby.+Lama%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12220!5e0!3m2!1sen!2sid!4v1533019800239" width="600" height="300" frameborder="0" style="border:0; padding-right: 100px;" allowfullscreen></iframe>
						<!-- /contact map -->
					</div>
					<!-- /contact form -->

					<!-- contact information -->
					<!-- contact information -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="index.html">
								<img src="<?php echo base_url()?>assets/gtc_client/img/logo.png" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="<?php echo base_url('')?>">Home</a></li>
							<li><a href="<?php echo base_url('homepage/coursecatalog')?>">Courses</a></li>
							<li><a href="<?php echo base_url('homepage/contact')?>">Contact</a></li>
							<li class="dropdown"><a href="<?php if(!$profile){echo base_url();} ?>" <?php if($profile){ ?>class="dropdown-toggle" data-toggle="dropdown" <?php } ?> >              
							<?php 
							if($profile){
								foreach ($profile as $p) {
									echo $p->nama ;
								}
							}else{
								echo 'Login';
							}
							?></a>
							<ul class="dropdown-menu">
								<li><a href="#" style="color: #262626;background-color: transparent;">Profile</a></li>
								<li><a href="<?php echo base_url('homepage/logout')?>" style="color: #262626">Logout</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- copyright -->
					<div class="col-md-12 text-center">
						<div class="footer-copyright">
							<span>&copy; Copyright 2018. All Rights Reserved. | GTC E-Learning</span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/google-map.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/main.js"></script>

	</body>
	</html>