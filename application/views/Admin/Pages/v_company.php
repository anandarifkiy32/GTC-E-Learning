<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Company
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Company</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">

				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Company</h3>
					</div>
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
											<a href="<?php echo base_url('Admin/Delete_Company/'.$c->unique_code) ?>"><button type="button" class="btn btn-danger"></i> <span>Delete</span></button></a>
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