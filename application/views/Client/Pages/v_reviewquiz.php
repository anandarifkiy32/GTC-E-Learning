<div id="blog" class="section">
<<<<<<< HEAD
	<div class="container">
		<div class="row">
			<div id="main" class="col-md-12">
=======

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- main blog -->
			<div id="main" class="col-md-12">

				<!-- blog post -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
				<div class="blog-post">
					<form action="<?php echo base_url('homepage/submit') ?>" method="POST" id="myquiz">
						<?php if($tipesoal == "essay"){ ?>
							<input class="form-control" type="hidden" name="slug" value="<?php echo $this->uri->segment(3); ?>" required="" autocomplete="off">
							<?php $no = 1 ;foreach ($jawaban as $q) { ?>
								<div class="form-group">
									<label><?php echo $no.". ".$q->pertanyaan ?></label>
									<input class="form-control" type="text" name="jawaban<?php echo $q->id_soal ?>" required="">
								</div>
								<?php $no++; } }else{ $no = 1 ;foreach ($jawaban as $q) { ?>
									<div class="form-group jawaban-group">
										<label style="font-size: 16px"><?php echo $no.". ".$q->pertanyaan ?></label><br>
										<label class="jawaban"><?php echo $q->a ?>
<<<<<<< HEAD
										<input type="radio" name="jawaban<?php echo $q->id_soal ?>" disabled value="A" 
										<?php 
										if($q->jawaban == 'A'){
											echo 'checked';
										}
										?>
										>
										<span class="checkmark" style[:checked]="background-color:red">
											
										</span>
									</label>
									<label class="jawaban"><?php echo $q->b ?>
									<input type="radio" name="jawaban<?php echo $q->id_soal ?>" disabled value="B"
									<?php 
									if($q->jawaban == 'B'){
										echo 'checked';
									}
									?>
									>
									<span class="checkmark" style[:checked]="background-color:red">	
									</span>
								</label>
								<label class="jawaban"><?php echo $q->c ?>
								<input type="radio" name="jawaban<?php echo $q->id_soal ?>" disabled value="C"
								<?php 
								if($q->jawaban == 'C'){
									echo 'checked';
								}
								?>
								>
								<span class="checkmark" style[:checked]="background-color:red">
									
								</span>
							</label>
						</div>
						<?php $no++; }} ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
=======
											<input type="radio" name="jawaban<?php echo $q->id_soal ?>" disabled value="A" 
											<?php 
												if($q->jawaban == 'A'){
													echo 'checked';
												}
											?>
											>
											<span class="checkmark" style[:checked]="background-color:red">
												
											</span>
										</label>
										<label class="jawaban"><?php echo $q->b ?>
											<input type="radio" name="jawaban<?php echo $q->id_soal ?>" disabled value="B"
											<?php 
												if($q->jawaban == 'B'){
													echo 'checked';
												}
											?>
											>
											<span class="checkmark" style[:checked]="background-color:red">	
											</span>
										</label>
										<label class="jawaban"><?php echo $q->c ?>
											<input type="radio" name="jawaban<?php echo $q->id_soal ?>" disabled value="C"
											<?php 
												if($q->jawaban == 'C'){
													echo 'checked';
												}
											?>
											>
											<span class="checkmark" style[:checked]="background-color:red">
												
											</span>
										</label>
									</div>
									<?php $no++; }} ?>
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
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
