<div id="blog" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- main blog -->
			<div id="main" class="col-md-12">
				<!-- blog post -->
				<div class="blog-post">
					<div class="table-responsive">
						<table class="table jawaban-group">
							<thead style="background-color: #4164a9;color: white;">
								<tr>
									<th colspan="4">
										<?php echo 'Course'.substr($banner, 6) ?>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th width="33.33%">
										<center>Jumlah Modul</center>
									</th>
									<th width="33.33%">
										<center>Jumlah Tes</center>
									<th width="33.33%">
										<center>Nilai</center>
									</th>
								</tr>
								<tr>
									<td style="border-top: none">
										<center><?php echo $materi->num_rows(); ?></center>
									</td>
									<td style="border-top: none">
										<center>
											<?php $jmltest = 0;
											foreach ($materi->result() as $m) { 
										$where = 'id_materi = '.$m->id_materi.' and tipesoal = "multiple" or tipesoal = "essay" and id_materi = '.$m->id_materi.' or tipesoal = "file" and id_materi = '.$m->id_materi;
										$test = $this->Test_model->select_where($where)->num_rows();
										$jmltest = $jmltest + $test;  
										}
										echo $jmltest;
										?>
										</center>
									<td style="border-top: none">
										<center>
											<?php $nilaiakhir = 0;
											foreach ($materi->result() as $m) { 
										$where = 'id_materi = '.$m->id_materi.' and tipesoal = "multiple" or tipesoal = "essay" and id_materi = '.$m->id_materi.' or tipesoal = "file" and id_materi = '.$m->id_materi;
										$test = $this->Test_model->select_where($where);
										$count = 0;
										$nilai = 0;
										foreach ($test->result() as $t) {
										  	$where = array('id_test' => $t->id_test, 'id_peserta' => $id_peserta);
										  	$result = $this->Result_model->select_where($where)->row('nilai');
										  	if($result != NULL){
										  		$nilai = $nilai + $result;
										  		$count++;
										  	}
										  }
										  if($count == 0){
										  	$nilaiakhir = $nilaiakhir + $nilai;	
										  }else{
										  	$nilai = $nilai / $count; 
										  	$nilaiakhir = $nilaiakhir + $nilai;	
										  } 
										    
										}
										echo number_format($nilaiakhir,2);
										?>
										</center>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered  jawaban-group">
							<?php foreach ($materi->result() as $m) { ?>  
								<thead style="background-color: #4164a9;color: white;">
									<tr>
										<?php
										$where = 'id_materi = '.$m->id_materi.' and tipesoal = "multiple" or tipesoal = "essay" and id_materi = '.$m->id_materi.' or tipesoal = "file" and id_materi = '.$m->id_materi;
										$test = $this->Test_model->select_where($where); 
										?>
										<th colspan="4">Modul : <?php echo $m->judul ?></th>
										<th>
											<?php $nilai = 0; $count = 0;
											foreach ($test->result() as $t) {
												$where = array('id_test' => $t->id_test,'id_peserta' => $id_peserta);
												$result = $this->Result_model->select_where($where);
												foreach ($result->result() as $r) {
													if($r->nilai != NULL){
														$nilai = $nilai + $r->nilai;
														$count++;
													}
												}
											}
											if($nilai == 0 && $count == 0){
												echo 'Nilai : -';
											}else{
												echo 'Nilai : '.number_format($nilai / $count,2);
											} ?>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th style="background-color: #e8e8e8"></th>
										<th style="background-color: #e8e8e8">Kategori</th>
										<th style="background-color: #e8e8e8">Nilai</th>
										<th style="background-color: #e8e8e8">Status</th>
										<th style="background-color: #e8e8e8">Kemajuan</th>
									</tr>
									<tr>
										<th style="background-color: #e8e8e8"><center><div>Teori</div></center></th>
										<td>
											<?php foreach($test->result() as $t){
												if($t->kategori == 'pre'){	
													echo '<p>Pretes</p>';
												}else{
													echo '<p>Postes</p>';
												}
											} ?>
										</td>
										<td>
											<?php foreach ($test->result() as $t) {
												$where = array('id_test' => $t->id_test,'id_peserta' => $id_peserta);
												$result = $this->Result_model->select_where($where);
												if($result->num_rows() == 1){
													foreach ($result->result() as $r) {
														if($r->nilai == NULL){
															echo '<p>Sedang di review</p>';
														}else{
															echo '<p>'.$r->nilai.'</p>';
														}	
													}
												}else{
													echo '<p>Belum Mengerjakan</p>';
												}

											} ?>
										</td>
										<td>
											<?php foreach ($test->result() as $t) {
												$where = array('id_test' => $t->id_test,'id_peserta' => $id_peserta);
												$result = $this->Result_model->select_where($where);
												if($result->num_rows() == 1){
													foreach ($result->result() as $r) {
														if($r->nilai == NULL){
															echo '<p>Sedang di review</p>';
														}elseif($r->nilai > 70){
															echo '<p>Lulus</p>';
														}elseif($r->nilai < 70){
															echo '<p>Tidak Lulus</p>';
														}	
													}
												}else{
													echo '<p>Belum Mengerjakan</p>';
												}

											} ?>
										</td>
										<td>
											<p>Maju</p>
										</td>

									</tr>
									<tr>
										<th style="background-color: #e8e8e8"><center><div>Praktik</div></center></th>

										<?php
										$where = 'id_materi = '.$m->id_materi.' and tipesoal = "file"';
										$test = $this->Test_model->select_where($where); 
										?>

										<td>
											<?php foreach($test->result() as $t){
												if($t->kategori == 'pre'){	
													echo '<p>Pretes</p>';
												}else{
													echo '<p>Postes</p>';
												}
											} ?>
										</td>
										<td>
											<?php foreach ($test->result() as $t) {
												$where = array('id_test' => $t->id_test,'id_peserta' => $id_peserta);
												$result = $this->Result_model->select_where($where);
												if($result->num_rows() == 1){
													foreach ($result->result() as $r) {
														if($r->nilai == NULL){
															echo '<p>Sedang di review</p>';
														}else{
															echo '<p>'.$r->nilai.'</p>';
														}	
													}
												}else{
													echo '<p>Belum Mengerjakan</p>';
												}

											} ?>
										</td>
										<td>
											<?php foreach ($test->result() as $t) {
												$where = array('id_test' => $t->id_test,'id_peserta' => $id_peserta);
												$result = $this->Result_model->select_where($where);
												if($result->num_rows() == 1){
													foreach ($result->result() as $r) {
														if($r->nilai == NULL){
															echo '<p>Sedang di review</p>';
														}elseif($r->nilai > 70){
															echo '<p>Lulus</p>';
														}elseif($r->nilai < 70){
															echo '<p>Tidak Lulus</p>';
														}	
													}
												}else{
													echo '<p>Belum Mengerjakan</p>';
												}

											} ?>
										</td>
										<td>
											<!-- <p>Maju</p> -->
										</td>
									</tr>
								</tbody>
								<?php } ?>
							</table>
						</div>
					</div>
					<!-- /blog post -->
				</div>
				<!-- /main blog -->
			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</div>