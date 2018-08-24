<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GTC EduSite</title>
	<link href="<?php echo base_url()?>assets/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/web/css/font-awesome.css" rel="stylesheet"> 
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/font-awesome.min.css">
	<link href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/style.css"/>
</head>
<body>
	<header id="header">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-brand">
					<a class="logo" href="<?php echo base_url() ?>">
						<img src="<?php echo base_url()?>assets/gtc_client/img/logo.png" alt="logo">
					</a>
				</div>
				<button class="navbar-toggle">
					<span></span>
				</button>
			</div>
			<nav id="nav">
				<ul class="main-menu nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><a href="<?php echo base_url('homepage/coursecatalog/') ?>">Courses</a></li>
					<li><a href="<?php echo base_url('homepage/contact/')?>">Contact</a></li>
					<li class="dropdown"><a href="<?php if(isset($profile)){echo base_url();} ?>" <?php if(isset($profile)){ ?>class="dropdown-toggle" data-toggle="dropdown" <?php } ?> >              
						<?php 
						if(isset($profile)){
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
		</div>
	</header>
	<div class="hero-area section">
		<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url()?>assets/gtc_client/img/blog-post-background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<ul class="hero-area-tree">
						<li><a href="<?php echo base_url() ?>">Home</a></li>
						<li><a href="">Register</a></li>
					</ul>
					<h1 class="white-text">Register Now</h1>
				</div>
			</div>
		</div>
	</div>
	<div id="blog" class="section">
		<div class="container">
			<div class="row">
				<div id="main" class="col-md-12">
					<div class="blog-post">
						<form method="post" action="<?php echo base_url('homepage/register') ;?>">
							<div class="form-group">
								<label> Nama Lengkap</label>
								<input class="form-control" type="text" name="namalengkap" required="">
							</div>
							<div class="form-group">
								<label> Jenis Kelamin</label>
								<select class="form-control" name="gender" required="">
									<option>Pilih Jenis Kelamin</option>
									<option value="P">Perempuan</option>
									<option value="L">Laki-laki</option>
								</select>
							</div>
							<div class="form-group">
								<label> Tempat Lahir</label>
								<input class="form-control" type="text" name="tempatlahir" required="">
							</div>
							<div class="form-group">
								<label for="dtp_input2">Tanggal Lahir :</label>

								<input class="form-control form_date date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" size="16" type="text" value="" readonly>

								<input type="hidden" id="dtp_input2" value="" name="tgl"/>
							</div>
							<div class="form-group">
								<label> Alamat</label>
								<textarea class="form-control" name="alamat" required=""></textarea>
							</div>
							<div class="form-group">
								<label> Telepon/ HP</label>
								<input class="form-control" type="number" name="telepon" required="">
							</div>
							<div class="form-group">
								<label> E-mail</label>
								<input class="form-control" type="email" name="email" required="">
							</div>
							<div class="form-group">
								<label> Password</label>
								<input class="form-control" type="password" name="password">
							</div>

							<button class="main-button icon-button">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="footer" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="footer-logo">
						<a class="logo" href="index.html">
							<img src="<?php echo base_url()?>assets/gtc_client/img/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<ul class="footer-nav">
						<li><a href="<?php echo base_url('')?>">Home</a></li>
						<li><a href="<?php echo base_url('homepage/coursecatalog')?>">Courses</a></li>
						<li><a href="<?php echo base_url('homepage/contact')?>">Contact</a></li>
						<li><a href="<?php echo base_url('')?>">Login</a></li>
					</ul>
				</div>
			</div>
			<div id="bottom-footer" class="row">
				<div class="col-md-12 text-center">
					<div class="footer-copyright">
						<span>&copy; Copyright 2018. All Rights Reserved. | GTC E-Learning</span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div id='preloader'><div class='preloader'></div></div>
	<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
	<script type="text/javascript">
		$('.form_datetime').datetimepicker({
=======
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>GTC EduSite</title>
		<link href="<?php echo base_url()?>assets/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		<link href="<?php echo base_url()?>assets/web/css/font-awesome.css" rel="stylesheet"> 
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/bootstrap.min.css"/>
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/gtc_client/css/font-awesome.min.css">
		<link href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

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
		<header id="header">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="<?php echo base_url() ?>">
							<img src="<?php echo base_url()?>assets/gtc_client/img/logo.png" alt="logo">
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
						<li class="dropdown"><a href="<?php if(isset($profile)){echo base_url();} ?>" <?php if(isset($profile)){ ?>class="dropdown-toggle" data-toggle="dropdown" <?php } ?> >              
							<?php 
							if(isset($profile)){
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
			<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url()?>assets/gtc_client/img/blog-post-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="<?php echo base_url() ?>">Home</a></li>
							<li><a href="">Register</a></li>
						</ul>
						<h1 class="white-text">Register Now</h1>
					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-12">

						<!-- blog post -->
						<div class="blog-post">
							
								<form method="post" action="<?php echo base_url('homepage/register') ;?>">
									<div class="form-group">
									<label> Nama Lengkap</label>
										<input class="form-control" type="text" name="namalengkap" required="">
									</div>
									<div class="form-group">
									<label> Jenis Kelamin</label>
										<select class="form-control" name="gender" required="">
											<option>Pilih Jenis Kelamin</option>
											<option value="P">Perempuan</option>
											<option value="L">Laki-laki</option>
										</select>
									</div>
									<div class="form-group">
									<label> Tempat Lahir</label>
										<input class="form-control" type="text" name="tempatlahir" required="">
									</div>
									<div class="form-group">
											<label for="dtp_input2">Tanggal Lahir :</label>

											<input class="form-control form_date date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" size="16" type="text" value="" readonly>

											<input type="hidden" id="dtp_input2" value="" name="tgl"/>
										</div>
									<div class="form-group">
									<label> Alamat</label>
										<textarea class="form-control" name="alamat" required=""></textarea>
									</div>
									<div class="form-group">
									<label> Telepon/ HP</label>
										<input class="form-control" type="number" name="telepon" required="">
									</div>
									<div class="form-group">
									<label> E-mail</label>
										<input class="form-control" type="email" name="email" required="">
									</div>
									<div class="form-group">
									<label> Password</label>
										<input class="form-control" type="password" name="password">
									</div>

									<button class="main-button icon-button">Submit</button>
								</form>
							
							
						</div>
						<!-- /blog post -->
					
					</div>
					<!-- /main blog -->

				

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

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
		<script type="text/javascript" src="<?php echo base_url()?>assets/gtc_client/js/main.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
		<script type="text/javascript">
			$('.form_datetime').datetimepicker({
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
<<<<<<< HEAD
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
=======
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
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
</html>