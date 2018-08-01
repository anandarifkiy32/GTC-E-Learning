<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Education Template</title>

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
							<img src="./assets/gtc_client/img/logo-alt.png" alt="logo">
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
						<li><a href="index.html">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="course.html">Courses</a></li>
						
						<li><a href="contact.html">Contact</a></li>
						<li><a href="contact.html">Login</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./assets/gtc_client/img/home-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="white-text">Global Top Career Edusite Online Training Courses</h1>
							<p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant, eu pro alii error homero.</p>
							<a class="main-button icon-button" href="#">Get Started!</a>
						</div>
						<?php if($this->session->userdata('status') != 'login'){ ?>

							<div class="col-md-4">
								<div class="panel panel-default">
									<div class="panel-body">
										<form action="<?php echo base_url('homepage/login')?>" method="post">
											<div class="form-group">
												<label for="email">Email address:</label>
												<input type="email" class="form-control" name="email" id="email">
											</div>
											<div class="form-group">
												<label for="pwd">Password:</label>
												<input type="password" class="form-control" name="pass" id="pwd">
											</div>
											<div class="checkbox">
												<label><input type="checkbox"> Remember me</label>
											</div>
											<button type="submit" class="btn btn-success">Sign in</button>
										</form>
									</div>
									<div class="panel-footer">Don't have an account? <a href="<?php echo base_url('homepage/showregister')?>">Register</a></div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>

			</div>
			<!-- /Home -->

			<div id="courses" class="section">
				<div class="container">
					<div class="row">
						<div class="section-header text-center">
							<h2>Explore Courses</h2>
							<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
						</div>
					</div>
					<div id="courses-wrapper">
						<div class="row">
							<?php foreach ($course as $c) { ?>
								<!-- single course -->
								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="course">
										<a href="<?php echo base_url('homepage/detailcourse/'.$c->slug) ?>" class="course-img">
											<img src="<?php echo base_url('assets/modul/'.$c->img)?>" alt="">
											<i class="course-link-icon fa fa-link"></i>
										</a>
										<a class="course-title" href="<?php echo base_url('homepage/detailcourse/'.$c->slug) ?>"><?php echo $c->nama ?></a>
										<div class="course-details">
											<span class="course-category">Business</span>
											<span class="course-price course-free">Free</span>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
						<div class="row">
							<div class="center-btn">
								<a class="main-button icon-button" href="<?php echo base_url('homepage/coursecatalog') ?>">More Courses</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /Courses -->

				<!-- Courses -->
				<div id="courses" class="section">

					<!-- container -->
					<div class="container">

						<!-- row -->
						<div class="row">
							<div class="section-header text-center">
								<h2>Event</h2>
								<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
							</div>
						</div>
						<!-- /row -->

						<!-- courses -->
						<div id="courses-wrapper">

							<!-- row -->
							<div class="row">

								<!-- single course -->
								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="course">
										<a href="course-overview.html" class="course-img">
											<img src="<?php echo base_url()?>assets/gtc_client/img/course01.jpg" alt="">
											<i class="course-link-icon fa fa-link"></i>
										</a>
										<a class="course-title" href="course-overview.html">Beginner to Pro in Excel: Financial Modeling and Valuation</a>
										<div class="course-details">
											<span class="course-category">Business</span>
											<span class="course-price course-free">Free</span>
										</div>
									</div>
								</div>
								<!-- /single course -->

								<!-- single course -->
								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="course">
										<a href="course-overview.html" class="course-img">
											<img src="<?php echo base_url()?>assets/gtc_client/img/course02.jpg" alt="">
											<i class="course-link-icon fa fa-link"></i>
										</a>
										<a class="course-title" href="course-overview.html">Introduction to CSS </a>
										<div class="course-details">
											<span class="course-category">Web Design</span>
											<span class="course-price course-premium">Premium</span>
										</div>
									</div>
								</div>
								<!-- /single course -->

								<!-- single course -->
								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="course">
										<a href="course-overview.html" class="course-img">
											<img src="<?php echo base_url()?>assets/gtc_client/img/course03.jpg" alt="">
											<i class="course-link-icon fa fa-link"></i>
										</a>
										<a class="course-title" href="course-overview.html">The Ultimate Drawing Course | From Beginner To Advanced</a>
										<div class="course-details">
											<span class="course-category">Drawing</span>
											<span class="course-price course-premium">Premium</span>
										</div>
									</div>
								</div>
								<!-- /single course -->

								<div class="col-md-3 col-sm-6 col-xs-6">
									<div class="course">
										<a href="course-overview.html" class="course-img">
											<img src="<?php echo base_url()?>assets/gtc_client/img/course04.jpg" alt="">
											<i class="course-link-icon fa fa-link"></i>
										</a>
										<a class="course-title" href="course-overview.html">The Complete Web Development Course</a>
										<div class="course-details">
											<span class="course-category">Web Development</span>
											<span class="course-price course-free">Free</span>
										</div>
									</div>
								</div>


								<!-- /single course -->

							</div>
							<!-- /row -->



						</div>
						<!-- /courses -->

						<div class="row">
							<div class="center-btn">
								<a class="main-button icon-button" href="course.html">More Event</a>
							</div>
						</div>

					</div>
					<!-- container -->

				</div>
				<!-- /Courses -->



				<!-- Contact CTA -->
				<div id="contact-cta" class="section">

					<!-- Backgound Image -->
					<div class="bg-image bg-parallax overlay" style="background-image:url(./assets/gtc_client/img/cta2-background.jpg)"></div>
					<!-- Backgound Image -->

					<!-- container -->
					<div class="container">

						<!-- row -->
						<div class="row">

							<div class="col-md-8 col-md-offset-2 text-center">
								<h2 class="white-text">Contact Us</h2>
								<p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
								<a class="main-button icon-button" href="#">Contact Us Now</a>
							</div>

						</div>
						<!-- /row -->

					</div>
					<!-- /container -->

				</div>
				<!-- /Contact CTA -->

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
									<li><a href="index.html">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Courses</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<!-- /footer nav -->

						</div>
						<!-- /row -->

						<!-- row -->
						<div id="bottom-footer" class="row">

							<!-- social -->
							<div class="col-md-4 col-md-push-8">
								<ul class="footer-social">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
							<!-- /social -->

							<!-- copyright -->
							<div class="col-md-8 col-md-pull-4">
								<div class="footer-copyright">
									<span>© Copyright 2018. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></span>
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
				<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/main.js"></script>

			</body>
			</html>