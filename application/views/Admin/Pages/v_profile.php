<div class="content-wrapper">
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
	<section class="content">
		<?php foreach ($profile as $p) {?>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default" style="border-radius: 0px;">
						<div class="panel-body">
							<div class="row">
								<div style="float:right;">
								<button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default2" style=" margin-right: 15px;">Edit Password</button>
							</div>
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
				</div>
			</div>
			<div class="modal fade" id="modal-default2">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Password</h4>
                  </div>
                  <form action="<?php echo base_url('Admin/updatepassword') ?>" method="post" enctype="multipart/form-data">
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
	</section>
</div>
