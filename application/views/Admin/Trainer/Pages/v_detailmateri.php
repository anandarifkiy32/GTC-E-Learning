<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <?php foreach ($materi as $m) { ?>
          <div class="box" style="border-top:none;">
            <div class="box-header" style="color">
              <h3 class="box-title" style="font-size: 24px;margin-top: 10px;margin-left: 14px"><?php echo $m->judul ?></h3>
              <button class="btn btn-success btn-flat" style="position: absolute;right: 25px;top: 20px" data-toggle="modal" data-target="#modal-default">EDIT</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding:25px;padding-top: 15px">
              <div class="row">
                <div class="col-md-6">
                  <div class="embed-responsive embed-responsive-16by9" style="width: 100%;height: 100%">
                    <div class="embed-responsive-item">
                      <iframe src="<?php echo $m->konten ?>?autoplay=0&showinfo=0&rel=0" frameborder="0" gesture="media" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div style="font-size: 18px">
                    Deskripsi
                  </div>
                  <p>
                    <?php echo $m->description ?>
                  </p>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            
          </div>
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Materi</h4>
                  </div>
                  <form role="form" action="<?php echo base_url().'trainer/updatemateri' ?>" method="post">
                    <div class="modal-body">

                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Judul</label>
                          <input type="hidden" name="id" value="<?php echo $m->id_materi ?>">
                          <input type="text" class="form-control" id="exampleInputEmail1"  name="judul" value="<?php echo $m->judul ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputDescription1">Deskripsi</label>
                          <textarea class="form-control" name="description" rows="5"><?php echo $m->description ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Konten</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="konten" value="<?php echo $m->konten ?>">
                        </div>
                      </div>
                      <!-- /.box-body -->

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>

                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <?php } ?>
          </div>
        </section>
        <!-- /.content -->
      </div>
<!-- /.content-wrapper -->