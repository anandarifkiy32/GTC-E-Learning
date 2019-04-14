<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Company
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li>User</li>
			<li class="active"><a href="<?php echo base_url('admin/company') ?>">Company</a></li>
		</ol>
	</section>
	<section class="content">
		<?php if($this->session->flashdata('daftarcompany') == TRUE){ ?>
		<div class="row"><div class="col-md-12">
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-ban"></i> Gagal!</h4>
			Email sudah terdaftar.
		</div>
		</div>
	</div>
		<?php } ?>
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Company</h3>
						<button class="btn btn-primary btn-flat" style="float:right;" data-toggle="modal" data-target="#modal-default1" title="Tambah Trainer"><span class="fa fa-plus"></span> Company</button>
					</div>
					<div class="box-body">
						<div class="table table-responsive">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Telp</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$num=1;
									foreach ($company as $c) { ?>
										<tr>
											<td><?php echo $num; ?></td>
											<td><?php echo $c->nama; ?></td>
											<td><?php echo $c->alamat; ?></td>
											<td><?php echo $c->telp; ?></td>
											<td><?php echo $c->email; ?></td>
											<td>
												<a href="<?php echo base_url('admin/delete_company/'.$c->id_company) ?>"><button type="button" class="btn btn-danger btn-flat"></i> <span>Delete</span></button></a>
											</td>
										</tr>
										<?php $num++; } ?>
									</tbody>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Alamat</th>
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
			<div class="modal fade" id="modal-default1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Tambah Company</h4>
								</div>
								<form action="<?php echo base_url('admin/registercompany') ?>" method="post">
									<div class="modal-body">
										<div class="box-body">
											<div class="form-group">
												<label for="exampleInputEmail1">Nama Company</label>
												<input type="text" class="form-control" id="exampleInputEmail1" name="nama">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Email Company</label>
												<input type="text" class="form-control" id="exampleInputEmail1" name="email">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Tambah</button>
									</div>
								</form>
							</div>
						</div>
					</div>
		</section>
	</div>