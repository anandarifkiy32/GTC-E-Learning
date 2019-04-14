<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Detail Trainer
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Daftar Trainer</li>
			<li class="active">Detail Trainer</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box" style="border-radius: 0px;">
					<div class="box-body">
						<div class="col-md-12">
							<div class="row">
								<?php foreach ($trainer as $t) { ?>
									<div class="row">
										<center><img src="<?php echo base_url('assets/profile_photos/trainer/'.$t->img)?>" class="img-circle" width="100" height="100" style="margin-top: 10px;">
										</center>
									</div>
									<div class="row">
										<div class="section-header text-center">
											<h3 style="padding-top: 10px;"><?php echo $t->nama; ?></h3>
										</div>
									</div>
									<div class="row">
										<center>
											<button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default2"><i class="fa fa-pencil-square-o"></i> <span>Ubah Password</span></button></center>
										</div>
										<div class="modal fade" id="modal-default2">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span></button>
															<h4 class="modal-title">Edit Password</h4>
														</div>
														<form action="<?php echo base_url('admin/updatepasswordtrainer') ?>" method="post" enctype="multipart/form-data">
															<div class="modal-body">
																<div class="box-body">
																	<div class="form-group">
																		<label>Password baru</label>
																		<input type="password" class="form-control" name="pass">
																		<input type="hidden" class="form-control" name="id_trainer" value="<?php echo $t->id_trainer; ?>">
																		<input type="hidden" class="form-control" name="slug" value="<?php echo $this->uri->segment(3); ?>">

																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
																<button type="submit" class="btn btn-primary">Simpan</button>
															</div>
														</form>
													</div>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>
								<div class="box-body">
									<div class="col-md-12">
										<div class="col-md-6">
											<br>
											<div class="table table-responsive" style="border: 0px;">
												<table class="table" rules="none">
													<?php foreach ($trainer as $t) { ?>
														<tr>
															<th>Nama</th>
															<td><?php echo $t->nama; ?></td>
														</tr>
														<tr>
															<th>Tempat Lahir</th>
															<td><?php echo $t->tempatlahir; ?></td>
														</tr>
														<tr>
															<th>Tanggal Lahir</th>
															<td><?php echo date('d-M-Y', strtotime($t->ttl)); ?></td>
														</tr>
													</table>
												</div>
											</div>
											<div class="col-md-6">
												<br>
												<div class="table table-responsive">
													<table class="table" rules="none">
														<tr>
															<th>Alamat</th>
															<td><?php echo $t->alamat; ?></td>
														</tr>
														<tr>
															<th>Email</th>
															<td><?php echo $t->email; ?></td>
														</tr>
														<tr>
															<th>Telp </th>
															<td><?php echo $t->telp; ?></td>
														</tr>
														<?php } ?>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="box">
									<div class="box-header"> 
										<center><b><h3>Course</h3></b></center>
									</div>
									<div class="box-body">
										<div class="table table-responsive">
											<table id="example2" class="table table-bordered table-hover">
												<thead>
													<tr>
														<th>#</th>
														<th>Nama Course</th>
														<th>Kategori</th>
														<th>Jumlah Modul</th>
														<th>Jumlah Peserta</th>
													</tr>
												</thead>
												<tbody>
													<?php $num = 1 ;foreach ($course as $c) { 
														$where = array(
															'id_modul' => $c->id_modul); 
														$jmlmodul = $this->Materi_model->select_where($where)->num_rows();
														$jmlpeserta = $this->Training_model->select_peserta($c->id_modul)->num_rows();
														?>
														<tr>
															<td><?php echo $num ?></td>
															<td><a href="<?php echo base_url('admin/show_modul/'.$c->slug) ?>"><?php echo $c->nama; ?></a></td>
															<td><?php echo $c->category; ?></td>
															<td><?php echo $jmlmodul; ?></td>
															<td><?php echo $jmlpeserta; ?></td>							
														</tr> 
														<?php $num++; } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
