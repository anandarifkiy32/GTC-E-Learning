<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Trainer
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><a href="<?php echo base_url('admin/trainer') ?>">Trainer</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<p class="box-title">Trainer
							<!-- <button type="button btn-flat btn-xs" data-toggle="modal" data-target="#modal-default1" title="Tambah Trainer"><span class="fa fa-plus"></span></button> -->
						</p>
					</div>
					<div class="box-body">
						<div class="table table-responsive">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Ttl</th>
										<th>Jenis Kelamin</th>
										<th>Telp</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$num=1;
									foreach ($trainer as $t) { ?>
										<tr>
											<td><?php echo $num; ?></td>
											<td><?php echo $t->nama; ?></td>
											<td><?php echo $t->tempatlahir; ?>,&nbsp<?php echo date('d-M-Y', strtotime($t->ttl)); ?></td>
											<td><?php echo $t->gender; ?></td>
											<td><?php echo $t->telp; ?></td>
											<td><?php echo $t->email; ?></td>
											<td>
												<a href="<?php echo base_url('admin/show_trainer/'.$t->unique_code) ?>"><button type="button" title="Lihat" class="btn btn-success btn-flat"></i> <span>View</span></button></a>
												<a href="<?php echo base_url('admin/delete_trainer/'.$t->unique_code) ?>"><button type="button"  title="Hapus" class="btn btn-danger btn-flat"></i> <span>Delete</span></button></a>
											</td>
										</tr>
										<?php $num++; } ?>
									</tbody>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Ttl</th>
											<th>Jenis Kelamin</th>
											<th>Telp</th>
											<th>Email</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>s
	</div>