<div id="blog" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- main blog -->
			
			<div id="main" class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table  class="table table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Kategori</th>
									<th>Status</th>
									<th>Nilai</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($test as $t){ ?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?php if($t->kategori == 'post'){echo 'Post-Test';}elseif ($t->kategori == 'pre') { echo 'Pre-Test'; }else{echo 'Praktik'; }  ?></td>

										<td>
											<?php 
											$where = array('id_test' => $t->id_test, 'id_peserta' => $id_peserta);
											$result = $this->Result_model->select_where($where);
											if($result->num_rows() == 1){
												echo $result->row('status');
											}else{
												echo 'Belum Mengerjakan';
											}
											?>

										</td>
										<td>
											<?php 
											if($result->num_rows() == 1){
												if($result->row('nilai') == 0){
													echo 'Sedang di review';
												}else{
													echo $result->row('nilai');	
												}
											}else{
												echo "-";
											}
											?>
										</td>

										<td><a href=
											<?php 
											if($result->num_rows() == 1){
												echo base_url('homepage/review/'.$result->row('code'));
											}else{
												echo base_url('homepage/quizoverview/'.$t->kategori.'/'.$this->uri->segment(3));
											}
											?>>
											<button class="btn btn-success btn-flat"><span class="fa fa-toggle-right"></span></button></a></td>
										</tr>
										<?php $no++; } ?>
									</tbody>
								</table>

							</div>
						</div>
					</div>
					<!-- /main blog -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>