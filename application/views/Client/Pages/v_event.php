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

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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
						<li><a href="<?php echo base_url('')?>">Home</a></li>
						<li><a href="<?php echo base_url('homepage/coursecatalog')?>">Courses</a></li>
						<li><a href="<?php echo base_url('homepage/showevent')?>">Event</a></li>
						<li><a href="<?php echo base_url('homepage/contact')?>">Contact</a></li>
						<li><a href="<?php echo base_url('')?>">Login</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/gtc_client/img/events2.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="<?php echo base_url('')?>">Home</a></li>
							<li><a href="http://event.globaltopcareer.com">Event</a></li>
						</ul>
						<h1 class="white-text">Don't Miss It</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<div id="courses" class="section">
			<div class="container">
				<div id="courses-wrapper">
					<div class="row">
						<?php foreach ($select_all as $ea) { ?>
							<!-- single course -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="course">
									<a href="<?php echo base_url('homepage/event/'.$ea->id_event) ?>" class="course-img">
										<img src="<?php echo base_url('assets/event/'.$ea->img)?>" alt="">
										<i class="course-link-icon fa fa-link"></i>
									</a><?php echo $ea->nama ?>
									<p><?php echo $ea->tanggal ?></p>
									<div class="course-details">
										<span class="course-category"><?php echo $ea->deskripsi ?></span>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row">

							<!-- pagination -->
							<div class="col-md-12">
								<div class="post-pagination">
									<a href="#" class="pagination-back pull-left">Back</a>
									<ul class="pages">
										<li class="active">1</li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
									</ul>
									<a href="#" class="pagination-next pull-right">Next</a>
								</div>
							</div>
							<!-- pagination -->

						</div>
			</div>
		</div>

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
						<li><a href="<?php echo base_url('homepage/course')?>">Courses</a></li>
						<li><a href="<?php echo base_url('homepage/showevent')?>">Event</a></li>
						<li><a href="<?php echo base_url('homepage/contact')?>">Contact</a></li>
						<li><a href="<?php echo base_url('')?>">Login</a></li>
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
