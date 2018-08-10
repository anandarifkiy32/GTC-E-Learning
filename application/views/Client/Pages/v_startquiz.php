<div id="blog" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- main blog -->
			<div id="main" class="col-md-12">

				<!-- blog post -->
				<div class="blog-post">
					<b><div id="demo" style="float: right"></div></b><br><br>
					<form action="<?php echo base_url('homepage/submit') ?>" method="POST" id="myquiz">
						<?php if($tipesoal == "essay"){ ?>
							<input class="form-control" type="hidden" name="slug" value="<?php echo $this->uri->segment(3); ?>" required="" autocomplete="off">
							<?php $no = 1 ;foreach ($soal as $q) { ?>
								<div class="form-group">
									<label><?php echo $no.". ".$q->pertanyaan ?></label>
									<input class="form-control" type="text" name="jawaban<?php echo $q->id_soal ?>" required="">
								</div>
								<?php $no++; } }else{ $no = 1 ;foreach ($soal as $q) { ?>
									<div class="form-group jawaban-group">
										<label style="font-size: 16px"><?php echo $no.". ".$q->pertanyaan ?></label><br>
										<label class="jawaban"><?php echo $q->a ?>
											<input type="radio" name="jawaban<?php echo $q->id_soal ?>" value="A">
											<span class="checkmark"></span>
										</label>
										<label class="jawaban"><?php echo $q->b ?>
											<input type="radio" name="jawaban<?php echo $q->id_soal ?>" value="B">
											<span class="checkmark"></span>
										</label>
										<label class="jawaban"><?php echo $q->c ?>
											<input type="radio" name="jawaban<?php echo $q->id_soal ?>" value="C">
											<span class="checkmark"></span>
										</label>
									</div>
									<?php $no++; }} ?>
									<input type="text" name="id_test" value="<?php echo $id_test ?>">
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