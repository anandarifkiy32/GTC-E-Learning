<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Profil Peserta
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li>User</li>
			<li><a href="<?php echo base_url('admin/peserta') ?>">Peserta</a></li>
			<li class="active">View</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default" style="border-radius: 0px;">
					<div class="panel-body">
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="row">
									<?php foreach ($peserta as $p) { ?>
										<div class="row">
										<a href="<?php echo base_url('admin/delete_peserta/'.$p->unique_code) ?>"><button type="button" class="btn btn-danger" style="float: left;"></i> <span>Delete</span></button></a>
										</div>
										<div class="row">
										<center><a href="<?php echo base_url('assets/img/'.$p->img)?>"><img src="<?php echo base_url('assets/gtc_client/img/'.$p->img)?>" class="img-circle" width="100" height="100" style="margin-top: 10px;"></a>
										</center>
									</div>
									</div>
									<div class="row">
										<div class="section-header text-center">
											<h2 style="padding-top: 10px;"><?php echo $p->nama; ?></h2>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="col-md-6">
								<div class="table table-responsive" style="line-height: 0.5;">
									<table class="table" rules="none">
										<tr>
											<th><center>Course</center></th>
											<th><center>Certification</center></th>
										</tr>
										<?php foreach ($course as $c) {?>
											<tr>
												<td><a href="<?php echo base_url('admin/show_modul/'.$c->slug) ?>"><?php echo "-"; echo $c->namamodul; ?></a></td>
												<td><a href="<?php echo base_url('admin/show_modul/'.$slugmodul) ?>"><?php echo "-"; echo $sertifikasi; ?></a></td>
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
			<div class="col-md-12">
				<div class="panel panel-default" style="border-radius: 0px;">
					<div class="panel-body">
						<div class="col-md-12">
							<div class="col-md-6">
								<br>
								<div class="table table-responsive" style="border: 0px;">
									<table class="table" rules="none">
										<?php foreach ($peserta as $p) { ?>
											<tr>
												<th>Tempat Lahir</th>
												<td><?php echo $p->tempatlahir; ?></td>
											</tr>
											<tr>
												<th>Tanggal Lahir</th>
												<td><?php echo date('d-M-Y', strtotime($p->ttl)); ?></td>
											</tr>
											<tr>
												<th>Alamat</th>
												<td><?php echo $p->alamat; ?></td>
											</tr>
											<tr>
												<th>Telephon / Hp</th>
												<td><?php echo $p->telp; ?></td>
											</tr>
											<tr>
												<th>E-mail</th>
												<td><?php echo $p->email; ?></td>
											</tr>
										</table>
									</div>
								</div>
								<div class="col-md-6">
									<br>
									<div class="table table-responsive">
										<table class="table" rules="none">
											<tr>
												<th>Kantor</th>
												<td><?php echo $p->kantor; ?></td>
											</tr>
											<tr>
												<th>Alamat Kantor</th>
												<td><?php echo $p->alamat_kantor; ?></td>
											</tr>
											<tr>
												<th>Telp Kantor</th>
												<td><?php echo $p->telp_kantor; ?></td>
											</tr>
											<tr rowspan="2">
												<th>Biografi</th>
												<td><?php echo $p->biografi; ?></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</section>
</div>
