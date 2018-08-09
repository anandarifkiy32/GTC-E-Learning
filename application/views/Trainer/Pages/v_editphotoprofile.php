
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
            <?php echo form_open_multipart('trainer/uploadphoto'); ?>
            <input type="hidden" class="form-control" name="kode" required="" value="<?php echo $p->id_trainer; ?>">
            <input type="file" name="berkas" required="" style="margin-left: 8px;margin-right: 8px">
            <input type="submit" class="btn btn-primary btn-flat" style="margin:8px;" value="Upload">
            <?php } ?>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->