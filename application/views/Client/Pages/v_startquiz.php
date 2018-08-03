<div id="blog" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- main blog -->
			<div id="main" class="col-md-12">

				<!-- blog post -->
				<div class="blog-post">

					<form>
						<?php $no=1 ;foreach ($quiz as $q) { ?>
						<div class="form-group">
							<label><?php echo $no.". ".$q->soal ?></label>
							<input class="form-control" type="text" name="jawaban" required="">
						</div>
						<?php $no++; } ?>
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