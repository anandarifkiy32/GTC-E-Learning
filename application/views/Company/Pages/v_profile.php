<<<<<<< HEAD
<div class="content-wrapper">
=======

<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
  <section class="content-header">
    <h1>Profile
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Profile</li>
    </ol>
  </section>
<<<<<<< HEAD
=======

  <!-- Main content -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
  <section class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="box">
          <div class="box-header">
            <p>Profile</p>
          </div>
          <div class="box-body">
            <?php foreach ($profile as $p) {?> 
              <table class="table table-bordered">
               <tr>
                 <td style="width:25%">
                   Nama 
                 </td>
                 <td>
                   <?php echo $p->nama ?>
                 </td>
               </tr>
               <tr>
                 <td>
                   Alamat 
                 </td>
                 <td>
                   <?php echo $p->alamat ?>
                 </td>
               </tr>
               <tr>
                 <td>
                   Email 
                 </td>
                 <td>
                   <?php echo $p->email ?>
                 </td>
               </tr>
               <tr>
                 <td>
                   Nomor Telepon 
                 </td>
                 <td>
                   <?php echo $p->telp ?>
                 </td>
               </tr>
             </table>
             <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default1" style="float: right; margin-top: 5px;">Edit Profile</button>
             <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default2" style="float: right; margin-top: 5px; margin-right: 3px">Edit Password</button>
<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
             <div class="modal fade" id="modal-default1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Profile</h4>
                    </div>
                    <form action="<?php echo base_url('company/updateprofile') ?>" method="post">
<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                      <div class="modal-body">
                        <div class="box-body">
                          <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $p->nama ?>">
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?php echo $p->alamat ?>">
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" readonly="" value="<?php echo $p->email ?>">
                          </div>
                          <div class="form-group">
                            <label>Telp</label>
                            <input type="number" class="form-control" name="telp" value="<?php echo $p->telp ?>">
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
              <div class="modal fade" id="modal-default2">
<<<<<<< HEAD
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Password</h4>
                      </div>
                      <form action="<?php echo base_url('company/updatepassword') ?>" method="post" enctype="multipart/form-data">
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
      </div>
    </section>
  </div>
=======
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Password</h4>
                    </div>
                    <form action="<?php echo base_url('company/updatepassword') ?>" method="post" enctype="multipart/form-data">

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
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
