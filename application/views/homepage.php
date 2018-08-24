<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>GTC E-Learning</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Campus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="<?php echo base_url()?>assets/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url()?>assets/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/web/js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- font-awesome icons -->
	<link href="<?php echo base_url()?>assets/web/css/font-awesome.css" rel="stylesheet"> 

	<link href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

	<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.2.620/styles/kendo.common-material.min.css" />
	<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.2.620/styles/kendo.material.min.css" />
	<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.2.620/styles/kendo.material.mobile.min.css" />

	<script src="https://kendo.cdn.telerik.com/2018.2.620/js/jquery.min.js"></script>
	<script src="https://kendo.cdn.telerik.com/2018.2.620/js/kendo.all.min.js"></script>
	<!-- //font-awesome icons -->
	<link href="//fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<!-- banner -->	

	<!-- navigation -->


	<div class="nav-links">	
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>

					<a class="navbar-brand" href="<?php echo base_url('') ;?>"><h1 style="margin-top: 0px;">GTC E-Learning</h1></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav link-effect">
						<li class="active"><a href="<?php echo base_url('') ;?>">Home</a></li>
						<li><a href="#about" class="scroll">About</a></li>
						<li><a href="#services" class="scroll">Training Program</a></li>
						<li><a href="#gallery" class="scroll">Clients</a></li>
						<li><a href="#contact" class="scroll">Contact</a></li>
						<li><a href="" style="outline: none;" data-toggle="modal" data-target="#myModal">Sign in / Sign up</a></li>
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-body">									
										<div class="tab">
											<button class="tablinks active" onclick="openCity(event, 'Login')">Sign in</button>
											<button class="tablinks" onclick="openCity(event, 'Register')">Sign up</button>		
										</div>
										<div id="Login" class="tabcontent" style="display: block;">
											<form action="<?php echo base_url('homepage/login') ;?>" method="post">
												<div class="form-group">
													<label for="text">Email :</label>
													<input type="text" class="form-control" id="email" name="username" required="">
												</div>
												<div class="form-group">
													<label for="text">Password :</label>
													<input type="password" class="form-control" id="pwd" name="password" required="">
												</div>
												<div class="checkbox">
													<label><input type="checkbox"> Remember me</label>
												</div>
												<button type="submit" class="btn btn-success">Sign in</button>
											</form>
										</div>

										<div id="Register" class="tabcontent">
											<form action="<?php echo base_url().'homepage/register'?>" method="POST">
												<div class="form-group">
													<label for="text">Email :</label>
													<input type="email" class="form-control" id="email" name="email" required="">
												</div>
												<div class="form-group">
													<label for="text">Password :</label>
													<input type="password" class="form-control" id="email" name="password" >
												</div>
												<div class="form-group">
													<label for="text">Nama Lengkap :</label>
													<input type="text" class="form-control" id="email" name="namalengkap">
												</div>
												<div class="form-group">
													<label for="text">Jenis Kelamin :</label><br>
													<select class="form-control" id="sel1" name="gender">
														<option>---</option>
														<option value="L">Laki-laki</option>
														<option value="P">Perempuan</option>
													</select>
												</div>
												<div class="form-group">
													<label for="dtp_input2">Tempat Lahir :</label>
													<input type="text" class="form-control" id="tempatlahir" name="tempatlahir">
												</div>
												<div class="form-group">
													<label for="dtp_input2">Tanggal Lahir :</label>

													<input class="form-control form_date date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" size="16" type="text" value="" readonly>
													
													<input type="hidden" id="dtp_input2" value="" name="tgl"/>
												</div>
												<div class="form-group">
													<label for="comment">Alamat :</label>
													<textarea class="form-control" rows="5" id="comment" name="alamat"></textarea>
												</div>
												
												<div class="form-group">
													<label for="comment">No. Telepon :</label>
													<input type="text" class="form-control" name="telepon">
												</div>
												<button type="submit" class="btn btn-success">Sign up</button>
											</form>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>

							</div>
						</div>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!-- /navigation -->

	<!-- //header -->
	<!-- banner -->	
	<div class="banner">
		<div class="container">
			<h3>Education is the key to unlock the golden door of freedom</h3>
			
			<div class="wthree_banner_grids">
				<div class="col-md-3 wthree_banner_grid">
					<span class="fa fa-graduation-cap" aria-hidden="true"></span>
					<h4>Corporis</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<span class="fa fa-book" aria-hidden="true"></span>
					<h4>Suscipit</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<span class="fa fa-laptop" aria-hidden="true"></span>
					<h4>Laboriosam</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<span class="fa fa-user" aria-hidden="true"></span>
					<h4>Voluptate</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="about-agileits-title"> 
				<h3>About us</h3> 
			</div>
			<div class="w3ls-about-grids">
				<div class="col-md-6 w3l-about-img">
					<img src="<?php echo base_url()?>assets/web/images/about2.jpg" alt="image">
				</div>
				<div class="col-md-6 w3l-about-left">
					<p>Di tengah perubahan lingkungan yang cepat bahkan cenderung chaotic dewasa ini, tetap ada hal-hal yang berlangsung relatif konstan, yaitu keterampilan dasar yang melibatkan interaksi hubungan manusia yang efektif. Keterampilan manajemen merupakan keterampilan dalam mengelola kehidupan diri sendiri dan berinteraksi dengan orang lain. Keterampilan ini bisa dikatakan sebagai keterampilan yang timeless. Keterampilan ini bersifat perilaku dan sangat dapat dikembangkan. Untuk mengembangkannya, setidaknya dibutuhkan 3 (tiga) hal yaitu petunjuk perilaku (behavioral guidelines), aplikasi perilaku tersebut dalam konteks riil, serta adanya peluang untuk mempraktekkannya. Keterampilan manajemen terdiri dari keterampilan yang berkaitan dengan pengelolaan diri sendiri, interaksi dengan orang lain, serta bekerja dalam kelompok.</span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- Our services -->
	<div class="services" id="services">
		<h3 class="wthree_head">Training Program</h3>
		<div class="container">
			<div class="stylegrid2">
				<div class="col-md-6 stylegridtext">
					<h3>Leadership Training Series</h3>
					<span></span>
					<p>Di tengah perubahan lingkungan yang cepat bahkan cenderung chaotic dewasa ini, tetap ada hal-hal yang berlangsung relatif konstan, yaitu keterampilan dasar yang melibatkan interaksi hubungan manusia yang efektif.  </p>
					<div class="readmore">
						<a href="<?php echo base_url('homepage/leadership') ;?>">Read more</a>
					</div>
				</div>
				<div class="col-md-6 stylegridimg">
					<img src="<?php echo base_url()?>assets/web/images/leadership.jpg" alt="">
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="stylegrid3">
				<div class="col-md-6 stylegridimg">
					<img src="<?php echo base_url()?>assets/web/images/management.jpg" alt="">
				</div>
				<div class="col-md-6 stylegridtext">
					<h3>Management Skills Training Series</h3>
					<span></span>
					<p>Di tengah perubahan lingkungan yang cepat bahkan cenderung chaotic dewasa ini, tetap ada hal-hal yang berlangsung relatif konstan, yaitu keterampilan dasar yang melibatkan interaksi hubungan manusia yang efektif. </p>
					<div class="readmore">
						<a href="#">Read more</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--  gallery -->
	<div class="portfolio-agileinfo" id="gallery">
		<div class="container">
			<div class="wthree_head_section_gallery">
				<h3 class="w3l_header w3_agileits_header">Our Clients</h3>
			</div>
		</div>
		<div class="agile_wthree_inner_grids">
			<div class="agile_port_w3ls_info">
				<div class="portfolio-grids_main">
					<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
						<a href="<?php echo base_url()?>assets/web/images/g1.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
							<img src="<?php echo base_url()?>assets/web/images/g1.jpg" class="img-responsive" alt="w3ls" />
							<div class="b-wrapper two">
								<i class="fa fa-magic" aria-hidden="true"></i>

							</div>
						</a>
					</div>
					<div class="col-md-6 portfolio-grid_left">
						<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo base_url()?>assets/web/images/g2.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo base_url()?>assets/web/images/g2.jpg" class="img-responsive" alt="w3ls" />
								<div class="b-wrapper">
									<i class="fa fa-magic" aria-hidden="true"></i>

								</div>
							</a>
						</div>
						<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo base_url()?>assets/web/images/g3.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo base_url()?>assets/web/images/g3.jpg" class="img-responsive" alt="w3ls" />
								<div class="b-wrapper">
									<i class="fa fa-magic" aria-hidden="true"></i>

								</div>
							</a>
						</div>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="portfolio-grids_main">

					<div class="col-md-6 portfolio-grid_left">
						<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo base_url()?>assets/web/images/g4.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo base_url()?>assets/web/images/g4.jpg" class="img-responsive" alt="w3ls" />
								<div class="b-wrapper">
									<i class="fa fa-magic" aria-hidden="true"></i>

								</div>
							</a>
						</div>
						<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
							<a href="<?php echo base_url()?>assets/web/images/g5.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="<?php echo base_url()?>assets/web/images/g5.jpg" class="img-responsive" alt="w3ls" />
								<div class="b-wrapper">
									<i class="fa fa-magic" aria-hidden="true"></i>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6 portfolio-grids" data-aos="zoom-in">
						<a href="<?php echo base_url()?>assets/web/images/g6.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
							<img src="<?php echo base_url()?>assets/web/images/g6.jpg" class="img-responsive" alt="w3ls" />
							<div class="b-wrapper two">
								<i class="fa fa-magic" aria-hidden="true"></i>

							</div>
						</a>
					</div>

					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
	</div>
	<!--// Gallery -->

	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="heading">
				<h3>Our Professors</h3>
			</div>
			<div class="wthree_team_grids">
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="<?php echo base_url()?>assets/web/images/tm1.jpg" alt=" " class="img-responsive" />
						
					</div>
					<h4>Max Payne</h4>
					<p>manager</p>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="<?php echo base_url()?>assets/web/images/tm2.jpg" alt=" " class="img-responsive" />
						
					</div>
					<h4> vessi vel</h4>
					<p>trainer</p>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="<?php echo base_url()?>assets/web/images/tm3.jpg" alt=" " class="img-responsive" />
						
					</div>
					<h4>Mark Jest</h4>
					<p>director</p>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="<?php echo base_url()?>assets/web/images/tm44.jpg" alt=" " class="img-responsive" />
						
					</div>
					<h4>John smith</h4>
					<p>sports member</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->


	<!-- contact -->

	
	<div class="contact1" id="contact">
		<div class="container">
			<div class="map-pos">
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Visit Us</h5>
						<p>Jalan Cidodol Raya No. 40, Kebayoran Lama, Jakarta Selatan</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row w3-agileits">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Mail Us</h5>
						<p><a href="mailto:info@example.com"> mail@example.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Call Us</h5>
						<p>+62 727 93636</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<p>Copyright &copy; 2018 <a href="<?php echo base_url('');?>">GTC E-Learning</a>.</strong> All rights
    reserved. </p>
		</div>
	</div>


		<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

		<script>
			function openCity(evt, cityName) {
				var i, tabcontent, tablinks;
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}
				document.getElementById(cityName).style.display = "block";
				evt.currentTarget.className += " active";
			}
		</script>
		<script>
			$(document).ready(function () {
                    // create DateTimePicker from input HTML element
                    $("#datepicker").kendoDatePicker({
                    	value: new Date(),
                    	dateInput: true
                    });
                });
            </script>
            <!-- //here ends scrolling icon -->
        </body>
        </html>