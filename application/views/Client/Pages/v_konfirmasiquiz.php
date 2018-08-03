<div id="blog" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- main blog -->
			
			<div id="main" class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php foreach ($quiz as $q) {?>
							<div class="table table-responsive">
								<table class="table" rules="none">
									<tr>
										<th>Modul</th>
										<td><b> :&nbsp<?php echo $namamodul; ?></b></td>
									</tr>
									<tr>
										<th>Materi</th>
										<td><b> :&nbsp<?php echo $q->namamateri; ?></b></td>
									</tr>
									<tr>
										<th>Jumlah Soal</th>
										<td><b> :&nbsp<?php echo $q->totalsoal; ?></b></td>
									</tr>
									<tr>
										<th>Batas Pengerjaan</th>
										<td><b> :&nbsp<?php echo date('H', strtotime($q->waktu)); ?>&nbspjam&nbsp<?php echo date('i', strtotime($q->waktu)); ?>&nbspmenit</td></b>
									</tr>
								</table>
							</div>
						<?php }; ?>
						<a href="<?php echo base_url('homepage/startquiz_2/'.$q->slug)?>"><button class="main-button icon-button" style="float: right;">Start Quiz</button></a>
					</div>
				</div>
			</div>
			<!-- /main blog -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</div>