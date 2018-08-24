<div id="blog" class="section">
	<div class="container">
		<?php if($this->session->flashdata('sertifikasi')){?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Permintaan sertifikasi anda berhasil dikirim!</h4>
            Kami akan segera menghubungi anda!
          </div> 
      <?php } ?>
		<div class="row">
			<div id="main" class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div id="main" class="col-md-12">
							<h4><?php echo $course; ?> Certification Terms and Conditions</h4>
							<?php foreach ($sertifikasi as $st) { ?>
								<div class="row">
									<div class="col-md-12">
										<p><b>1. Persyaratan Dasar Peserta Sertifikasi</b></p>
										<div class="col-md-12"><p><?php echo $st->persyaratan_dasar; ?></p></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<p><b>2. Hak Peserta Sertifikasi dan Kewajiban Pemegang Sertifikat</b></p>
										<div class="col-md-12"><p><b>a. Hak Peserta</b></p>
											<div class="col-md-12"><p><?php echo $st->hak; ?></p></div>
										</div>
										<div class="col-md-12"><p><b>b. Kewajiban Pemegang Sertifikat</b></p>
											<div class="col-md-12"><p><?php echo $st->kewajiban; ?></p></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<p><b>3. Biaya Sertifikasi</b></p>
										<div class="col-md-12"><p><?php echo $st->biaya; ?></p></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<p><b>4. Proses Sertifikasi</b></p>
										<div class="col-md-12"><p><?php echo $st->proses; ?></p></div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php if ($this->session->userdata('status') == 'login') { ?>
					<a href="<?php echo base_url('homepage/daftarsertifikasi/'.$this->uri->segment(3))?>"><button class="main-button icon-button" style="float: right;">Take Certification</button></a>
					<?php } else{ ?>
						<a href="<?php echo base_url('homepage/login/'.$this->uri->segment(3))?>"><button class="main-button icon-button" style="float: right;">Take Certification</button></a>
					<?php } ?> 
				</div>
			</div>
		</div>