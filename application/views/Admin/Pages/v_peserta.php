<<<<<<< HEAD
<div class="content-wrapper">
=======
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	<section class="content-header">
		<h1>
			Peserta
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li>User</li>
			<li class="active"><a href="<?php echo base_url('admin/peserta') ?>">Peserta</a></li>
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
						<h3 class="box-title">Peserta</h3>
					</div>
<<<<<<< HEAD
=======
					<!-- /.box-header -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
									<th>Kantor</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$num=1;
								foreach ($peserta as $p) { ?>
									<tr>
										<td><?php echo $num; ?></td>
										<td><?php echo $p->nama; ?></td>
										<td><?php echo $p->tempatlahir; ?>,&nbsp<?php echo date('d-M-Y', strtotime($p->ttl)); ?></td>
										<td><?php echo $p->gender; ?></td>
										<td><?php echo $p->telp; ?></td>
										<td><?php echo $p->email; ?></td>
										<td><?php echo $p->kantor; ?></td>
										<td>
<<<<<<< HEAD
											<a href="<?php echo base_url('admin/show_peserta/'.$p->unique_code) ?>"><button type="button" class="btn btn-success btn-flat"></i> <span>View</span></button></a>
											<a href="<?php echo base_url('admin/delete_peserta/'.$p->unique_code) ?>"><button type="button" class="btn btn-danger btn-flat"></i> <span>Delete</span></button></a>
=======
											<a href="<?php echo base_url('admin/show_peserta/'.$p->unique_code) ?>"><button type="button" class="btn btn-success"></i> <span>View</span></button></a>
											<a href="<?php echo base_url('admin/delete_peserta/'.$p->unique_code) ?>"><button type="button" class="btn btn-danger"></i> <span>Delete</span></button></a>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
									<th>Kantor</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
					</div>
<<<<<<< HEAD
				</div>
			</div>
		</div>
	</section>
</div>
=======
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
