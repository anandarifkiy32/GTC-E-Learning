<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HTML Education Template</title>
	<link href="<?php echo base_url()?>assets/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/web/css/font-awesome.css" rel="stylesheet"> 
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/font-awesome.min.css">
	<link href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/style.css"/>
</head>
<body>
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
	<div class="hero-area section">
		<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url()?>assets/gtc_client/img/blog-post-background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<ul class="hero-area-tree">
						<li><a href="<?php echo base_url()?>">Home</a></li>
						<li><a href="#">Registrasi</a></li>
					</ul>
					<h1 class="white-text">Berhasil</h1>
				</div>
			</div>
		</div>
	</div>
	<div id="blog" class="section">
		<div class="container">
			<div class="row">
				<div id="main" class="col-md-12">
					<div class="blog-post">
						<div class="alert alert-success alert-dismissible">
							<h4><i class="icon fa fa-check"></i> Berhasil !</h4>
							Kami telah mengirimkan tautan verifikasi ke email anda !
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
	<div id='preloader'><div class='preloader'></div></div>
	<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
	<script type="text/javascript">
		$('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
		$('.form_date').datetimepicker({
			language:  'id',
			weekStart: 1,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0
		});
		$('.form_time').datetimepicker({
			language:  'fr',
			weekStart: 1,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 1,
			minView: 0,
			maxView: 1,
			forceParse: 0
		});
	</script>
</body>
</html>