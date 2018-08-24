<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>GTC EduSite</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/bootstrap.min.css"/>

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/style.css"/>

	<style type="text/css">
	@media only screen and (max-width: 500px) {
		.top{
			margin-top: 80px;
		}
	}
</style>
</head>
<body>

	<!-- Header -->
	<header id="header" class="transparent-nav">
		<div class="container">

			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="<?php echo base_url() ?>">
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
					<li><a href="<?php echo base_url()?>">Home</a></li>
					<li><a href="<?php echo base_url('homepage/coursecatalog/') ?>">Courses</a></li>

					<li><a href="<?php echo base_url('homepage/contact') ?>">Contact</a></li>
					<li><a href=""><span class="fa fa-user"></span> Login</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
	</header>
	<!-- /Header -->

	<!-- Home -->
	<div id="home" class="hero-area">

		<!-- Backgound Image -->
		<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url(); ?>assets/gtc_client/img/home-background.jpg)"></div>
		<!-- /Backgound Image -->

		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 top">
						<h1 class="white-text">Global Top Career Edusite Online Training Courses</h1>
						<p class="lead white-text">Seize Your Dream With Us</p>
						<a class="main-button icon-button" href="<?php echo base_url('homepage/showregister') ?>">REGISTER NOW</a>
					</div>
					<br>
					<?php if($this->session->userdata('status') != 'login'){ ?>

						<div class="col-md-4 bottom">
							<div class="panel panel-default">
								<div class="panel-body">
									<?php 
									$err = $this->session->flashdata('error');
									$succ = $this->session->flashdata('succes');
									if ($err) { ?>
										<div class="alert alert-danger alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<h4><i class="icon fa fa-ban"></i> Gagal!</h4>
											<?php echo $err; ?>
										</div>
									<?php }else if($succ){ ?>
										<div class="alert alert-success alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<h4><i class="icon fa fa-check"></i> Success</h4>
											<?php echo $succ; ?>
										</div>
									<?php } ?>
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
				</div>
			</div>
			<div id="courses-wrapper">
			<div class="row">
				<?php foreach ($category as $c) { ?>
					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="<?php echo base_url('homepage/category/'.$c->slug) ?>" class="course-img">
								<img src="<?php echo base_url('assets/modul/category/'.$c->img)?>" alt="">
								<i class="course-link-icon fa fa-link"></i>
							</a>
							<a class="course-title" href="<?php echo base_url('homepage/category/'.$c->slug) ?>"><?php echo $c->category ?></a>
							
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

	<!-- Contact CTA -->
	<div id="contact-cta" class="section">

		<!-- Backgound Image -->
		<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url(); ?>assets/gtc_client/img/cta2-background.jpg)"></div>
		<!-- Backgound Image -->

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">

				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="white-text">Contact Us</h2>
				</div>
				<div class="col-md-4 white-text"><i class="fa fa-map-marker"></i> <span>Permata Indo Niaga - Head Office</span></div>
				<div class="col-md-4 white-text"><i class="fa fa-phone-square"></i> <span> +62 727 93636</span></div>
				<div class="col-md-4 white-text"><i class="fa fa-envelope"></i> <span>globaltopcareer@gmail.com</span></div>
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
					<li><a href="<?php echo base_url('')?>">Home</a></li>
					<li><a href="<?php echo base_url('homepage/coursecatalog')?>">Courses</a></li>
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
					<span>&copy; Copyright 2018. | Global Top Career EduSite</span>
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