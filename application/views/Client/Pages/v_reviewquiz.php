<div id="blog" class="section">
	<div class="container">
		<div class="row">
			<div id="main" class="col-md-12">
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