<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Detail Materi
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Modul</li>
      <li class="active">Detail Materi</li>
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
              <h3 class="box-title" style="font-size: 24px;float: left;"><?php echo $m->judul ?></h3>
              <?php if ($cekquiz < 1) { ?>
                <a href="<?php echo base_url('trainer/tambahquiz/'.$m->slug) ?>"><button class="btn btn-primary btn-flat" style="float: right; margin-left: 10px;">Add Quiz</button></a>
              <?php } else{ ?>
                
              <?php }
              ?>
              <button class="btn btn-success btn-flat" style="float: right;" data-toggle="modal" data-target="#modal-default">Edit Materi</button>
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
                    <span aria-hidden="true">×</span></button>
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
        <!-- /.content -->
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box" style="border-top:none">
            <div class="box-header">
              <h3 class="box-title">Daftar Pertanyaan (Quiz)&nbsp</h3>
              <?php if ($cekquiz < 1) { ?>
                
              <?php } else{ ?>
                <a href="<?php echo base_url('trainer/hapusquiz/'.$m->slug) ?>"><button class="btn btn-danger btn-flat" style="float: right; margin-left: 3px;">Delete Quiz</button></a>
                <a href="<?php echo base_url('trainer/editquiz/'.$m->slug) ?>"><button class="btn btn-primary btn-flat" style="float: right; margin-left: 3px;">Edit Detail Quiz</button></a>
                <a href="<?php echo base_url('trainer/tambahsoal2/'.$m->slug) ?>"><button class="btn btn-default btn-flat" style="float: right; margin-left: 3px;">Tambah Soal</button></a>
              <?php }
              ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Pertanyaan</th>
                    <th>Tipe Jawaban</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $num = 1 ;foreach ($quiz as $q) { ?>

                    <tr>
                      <td><?php echo $num ?></td>
                      <td><?php echo $q->soal ?></td>
                      <td><?php echo $q->tipe; ?></td>
                      <td>
                          <a href="<?php echo base_url('trainer/editsoal/'.$this->uri->segment(3).'/'.$q->id_soal) ?>"><button type="button" class="btn btn-primary btn-xs btn-flat">Edit</button></a>
                          <a href="<?php echo base_url('trainer/hapussoal/'.$this->uri->segment(3).'/'.$q->id_soal) ?>"><button type="button" class="btn btn-danger btn-xs btn-flat">Hapus</button></a>
                      </td>
                    </tr>
                    <?php $num++; } ?>
                  </tbody>

                </table>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- /.content-wrapper -->