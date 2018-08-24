<div id="blog" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- main blog -->
			
			<div id="main" class="col-md-12">
<<<<<<< HEAD
=======
			<?php if($test == NULL){?>
				<div class="alert alert-warning alert-dismissible">
					<h4><i class="icon fa fa-info-circle"></i> Ups !</h4>
					Sepertinya belum ada quiz untuk modul ini.
				</div>
			<?php }else{ ?>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD

=======
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
										</td>
										<td>
											<?php 
											if($result->num_rows() == 1){
												if($result->row('nilai') == NULL){
													echo 'Sedang di review';
												}else{
													echo $result->row('nilai');	
												}
											}else{
												echo "-";
											}
											?>
										</td>

										<td>
											<?php 
											if($result->num_rows() != 1){ ?>
											<a href=<?php echo base_url('homepage/quizoverview/'.$t->kategori.'/'.$t->code);
											?>>
											<button class="btn btn-success btn-flat"><span class="fa fa-toggle-right"></span></button></a></td>
											<?php } ?>
										</tr>
										<?php $no++; } ?>
									</tbody>
								</table>

							</div>
						</div>
<<<<<<< HEAD
=======
						<?php } ?>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
					</div>
					<!-- /main blog -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>