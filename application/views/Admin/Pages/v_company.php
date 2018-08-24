<<<<<<< HEAD
<div class="content-wrapper">
=======
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
=======

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Company</h3>
					</div>
<<<<<<< HEAD
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
		</section>
	</div>
=======
					<!-- /.box-header -->
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
											<a href="<?php echo base_url('admin/delete_company/'.$c->email) ?>"><button type="button" class="btn btn-danger"></i> <span>Delete</span></button></a>
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
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
