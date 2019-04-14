<div id="courses" class="section">
	<div class="container">
		<div class="row">
			<div class="section-header text-center">
				<h2>Explore Course Areas</h2>
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
					<a class="main-button icon-button" href="<?php echo base_url('homepage/coursecatalog/all/') ?>">More Courses</a>
				</div>
			</div>
		</div>
	</div>
