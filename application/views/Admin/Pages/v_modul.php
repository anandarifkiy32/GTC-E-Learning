<<<<<<< HEAD
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Course
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><a href="<?php echo base_url('admin/course') ?>">Course</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Course</h3>
					</div>
					<div class="box-body">
						<div class="table table-responsive">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Kategori</th>
										<th>Trainer</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$num=1;
									foreach ($modul as $m) { ?>
										<tr>
											<td><?php echo $num; ?></td>
											<td><?php echo $m->namamodul; ?></td>
											<td><?php echo $m->category; ?></td>
											<td><?php echo $m->namatrainer; ?></td>
											<td>
												<a href="<?php echo base_url('admin/show_modul/'.$m->slug) ?>"><button type="button" class="btn btn-success btn-flat"></i> <span>View</span></button></a>
												<a href="<?php echo base_url('admin/delete_modul/'.$m->slug) ?>"><button type="button" class="btn btn-danger btn-flat"></i> <span>Delete</span></button></a>
											</td>
										</tr>
										<?php $num++; } ?>
									</tbody>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Kategori</th>
											<th>Trainer</th>
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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Modul
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><a href="<?php echo base_url('admin/modul') ?>">Modul</a></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">

				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Modul</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Kategori</th>
									<th>Trainer</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$num=1;
								foreach ($modul as $m) { ?>
									<tr>
										<td><?php echo $num; ?></td>
										<td><?php echo $m->namamodul; ?></td>
										<td><?php echo $m->category; ?></td>
										<td><?php echo $m->namatrainer; ?></td>
										<td>
											<a href="<?php echo base_url('admin/show_modul/'.$m->slug) ?>"><button type="button" class="btn btn-success"></i> <span>View</span></button></a>
											<a href="<?php echo base_url('admin/delete_modul/'.$m->slug) ?>"><button type="button" class="btn btn-danger"></i> <span>Delete</span></button></a>
										</td>
									</tr>
								<?php $num++; } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Kategori</th>
									<th>Trainer</th>
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
