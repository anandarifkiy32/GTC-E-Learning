<<<<<<< HEAD
<div class="content-wrapper">
=======
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	<section class="content-header">
		<h1>
			My Profile
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li>User</li>
			<li><a href="<?php echo base_url('admin/peserta') ?>">Peserta</a></li>
			<li class="active">View</li>
		</ol>
	</section>
<<<<<<< HEAD
	<section class="content">
		<?php foreach ($profile as $p) {?>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default" style="border-radius: 0px;">
						<div class="panel-body">
							<div class="row">
								<a href="<?php echo base_url('admin/editphoto/'.$p->id_admin) ?>"><button type="button" class="btn btn-primary btn-flat" style="float: right; margin-right: 15px;"><i class="fa fa-pencil-square-o"></i> <span>Update Profil</span></button></a>
=======

	<!-- Main content -->
	<section class="content">
		<?php foreach ($profile as $p) {
		
		 ?>
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-default" style="border-radius: 0px;">
						<div class="panel-body">
							<div class="row">
								<a href="<?php echo base_url('admin/editphoto/'.$p->id_admin) ?>"><button type="button" class="btn btn-primary" style="float: right; margin-right: 15px;"><i class="fa fa-pencil-square-o"></i> <span>Update Profil</span></button></a>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
							</div>
							<div class="row">
								<center><a href="<?php echo base_url('assets/gtc_client/img/'.$p->img)?>"><img src="<?php echo base_url('assets/gtc_client/img/'.$p->img)?>" class="img-circle" width="100" height="100" style="margin-top: 10px;"></a>
								</center>
							</div>
							<div class="row">
								<div class="section-header text-center">
									<h2 style="padding-top: 10px;"><?php echo $p->nama; ?></h2>
									<h2 style="padding-top: 10px;"><?php echo $p->email; ?></h2>
								</div>
							</div>
						</div>
					</div>
<<<<<<< HEAD
				</div>
			</div>
		<?php } ?>
	</section>
</div>
=======
					</div>
				</div>
			<?php } ?>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
