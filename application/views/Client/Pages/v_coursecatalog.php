
<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Course Catalog</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Course Catalog</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<?php foreach ($modul as $m) { ?>
			<div class="col-md-3">
				<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-black" style="background: url('../assets/modul/<?php echo $m->img; ?>') center center;background-repeat: no-repeat;background-size: 100% 100%;">
						<h3 class="widget-user-username"><?php echo $m->nama ?></h3>
					</div>

					<div class="box-footer">
						<a href="<?php echo base_url('dashboard/detailcourse/'.$m->id_modul)?>"><button class="btn"style="width: 100%;background-color: #1973B4;color: white;border-radius: 0px">Detail</button></a>
					</div>
				</div>
				<!-- /.widget-user -->
			</div>
			<?php } ?>
		</div>

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
