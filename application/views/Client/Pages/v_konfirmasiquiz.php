<div id="blog" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- main blog -->
			
			<div id="main" class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php if($quiz->row('jml_soal') > 0){
							foreach ($quiz->result() as $q) {?>
								<div class="table table-responsive">
									<table class="table" rules="none">
										<tr>
											<th>Modul</th>
											<td><b> :&nbsp<?php echo $namamodul; ?></b></td>
										</tr>
										<tr>
											<th>Materi</th>
											<td><b> :&nbsp<?php echo $q->judul; ?></b></td>
										</tr>
										<tr>
											<th>Jumlah Soal</th>
											<td><b> :&nbsp<?php echo $q->jml_soal; ?></b></td>
										</tr>
										<tr>
											<th>Batas Pengerjaan</th>
											<td><b> : <?php echo $q->waktu ?> Menit</td></b>
										</tr>
									</table>
								</div>
								<a href="<?php echo base_url('homepage/startquiz/'.$this->uri->segment(3).'/'.$q->code)?>"><button class="main-button icon-button" style="float: right;">Start Quiz</button></a>
								<?php } }else{ ?>
									<form>
										<center><h4>Maaf quiz belum tersedia</h4></center>
									</form>
									<?php } ?>
								</div>
							</div>
						</div>
						<!-- /main blog -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>