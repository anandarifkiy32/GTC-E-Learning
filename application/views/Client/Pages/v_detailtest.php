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
						<table class="table table-bordered  jawaban-group">
							<?php foreach ($materi as $m) { ?>  
								<thead style="background-color: #4164a9;color: white;">
									<tr>
										<th colspan="4">Modul : <?php echo $m->judul ?></th>
										<th>Nilai : 95</th>
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
										<?php
										$where = 'id_materi = '.$m->id_materi.' and tipesoal = "multiple" or tipesoal = "essay" and id_materi = '.$m->id_materi;
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
													echo '<p>-</p>';
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
															echo '<p>-</p>';
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
													echo '<p>-</p>';
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
															echo '<p>-</p>';
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