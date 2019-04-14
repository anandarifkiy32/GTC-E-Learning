<div id="courses" class="section">
	<div class="container">
		<div id="courses-wrapper">
			<?php foreach ($profile as $p) { ?>
				<div class="row">
					<div class="panel panel-default" style="border-radius: 0px;">
						<div class="panel-body">
							<div class="row">
								<a href="<?php echo base_url('homepage/editphoto/') ?>"><button type="button" class="btn btn-primary" style="float: right; margin-right: 15px;"><i class="fa fa-pencil-square-o"></i> <span>Ubah Foto Profil</span></button></a>
							</div>
							<div class="row">
								<center><img src="<?php if ($p->img == ''){echo base_url('assets/profile_photos/default.jpg' );}else{
									echo base_url('assets/profile_photos/'.$p->img);
								} ?>" class="img-circle" id="myImg" width="100" height="100" style="margin-top: 10px;" alt="<?php echo $p->nama ?>">
							</center>
						</div>
						<div id="myModal" class="modal">

							<!-- The Close Button -->

							<!-- Modal Content (The Image) -->
							<img class="modal-content" id="img01">

							<!-- Modal Caption (Image Text) -->
							<div id="caption"></div>
						</div>
						<div class="row">
							<div class="section-header text-center">
								<h2 style="padding-top: 10px;"><?php echo $p->nama; ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="panel panel-default" style="border-radius: 0px;">
					<div class="panel-body">
						<p style="float: left;">Profil Singkat</p>
						<div class="row">
							<button type="button" class="btn btn-primary" style="float: right; margin-right: 15px;" data-toggle="modal" data-target="#modal-default2"><i class="fa fa-pencil-square-o"></i> <span>Ubah Password</span></button>
							<a href="<?php echo base_url('homepage/editprofile/') ?>"><button type="button" class="btn btn-primary" style="float: right; margin-right: 15px;"><i class="fa fa-pencil-square-o"></i> <span>Ubah Profil</span></button></a>
						</div>
						
						<div class="col-md-12">
							<div class="col-md-6">
								<br>
								<div class="table table-responsive" style="border: 0px;">
									<table class="table table2" rules="none">
										<tr>
											<th>Tempat Lahir</th>
											<td><?php echo $p->tempatlahir; ?></td>
										</tr>
										<tr>
											<th>Tanggal Lahir</th>
											<td><?php echo date('j F Y',strtotime($p->ttl)); ?></td>
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
								<div class="table table-responsive" style="border: 0px">
									<table class="table table2" rules="none">
										<tr>
											<th width="125px">Kantor</th>
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
			<div class="modal fade" id="modal-default2" style="z-index: +10">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Password</h4>
                  </div>
                  <form action="<?php echo base_url('homepage/updatepassword') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="box-body">
                        <div class="form-group">
                          <label>Password baru</label>
                          <input type="password" class="form-control" name="pass">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
			<?php } ?>
		</div>
	</div>
</div>