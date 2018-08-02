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
								<span class="course-category"><?php echo $c->category ?></span>
								<span class="course-price course-free">Free</span>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="center-btn">
					<a class="main-button icon-button" href="<?php echo base_url('homepage/coursecatalog/all/') ?>">More Courses</a>
				</div>
			</div>
		</div>
	</div>
	<div id="about" class="section">

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">

				<div class="col-md-6">
					<div class="section-header">
						<h2>Welcome to Edusite</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>

					<!-- feature -->
					<div class="feature">
						<i class="feature-icon fa fa-flask"></i>
						<div class="feature-content">
							<h4>Online Courses </h4>
							<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="feature">
						<i class="feature-icon fa fa-users"></i>
						<div class="feature-content">
							<h4>Expert Trainers</h4>
							<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="feature">
						<i class="feature-icon fa fa-comments"></i>
						<div class="feature-content">
							<h4>Community</h4>
							<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
						</div>
					</div>
					<!-- /feature -->

				</div>

				<div class="col-md-6">
					<div class="about-img">
						<img src="<?php echo base_url()?>assets/gtc_client/img/about.png" alt="">
					</div>
				</div>

			</div>
			<!-- row -->

		</div>
		<!-- container -->
	</div>