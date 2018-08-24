
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
          <div class="box-body">
            <?php foreach ($profile as $p) { ?>
              <p>Upload Foto Profile</p>
              <form class="form" action="<?php echo base_url()?>trainer/uploadphoto" method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="kode" required="" value="<?php echo $p->id_trainer; ?>">
                <input type="file" class="form-control" name="berkas" required="">
                <Button type="submit" class="btn btn-primary border-radius custom-button" style="margin-top: 10px" value="Upload">Upload</Button>
              </form>
              <?php } ?>
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->