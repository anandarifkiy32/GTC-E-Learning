
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
			<li class="active">Detail</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<?php foreach ($modul as $m ) { ?>
			<div class="row">
				<div class="col-md-5">
					<div class="box box-widget widget-user2">
						<!-- Add the bg color to the header using any of the bg-* classes -->
						<div class="widget-user-header2 bg-black" style="background: url('/gtclearning/assets/modul/<?php echo $m->img ?>');background-repeat: no-repeat;background-size: 100% 100%;height: 320px">
							<h3 class="widget-user-username"><?php echo $m->nama ?></h3>
						</div>
						<div class="box-footer" name="frm">

							<?php if($cekregister == '1'){  ?>
								<center><p style="margin:10px">Anda sudah terdaftar</p></center>
							<?php }else{ ?>
								<input type="checkbox" class="cekbox" value="Bike" style="margin: 10px">Saya telah membaca persyaratan
								<a href="<?php echo base_url('dashboard/registercourse/'.$this->uri->segment(3))?>">
									<button class="btn tombol" name="tombol" disabled style="width: 100%;background-color: #1973B4;color: white;border-radius: 0px">
										Start Course Now
									</button>
								</a>

								<?php } ?>


							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
								<li class="active" style="width:49%"><a href="#tab_1" data-toggle="tab">Deskripsi</a></li>
								<li style="width: 49%"><a href="#tab_2" data-toggle="tab">Persyaratan</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1">
									<?php echo $m->deskripsi ?>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="tab_2">
									The European languages are members of the same family. Their separate existence is a myth.
									For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
									in their grammar, their pronunciation and their most common words. Everyone realizes why a
									new common language would be desirable: one could refuse to pay expensive translators. To
									achieve this, it would be necessary to have uniform grammar, pronunciation and more common
									words. If several languages coalesce, the grammar of the resulting language is more simple
									and regular than that of the individual languages.
								</div>
							</div>
							<!-- /.tab-content -->
						</div>
						<!-- /.widget-user -->
					</div>
				</div>
				<?php } ?>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
