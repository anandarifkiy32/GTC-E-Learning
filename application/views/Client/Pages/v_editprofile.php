
<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Profile</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Profile</li>
      <li class="active">Edit Profile</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Profile</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php foreach ($profile as $p) { ?>
            <form role="form" action="<?php echo base_url('dashboard/updateprofile/'.$p->id_peserta)?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $p->nama ?>" required="">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="gender">
                    <option value="L" <?php if($p->gender == "L"){echo "selected";}?>>Laki-laki</option>
                    <option value="P" <?php if($p->gender == "P"){echo "selected";}?>>Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="Tempat Lahir">Tempat Lahir</label>
                  <input type="text" class="form-control" id="Tempat Lahir" name="tempatlahir" value="<?php echo $p->tempatlahir ?>" required="">
                </div>

                <div class="form-group">
                  <label for="dtp_input2">Tanggal Lahir :</label>
                  <input class="form-control form_date date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" size="16" type="text" value="<?php echo $p->ttl ?>" readonly>
                  <input type="hidden" id="dtp_input2" value="<?php echo $p->ttl ?>" name="ttl"/>
                </div>
                
                <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <textarea class="form-control" id="Alamat" name="alamat" rows="4" required=""><?php echo $p->alamat ?></textarea>
                </div>
                <div class="form-group">
                  <label for="E-mail">E-mail</label>
                  <input type="text" class="form-control" id="E-mail" name="email" value="<?php echo $p->email ?>">
                </div>
                <div class="form-group">
                  <label for="Nomor Telepon">Nomor Telepon</label>
                  <input type="text" class="form-control" id="Nomor Telepon" name="telepon" value="<?php echo $p->telp ?>" required="">
                </div>
                <div class="form-group">
                  <label for="Nama Kantor">Nama Kantor</label>
                  <input type="text" class="form-control" id="Nama Kantor" name="nama_kantor" value="<?php echo $p->kantor ?>" required="">
                </div>
                <div class="form-group">
                  <label for="Alamat Kantor">Alamat Kantor</label>
                  <textarea class="form-control" id="Alamat Kantor" name="alamat_kantor" rows="4" required=""><?php echo $p->alamat_kantor ?></textarea>
                </div>
                <div class="form-group">
                  <label for="Nomor Telepon Kantor">Nomor Telepon Kantor</label>
                  <input type="text" class="form-control" id="Nomor Telepon Kantor" name="telepon_kantor" value="<?php echo $p->telp_kantor ?>" required="">
                </div>
                <div class="form-group">
                  <label for="Biografi">Biografi</label>
                  <textarea class="form-control" id="Biografi" name="biografi" rows="4" required=""><?php echo $p->biografi ?></textarea>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              <!-- /.box-body -->


            </form>
            <?php } ?>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
