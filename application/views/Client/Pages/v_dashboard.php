<div id="courses" class="section">
	<div class="container">
		<div class="row">
			<div class="section-header text-center">
				<h2>Explore Courses</h2>
			</div>
		</div>
		<div id="courses-wrapper">
			<div class="row">
<<<<<<< HEAD
				<?php foreach ($category as $c) { ?>
					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="<?php echo base_url('homepage/category/'.$c->slug) ?>" class="course-img">
								<img src="<?php echo base_url('assets/modul/category/'.$c->img)?>" alt="">
								<i class="course-link-icon fa fa-link"></i>
							</a>
							<a class="course-title" href="<?php echo base_url('homepage/category/'.$c->slug) ?>"><?php echo $c->category ?></a>
							
=======
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
							</div>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
