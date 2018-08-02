<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Trainer
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Trainer</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">

				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Trainer</h3>
					</div>
					<!-- /.box-header -->
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
											<a href="<?php echo base_url('Admin/Show_Trainer/'.$t->unique_code) ?>"><button type="button" class="btn btn-success"></i> <span>View</span></button></a>
											<a href="<?php echo base_url('Admin/Delete_Trainer/'.$t->unique_code) ?>"><button type="button" class="btn btn-danger"></i> <span>Delete</span></button></a>
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