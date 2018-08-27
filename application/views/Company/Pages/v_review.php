<div class="content-wrapper">
	<section class="content-header">
		<a href="<?php echo base_url('company/detailpeserta/'.$this->uri->segment(3)) ?>"><button type="button" class="btn btn-success btn-flat"><span class="fa fa-arrow-left"> Back</span></button></a>
		<h1 style="padding-top: 5px">
			Review
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
			<li class="active">Detail Peserta</li>
			<li class="active">Review</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Riview Jawaban Peserta</h3>
					</div>
					<?php if($tipesoal == 'essay') { ?>
							<form role="form" action="<?php echo base_url('company/submitreview/'.$this->uri->segment(3).'/'.$this->uri->segment(4)) ?>" method="POST">
								<div class="box-body">
									<?php $no = 1 ;foreach ($jawaban as $j) { ?>
										<div class="form-group">
											<label for="exampleInputEmail1"><?php echo $no.'. '.$j->pertanyaan ?></label>
											<input type="text" class="form-control" value="Jawaban :  <?php echo $j->jawaban ?>" readonly>
											<input type="text" class="form-control" placeholder="Nilai" value="Nilai Inputan Trainer : <?php echo $j->nilai ?>" readonly>
											<input type="text" class="form-control" name="<?php echo $j->id_jawaban ?>" placeholder="Nilai" value="<?php echo $j->nilaicompany ?>" style="width:60px">
										</div>
										<?php $no++; } ?>
										<div class="box-footer">
											<a href="<?php echo base_url('company/detailpeserta/'.$this->uri->segment(3)) ?>"><button type="button" class="btn btn-default btn-flat">Back</button></a>
											<button type="submit" class="btn btn-primary btn-flat" style="float: right;">Submit</button>
										</div>
									</div>
								</form>
							<?php } elseif($tipesoal == 'multiple'){  ?>
								<form>
									<div class="box-body">
										<?php $no = 1 ;foreach ($jawaban as $j) { ?>
											<div class="form-group">
												<label for="exampleInputEmail1"><?php echo $no.'. '.$j->pertanyaan ?></label>
												<?php if($j->jawaban == 'A'){ ?>
													<input type="text" class="form-control" readonly="" value="Jawban : a. <?php echo $a ?>">
												<?php } elseif($j->jawaban == 'B'){ ?>
													<input type="text" class="form-control" readonly="" value="Jawaban : b. <?php echo $b ?>">
												<?php }else{ ?>
													<input type="text" class="form-control" readonly="" value="Jawaban : c. <?php echo $c ?>">
												<?php } ?>

												<?php if($j->jawaban == 'A'){ ?>
													<input type="text" class="form-control" readonly="" value="Nilai : <?php echo $j->bobot_a ?>">
												<?php } elseif($j->jawaban == 'B'){ ?>
													<input type="text" class="form-control" readonly="" value="Nilai : <?php echo $j->bobot_b ?>">
												<?php }else{ ?>
													<input type="text" class="form-control" readonly="" value="Nilai : <?php echo $j->bobot_c ?>">
												<?php } ?>


											</div>
											<?php $no++; } ?>
											<div class="box-footer">
												<a href="<?php echo base_url('company/detailpeserta/'.$this->uri->segment(3)) ?>">
													<button type="button" class="btn btn-default btn-flat">Back</button>
												</a>
											</div>
										</div>
									</form>
								<?php } 
							elseif($tipesoal == 'file'){?>
								<form role="form" action="<?php echo base_url('company/submitreview/'.$this->uri->segment(3).'/'.$this->uri->segment(4)) ?>" method="POST">
									<div class="box-body">
										<?php $no = 1 ;foreach ($jawaban as $j) { ?>
											<div class="form-group">
												<label for="exampleInputEmail1"><?php echo $no.'. '.$j->pertanyaan ?></label>
												<p>Jawaban (klik untuk melihat): <a href="#" data-toggle="modal" data-target="#modal-default<?php echo $j->id_jawaban ?>"><?php echo $j->jawaban ?></a></p>
												<input type="text" class="form-control" placeholder="Nilai" value="Nilai Inputan Trainer : <?php echo $j->nilai ?>" readonly>
												<input type="text" class="form-control" name="<?php echo $j->id_jawaban ?>" placeholder="Nilai" value="<?php echo $j->nilaicompany ?>" style="width:60px">
											</div>
											<?php $no++; } ?>

											<div class="box-footer">
												<a href="<?php echo base_url('company/detailpeserta/'.$this->uri->segment(3)) ?>"><button type="button" class="btn btn-default btn-flat">Back</button></a>
												<button type="submit" class="btn btn-primary btn-flat" style="float: right;">Submit</button>
											</div>
										</div>
									</form>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php foreach ($jawaban as $j) { ?>
						<div class="modal fade" id="modal-default<?php echo $j->id_jawaban ?>">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span></button>
											<h4 class="modal-title"><?php echo $j->pertanyaan; ?></h4>
										</div>
										<div class="modal-body">
											<div class="box-body">
												<div class="embed-responsive embed-responsive-16by9" style="width: 100%;height: 100%">
													<div class="embed-responsive-item">
														<!-- <iframe src="<?php echo base_url('assets/video/'.$j->jawaban)?>?rel=0" autoplay="false" frameborder="0"></iframe> -->
														<video src="<?php echo base_url('assets/video/'.$j->jawaban)?>?rel=0" controls>
														</video>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</section>
				</div>