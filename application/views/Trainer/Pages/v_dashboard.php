<<<<<<< HEAD
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#modal-default1">Tambah Course</button>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <?php foreach ($course as $c) { ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo base_url('trainer/detailcourse/'.$c->slug) ?>">
            <div class="box box-widget widget-user">
              <div class="widget-user-header bg-black" style="background: url('./assets/modul/<?php echo $c->img ?>'); background-size: cover">
                <h3 class="widget-user-username">
                  <?php echo $c->nama ?>
                </h3>
              </div> 
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
    <div class="modal fade" id="modal-default1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Tambah Course</h4>
            </div>
            <form action="<?php echo base_url('trainer/tambahcourse') ?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Modul</label>
                    <input type="hidden" name="id" value="">
                    <input type="text" class="form-control" name="nama" required="">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" required="" rows="5" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Tugas dan Wewenang</label>
                    <textarea class="form-control" required="" rows="5" name="tugas"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Persyaratan Masuk Mengikuti Uji Kompetensi</label>
                    <textarea class="form-control" required="" rows="5" name="syarat"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Jenjang Karir</label>
                    <textarea class="form-control" required="" rows="5" name="karir"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" required="" name="category">
                      <option value="">Pilih Kategori</option>
                      <?php foreach ($category as $ctg) { ?>
                        <option value="<?php echo $ctg->slug ?>" ><?php echo $ctg->category ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="berkas" required="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Perusahaan</label>
                    <input type="text" name="namacmp" class="form-control" required="" placeholder="Masukkan Nama Perusahaan">
                    <input type="email" name="emailcmp" class="form-control" required="" placeholder="Masukkan email perusahaan">
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
    </section>
  </div>
=======
<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>

        <ol class="breadcrumb">
            <button class="btn btn-success btn-flat" data-toggle="modal" data-target="#modal-default1">Tambah Course</button>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <?php foreach ($course as $c) { ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo base_url('trainer/detailcourse/'.$c->slug) ?>">
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black" style="background: url('./assets/modul/<?php echo $c->img ?>'); background-size: cover">
                              <h3 class="widget-user-username">
                                <?php echo $c->nama ?>
                              </h3>
                          </div> 
                      </div>
                  </a>
              </div>
              <?php } ?>
          </div>
          <div class="modal fade" id="modal-default1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Tambah Course</h4>
                  </div>
                  <form action="<?php echo base_url('trainer/tambahcourse') ?>" method="post" enctype="multipart/form-data">
            
                      <div class="modal-body">
                        <div class="box-body">
                          <div class="form-group">
                            <label>Nama Modul</label>
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="nama" required="">
                          </div>
                          <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" required="" rows="5" name="description"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" required="" name="category">
                                <option value="">Pilih Kategori</option>
                              <?php foreach ($category as $ctg) { ?>
                                <option value="<?php echo $ctg->category ?>" ><?php echo $ctg->category ?></option>
                               <?php } ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Image</label>
                              <input type="file" name="berkas" required="" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Perusahaan</label>
                            <input type="text" name="namacmp" class="form-control" required="" placeholder="Masukkan Nama Perusahaan">
                            <input type="email" name="emailcmp" class="form-control" required="" placeholder="Masukkan email perusahaan">
                            </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
      </section>
      <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3