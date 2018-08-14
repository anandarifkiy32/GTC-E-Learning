
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Review
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
			<li class="active">Detail Peserta</li>
			<li class="active">Review</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Riview Jawaban Peserta</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<?php if($tipesoal == 'essay') { ?>
						<form role="form" action="<?php echo base_url('trainer/submitreview/'.$this->uri->segment(3).'/'.$this->uri->segment(4)) ?>" method="POST">
							<div class="box-body">
								<?php $no = 1 ;foreach ($jawaban as $j) { ?>
									<div class="form-group">
										<label for="exampleInputEmail1"><?php echo $no.'. '.$j->pertanyaan ?></label>
										<input type="text" class="form-control" value="Jawaban :  <?php echo $j->jawaban ?>" readonly>
										<input type="text" class="form-control" name="<?php echo $j->id_jawaban ?>" placeholder="Nilai" value="<?php echo $j->nilai ?>" style="width:60px">
									</div>
									<?php $no++; } ?>

									<div class="box-footer">
										<button type="submit" class="btn btn-primary btn-flat">Submit</button>
									</div>
								</div>
								
							</form>
						<?php } else{  ?>
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
											<?php } if($j->nilai == '1'){ ?>
												<input type="text" class="form-control" readonly="" value="Status : Jawaban Benar">
											<?php } else{ ?>
												<input type="text" class="form-control" readonly="" value="Status : Jawaban Salah">
											<?php } ?>
										</div>
										<?php $no++; } ?>
									<div class="box-footer">
										<a href="<?php echo base_url('trainer/detailpeserta/'.$this->uri->segment(3)) ?>">
											<button type="button" class="btn btn-default btn-flat">Back</button>
										</a>
									</div>
									</div>
								</form>

							<?php } ?>
						</div>
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
<!-- /.content-wrapper