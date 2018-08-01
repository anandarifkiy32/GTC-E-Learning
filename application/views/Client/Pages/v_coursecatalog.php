<div id="blog" class="section">

	<!-- container -->
	<div class="container">


		<!-- row -->
		<div class="row">

			<!-- main blog -->
			<div id="main" class="col-md-9">

				<!-- row -->
				<div class="row">
					<?php foreach ($results as $data) { ?>
						<!-- single blog -->
						<div class="col-md-6">
							<div class="single-blog">
								<div class="blog-img">
									<a href="<?php echo base_url('homepage/detailcourse/'.$data->slug) ?>">
										<img src="<?php echo base_url().'assets/modul/'.$data->img ?>" alt="">
									</a>
								</div>
								<h4><a href="<?php echo base_url('homepage/detailcourse/'.$data->slug) ?>"><?php echo $data->namamodul ?></a></h4>
								<div class="blog-meta">
									<span class="blog-meta-author">By: <a href="#"><?php echo $data->namatrainer ?></a></span>
								</div>
							</div>
						</div>
						<!-- /single blog -->
						<?php } ?>
						<!-- single blog -->
						<!-- /single blog -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">

						<!-- pagination -->
						<br>
						<center>
							<?php if (isset($links)) {
								echo $links;
							} ?>
						</center>
						<!-- pagination -->

					</div>
					<!-- /row -->
				</div>
				<!-- /main blog -->

				<!-- aside blog -->
				<div id="aside" class="col-md-3">

					<!-- category widget -->
					<div class="widget category-widget">
						<h3>Categories</h3>
						<?php foreach ($category as $ct) { ?>
						<a class="category" href="#"><?php echo $ct->category; ?> <span><?php echo $ct->jumlah; ?></span></a>
						<?php } ?>
					</div>
					<!-- /category widget -->

					<!-- posts widget -->
					<div class="widget posts-widget">
						<h3>Recents Posts</h3>

						<?php foreach ($recentpost as $rp) { ?>
						<div class="single-post">
							<a class="single-post-img" href="<?php echo base_url('homepage/detailcourse/'.$rp->slug) ?>">
								<img src="<?php echo base_url('assets/modul/'.$rp->img)?>" alt="">
							</a>
							<a href="<?php echo base_url('homepage/detailcourse/'.$rp->slug) ?>"><?php echo $rp->namamodul; ?></a>
							<p><small>By : <?php echo $rp->namatrainer; ?></small></p>
						</div>
						<?php } ?>

					</div>
					<!-- /posts widget -->


				</div>
				<!-- /aside blog -->

			</div>
			<!-- row -->

		</div>
		<!-- container -->

	</div>