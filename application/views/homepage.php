<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Campus an Education Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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

					<a class="navbar-brand" href="index.html"><h1 style="margin-top: 0px;">Campus</h1></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav link-effect">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="#about" class="scroll">About</a></li>
						<li><a href="#services" class="scroll">Services</a></li>
						<li><a href="#gallery" class="scroll">gallery</a></li>
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
					<img src="<?php echo base_url()?>assets/web/images/about1.jpg" alt="image">
				</div>
				<div class="col-md-6 w3l-about-left">
					<i class="fa fa-globe" aria-hidden="true"></i>
					<h2>Welcome</h2>
					<h5>Integer mollis porttitor nibh</h5>
					<p>Donec bibendum ligula sit amet auctor vulputate. Maecenas elementum, magna nec interdum venenatis, nibh enim gravida sem, id consectetur justo erat non tortor. Nam ultricies eget erat quis dapibus. Aenean eu scelerisque lacus, et fringilla odio.<span>Sed vestibulum sapien ornare ex sodales, eu feugiat ipsum tempor. Vivamus ante orci, congue sit amet aliquam non, sagittis eget justo. Curabitur mollis hendrerit nunc, id luctus sem vestibulum id.</span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- Our services -->
	<div class="services" id="services">
		<h3 class="wthree_head">Our Services</h3>
		<div class="container">
			<div class="stylegrid2">
				<div class="col-md-6 stylegridtext">
					<h3>HIGH PROFILE STAFF</h3>
					<span></span>
					<p>Lorem ipsum dolor sit amet, error sit voluptatem , eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus iste natus error sit voluptatem , eaque ipsa quae</p>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
					<div class="readmore">
						<a href="#" data-toggle="modal" data-target="#myModal">Read more</a>
					</div>
				</div>
				<div class="col-md-6 stylegridimg">
					<img src="<?php echo base_url()?>assets/web/images/s2.jpg" alt="">
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="stylegrid3">
				<div class="col-md-6 stylegridimg">
					<img src="<?php echo base_url()?>assets/web/images/s1.jpg" alt="">
				</div>
				<div class="col-md-6 stylegridtext">
					<h3>Students FREEDOM</h3>
					<span></span>
					<p>Lorem ipsum dolor sit amet, error sit voluptatem , eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus iste natus error sit voluptatem , eaque ipsa quae</p>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
					<div class="readmore">
						<a href="#" data-toggle="modal" data-target="#myModal">Read more</a>
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
				<h3 class="w3l_header w3_agileits_header">Our Gallery</h3>
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

	<div class="contact" id="contact">
		<div class="container">
			<h3>Contact</h3>
			<div class="col-md-6 w3-left-contact">
				<div class="agile-sub-left">
					<p>Extended Stay Restaurant<br>
						<span>87th St,Kansas City</span>
					Lenexa 241.</p>

					<ul>
						<li>+0(23) 954 566 7788</li>
						<li>+0(23) 375 366 9945</li>
					</ul>


				</div>
				<div class="agile-sub">
					<h4>Get Free Updates</h4>
					<div class="w3ls-form">
						<form action="#" method="post">
							<input type="email" placeholder="Email Id" name="Subscribe" required="">
							<button class="btn1">Subscribe here</button>
						</form>
					</div>


				</div>
			</div>
			<div class="col-md-6 w3-right-contact">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
				style="border:0" allowfullscreen></iframe>

			</div>
			<div class="clearfix"></div>

		</div>
	</div>

	<!-- contact -->

	<!-- contact -->
	<div class="contact1" id="mail">
		<div class="container">
			<div class="map-pos">
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Visit Us</h5>
						<p>Bmr St, Canada, New York, USA</p>
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
						<p>+040 354 658 252</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<form action="#" method="post">
				<div class="col-sm-6 contact-left">
					<input type="text" name="Name" placeholder="Your Name" required="">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="text" name="Mobile Number" placeholder="Mobile Number" required="">
				</div>
				<div class="col-sm-6 contact-right">
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<input type="submit" value="Submit">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
	<!-- //contact -->
	<div class="copyright">
		<div class="container">
			<p>© 2018 campus. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>

	<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Campus
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body">
					<img src="<?php echo base_url()?>assets/web/images/s1.jpg" alt=" " class="img-responsive" />
					<p>Ut enim ad minima veniam, quis nostrum 
						exercitationem ullam corporis suscipit laboriosam, 
						nisi ut aliquid ex ea commodi consequatur? Quis autem 
						vel eum iure reprehenderit qui in ea voluptate velit 
						esse quam nihil molestiae consequatur, vel illum qui 
						dolorem eum fugiat quo voluptas nulla pariatur.
						<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
						esse quam nihil molestiae consequatur.</i></p>
					</div>
				</div>
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