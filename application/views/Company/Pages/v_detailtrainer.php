<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Detail Trainer
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Daftar Trainer</li>
			<li class="active">Detail Trainer</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box" style="border-radius: 0px;">
					<div class="box-body">
						<div class="col-md-12">
							<div class="row">
								<?php foreach ($trainer as $t) { ?>
									<div class="row">
										<center><img src="<?php echo base_url('assets/profile_photos/trainer/'.$t->img)?>" class="img-circle" width="100" height="100" style="margin-top: 10px;">
										</center>
									</div>
									<div class="row">
										<div class="section-header text-center">
											<h3 style="padding-top: 10px;"><?php echo $t->nama; ?></h3>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="box-body">
						<div class="col-md-12">
							<div class="col-md-6">
								<br>
								<div class="table table-responsive" style="border: 0px;">
									<table class="table" rules="none">
										<?php foreach ($trainer as $t) { ?>
											<tr>
												<th>Nama</th>
												<td><?php echo $t->nama; ?></td>
											</tr>
											<tr>
												<th>Tempat Lahir</th>
												<td><?php echo $t->tempatlahir; ?></td>
											</tr>
											<tr>
												<th>Tanggal Lahir</th>
												<td><?php echo date('d-M-Y', strtotime($t->ttl)); ?></td>
											</tr>
										</table>
									</div>
								</div>
								<div class="col-md-6">
									<br>
									<div class="table table-responsive">
										<table class="table" rules="none">
											<tr>
												<th>Alamat</th>
												<td><?php echo $t->alamat; ?></td>
											</tr>
											<tr>
												<th>Email</th>
												<td><?php echo $t->email; ?></td>
											</tr>
											<tr>
												<th>Telp </th>
												<td><?php echo $t->telp; ?></td>
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
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header"> 
						<center><b><h3>Course</h3></b></center>
					</div>
					<div class="box-body">
						<div class="table table-responsive">
							<table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Course</th>
										<th>Kategori</th>
										<th>Jumlah Modul</th>
										<th>Jumlah Peserta</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php $num = 1 ;foreach ($course as $c) { 
										$where = array(
											'id_modul' => $c->id_modul); 
										$jmlmodul = $this->Materi_model->select_where($where)->num_rows();
										$jmlpeserta = $this->Training_model->select_peserta($c->id_modul)->num_rows();
										?>
										<tr>
											<td><?php echo $num ?></td>
											<td><?php echo $c->nama; ?></td>
											<td><?php echo $c->category; ?></td>
											<td><?php echo $jmlmodul; ?></td>
											<td><?php echo $jmlpeserta; ?></td>
											<td>
												<a href="<?php echo base_url('company/detailcourse/'.$c->slug) ?>"><button type="button" class="btn btn-primary btn-xs btn-flat">View</button></a>
											</td>
										</tr> 
										<?php $num++; } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>