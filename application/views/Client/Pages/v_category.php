	<div id="courses" class="section">
		<div class="container">
			<div class="row">
				<div class="section-header text-center">
					<h3><?php echo $category; ?> COURSES</h3>
				</div>
			</div>
			<div id="courses-wrapper">
				
					<div class="row">
						<!-- single course -->
						<?php foreach ($course as $c) { ?>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="<?php echo base_url('homepage/detailcourse/'.$c->slug) ?>" class="course-img">
									<img src="<?php echo base_url('assets/modul/'.$c->img)?>" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="<?php echo base_url('homepage/detailcourse/'.$c->slug) ?>"><?php echo $c->nama ?></a>
								<div class="course-details">
									<span class="course-category"><?php echo $category ?></span>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
