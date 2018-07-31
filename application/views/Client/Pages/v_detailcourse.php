<div id="blog" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- main blog -->
			<div id="main" class="col-md-9">
				<?php foreach ($modul as $m) { ?>
				<!-- blog post -->
				<div class="blog-post">

					<img src="<?php echo base_url('assets/modul/'.$m->img)?>" alt="" style="object-fit:cover;width: 800px; height: 450px"><br><br>
					<?php echo $m->deskripsi ?>
				</div>
				<!-- /blog post -->
				<br>
				<a href="<?php echo base_url('homepage/startcourse/'.$m->id_modul) ?>" class="main-button icon-button">Start Learning</a>
				<?php } ?>
				<!-- blog share -->
				<div class="blog-share">
					<h4>Share This Post:</h4>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
				</div>
				<!-- /blog share -->

			</div>
			<!-- /main blog -->

			<!-- aside blog -->
			<div id="aside" class="col-md-3">




				<!-- posts widget -->
				<div class="widget posts-widget">
					<h3>Related Course</h3>

					<!-- single posts -->
					<div class="single-post">
						<a class="single-post-img" href="blog-post.html">
							<img src="./img/post01.jpg" alt="">
						</a>
						<a href="blog-post.html">Pro eu error molestie deserunt.</a>
						<p><small>By : John Doe .18 Oct, 2017</small></p>
					</div>
					<!-- /single posts -->

					<!-- single posts -->
					<div class="single-post">
						<a class="single-post-img" href="blog-post.html">
							<img src="./img/post02.jpg" alt="">
						</a>
						<a href="blog-post.html">Pro eu error molestie deserunt.</a>
						<p><small>By : John Doe .18 Oct, 2017</small></p>
					</div>
					<!-- /single posts -->

					<!-- single posts -->
					<div class="single-post">
						<a class="single-post-img" href="blog-post.html">
							<img src="./img/post03.jpg" alt="">
						</a>
						<a href="blog-post.html">Pro eu error molestie deserunt.</a>
						<p><small>By : John Doe .18 Oct, 2017</small></p>
					</div>
					<!-- /single posts -->

				</div>
				<!-- /posts widget -->



			</div>
			<!-- /aside blog -->

		</div>
		<!-- row -->

	</div>
	<!-- container -->

</div>