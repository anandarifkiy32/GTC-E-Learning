<<<<<<< HEAD
<div class="content-wrapper">
  <section class="content-header">
      <a href="<?php echo base_url('trainer') ?>"><button type="button" class="btn btn-flat btn-success"><span class="fa fa-arrow-left"></span> Back</button></a>
    <h1 style="padding-top: 5px;">
=======
<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
      Detail Course
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Detail Course</li>
    </ol>
  </section>
<<<<<<< HEAD
  <section class="content">
    <div class="row">
      <div class="col-md-7">
        <div class="box box-solid">
            <div class="box-header with-border bg-blue">
              <div class="row">
=======

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-7">
        <div class="box box-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-blue">
            <div class="row">
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
              <div class="col-md-2">
                <div class="widget-user-image">
                  <center><?php foreach ($modul as $m) { ?>
                    <img class="img-circle" src="<?php echo base_url().'assets/modul/'.$m->img ?>" alt="User Avatar" style="height: 60px;width: 60px;object-fit: cover;"></center>
                  </div>
                </div>
                <div class="col-md-7" style="padding-left: 0px">
                  <h3 class="widget-user-username" style="margin-left: 0px;"><?php echo $m->nama ?></h3>
                  <h5 class="widget-user-desc" style="margin-left: 0px;"><?php echo $m->category ?></h5>
                </div>
                <div class="col-md-3">
                  <div style="float: right;">
                    <button class="btn btn-success btn-flat" data-toggle="modal" data-target="#modal-default1">Edit</button>
                    <a href="<?php echo base_url().'trainer/hapusmodul/'.$this->uri->segment(3) ?>"><button class="btn btn-danger btn-flat"><span class="fa fa-trash"></span></button></a>
                  </div>
                </div>  
              </div>
            </div>
            <div class="box-body">
<<<<<<< HEAD
              <div class="box-group" id="accordion">
                <div class="panel box" style="border:0px;">
                  <div class="box-header">
                    <h4 class="box-title" style="font-size: 14px;">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Deskripsi
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body" style="padding-top: 5px">
                      <p><?php echo $m->deskripsi; ?></p>
                    </div>
                  </div>
                </div>
                <div class="panel box" style="border:0px;">
                  <div class="box-header">
                    <h4 class="box-title" style="font-size: 14px;">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Tugas dan Wewenang
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                      <?php echo $m->tugas; ?>
                    </div>
                  </div>
                </div>
                <div class="panel box" style="border:0px;">
                  <div class="box-header">
                    <h4 class="box-title" style="font-size: 14px;">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Persyaratan Masuk Mengikuti Uji Kompetensi
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                      <?php echo $m->syarat; ?>
                    </div>
                  </div>
                </div>
                <div class="panel box" style="border:0px;">
                  <div class="box-header">
                    <h4 class="box-title" style="font-size: 14px;">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        Jenjang Karir
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                    <div class="box-body">
                      <?php echo $m->karir; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
=======
              <table class="table table-condensed" style="font-size: 16px"> 
                <tr>
                  <td style="font-size: 16px" width="25%">Deskripsi</td>
                  <td><?php echo $m->deskripsi ?></td>
                </tr>
                <?php } ?>
                <tr>
                  <td style="font-size: 16px">Jumlah Materi</td>
                  <td><?php echo $jumlah_materi ?></td>
                </tr>
                <tr>
                  <td style="font-size: 16px">Jumlah Peserta</td>
                  <td><?php echo $jumlah_peserta ?></td>
                </tr>
              </table>
            </div>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
          </div>
        </div>
        <div class="col-md-5">
          <div class="box" style="border-top:none;">
            <div class="box-header" style="color">
              <h3 class="box-title">Modul</h3>
<<<<<<< HEAD
              <button class="btn btn-success btn-flat" style="float: right;" data-toggle="modal" data-target="#modal-default2">+</button>
            </div>
            <div class="box-body">
              <table class="table table-condensed">
                <thead>
                  <th style="width: 15px">#</th>
                  <th colspan="2"><center>Judul</center></th>
                </thead>
                <?php $no=1 ;foreach ($submateri as $s) { ?>
                </tbody>
                <td><?php echo $no ?></td>
                <td><?php echo $s->judul ?></td>
                <td align="right">
                  <a href="<?php echo base_url().'trainer/detailmateri/'.$s->slug ?>"><button class="btn btn-primary btn-flat btn-xs">Lihat</button></a>
                  <a href="<?php echo base_url().'trainer/hapusmateri/'.$s->slug.'/'.$this->uri->segment(3) ?>"><button class="btn btn-danger btn-flat btn-xs"><span class="fa fa-trash"></span></button></a>
                </td>
              </tbody>
              <?php $no++; } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box" style="border-top:none">
          <div class="box-header">
            <h3 class="box-title">Ketentuan dan Persyaratan Sertifikasi</h3>
            <?php if ($cek == 1) { ?>
              <a href="<?php echo base_url('trainer/hapussertifikasi/'.$this->uri->segment(3)) ?>"><button type="button" class="btn btn-flat btn-danger" style="float: right;"><span class="fa fa-trash"></span></button></a>
              <button class="btn btn-success btn-flat" style="float: right; margin-right: 5px;" data-toggle="modal" data-target="#modal-default4">Edit</button>
            <?php }else{ ?>
              <button class="btn btn-success btn-flat" style="float: right;" data-toggle="modal" data-target="#modal-default3">+</button>
            <?php } ?>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <?php foreach ($sertifikasi as $st) { ?>
                  <p><b>1. Persyaratan Dasar Peserta Sertifikasi</b></p>
                  <div class="col-md-12"><p><?php echo $st->persyaratan_dasar; ?></p></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p><b>2. Hak Peserta Sertifikasi dan Kewajiban Pemegang Sertifikat</b></p>
                  <div class="col-md-12"><p><b>a. Hak Peserta</b></p>
                    <div class="col-md-12"><p><?php echo $st->hak; ?></p></div>
                  </div>
                  <div class="col-md-12"><p><b>b. Kewajiban Pemegang Sertifikat</b></p>
                    <div class="col-md-12"><p><?php echo $st->kewajiban; ?></p></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p><b>3. Biaya Sertifikasi</b></p>
                  <div class="col-md-12"><p><?php echo $st->biaya; ?></p></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p><b>4. Proses Sertifikasi</b></p>
                  <div class="col-md-12"><p><?php echo $st->proses; ?></p></div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box" style="border-top:none">
          <div class="box-header">
            <h3 class="box-title">Data Peserta Training</h3>
          </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $num = 1 ;foreach ($data_peserta as $dp) { ?>
                  <tr>
                    <td><?php echo $num ?></td>
                    <td><?php echo $dp->nama ?></td>
                    <td></td>
                    <td align="right"><a href="<?php echo base_url('trainer/detailpeserta/'.$dp->code)?>"><button class="btn btn-success btn-flat">Detail</button></a></td>
                  </tr>
                  <?php $num++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box" style="border-top:none">
            <div class="box-header">
              <h3 class="box-title">Data Peserta Sertifikasi</h3>
            </div>
            <div class="box-body">
              <table id="example3" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $num = 1 ;foreach ($psertifikasi as $ps) { ?>
                    <tr>
                      <td><?php echo $num ?></td>
                      <td><?php echo $ps->nama ?></td>
                      <td></td>
                      <td align="right"><a href="<?php echo base_url('trainer/detailpsertifikasi/'.$ps->unique_code)?>"><button class="btn btn-success btn-flat">Detail</button></a></td>
                    </tr>
                    <?php $num++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modal-default1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Edit Course</h4>
                </div>
                <form action="<?php echo base_url('trainer/updatemodul') ?>" method="post">
                  <?php foreach ($modul as $m) { ?>
                    <div class="modal-body">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Course</label>
                          <input type="hidden" name="id" value="<?php echo $m->id_modul ?>">
                          <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo $m->nama ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Deskripsi</label>
                          <textarea class="form-control" id="exampleInputPassword1" rows="5" name="description"><?php echo $m->deskripsi ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tugas dan Wewenang</label>
                          <textarea class="form-control" id="exampleInputPassword1" rows="5" name="tugas"><?php echo $m->tugas ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Persyaratan Masuk Mengikuti Uji Kompetensi</label>
                          <textarea class="form-control" id="exampleInputPassword1" rows="5" name="syarat"><?php echo $m->syarat ?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Jenjang Karir</label>
                          <textarea class="form-control" id="exampleInputPassword1" rows="5" name="karir"><?php echo $m->karir ?></textarea>
                        </div>
                        <div class="form-group">
                          <label>Kategori</label>
                          <select class="form-control" name="category">
                            <?php foreach ($category as $ctg) { ?>
                              <option value="<?php echo $ctg->slug ?>" <?php if($ctg->slug == $m->category){echo "selected";} ?>><?php echo $ctg->category ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modal-default2">
=======
              <button class="btn btn-success btn-flat" style="position: absolute;right: 10px;" data-toggle="modal" data-target="#modal-default2">+</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-condensed">
                <tr>
                  <th style="width: 15px">#</th>
                  <th colspan="2"><center>Judul</center></th>
                </tr>
                <?php $no=1 ;foreach ($submateri as $s) { ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $s->judul ?></td>
                    <td align="right">
                      <a href="<?php echo base_url().'trainer/detailmateri/'.$s->slug ?>"><button class="btn btn-primary btn-flat btn-xs">Lihat</button></a>
                      <a href="<?php echo base_url().'trainer/hapusmateri/'.$s->slug.'/'.$this->uri->segment(3) ?>"><button class="btn btn-danger btn-flat btn-xs"><span class="fa fa-trash"></span></button></a>
                    </td>
                  </tr>
                  <?php $no++; } ?>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="box" style="border-top:none">
              <div class="box-header">
                <h3 class="box-title">Data Peserta</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $num = 1 ;foreach ($data_peserta as $dp) { ?>

                      <tr>
                        <td><?php echo $num ?></td>
                        <td><?php echo $dp->nama ?></td>
                        <td></td>
                        <td align="right"><a href="<?php echo base_url('trainer/detailpeserta/'.$dp->code)?>"><button class="btn btn-success btn-flat">Detail</button></a></td>
                      </tr>
                      <?php $num++; } ?>
                    </tbody>

                  </table>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>


          <div class="modal fade" id="modal-default1">
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
<<<<<<< HEAD
                    <h4 class="modal-title">Tambah Modul</h4>
                  </div>
                  <form role="form" action="<?php echo base_url().'trainer/tambahmateri/'.$this->uri->segment(3) ?>" method="post">
                    <div class="modal-body">
                      <div class="box-body">
                        <div class="form-group">
                          <label>Judul Modul / Materi</label>
                          <?php foreach ($modul as $m) { ?>
                            <input type="hidden" name="id" value="<?php echo $m->id_modul ?>">
                          <?php } ?>
                          <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="form-group">
                          <label>Indikator</label>
                          <textarea class="form-control" name="indikator" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                          <label>Tujuan Pembelajaran</label>
                          <textarea class="form-control" name="tujuan" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                          <label>Evaluasi</label>
                          <textarea class="form-control" name="evaluasi" rows="5"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>            
                </div>
              </div>
            </div>
            <div class="modal fade" id="modal-default3">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ketentuan dan Persyaratan Sertifikasi</h4>
                    </div>
                    <form role="form" action="<?php echo base_url().'trainer/tambahsertifikasi/'.$this->uri->segment(3) ?>" method="post">
                      <div class="modal-body">
                        <div class="box-body">
                          <div class="form-group">
                            <?php foreach ($modul as $m) { ?>
                              <input type="hidden" name="id" value="<?php echo $m->id_modul ?>">
                            <?php } ?>
                            <label>Persyaratan Dasar</label>
                            <textarea rows="3" class="form-control" name="persyaratan_dasar"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Hak Peserta</label>
                            <textarea class="form-control" name="hak" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Kewajiban Pemegang Sertifikat</label>
                            <textarea class="form-control" name="kewajiban" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Biaya</label>
                            <textarea class="form-control" name="biaya" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Proses Sertifikasi</label>
                            <textarea class="form-control" name="proses" rows="3"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>            
                  </div>
                </div>
              </div>
              <div class="modal fade" id="modal-default4">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Update Ketentuan dan Persyaratan Sertifikasi</h4>
                      </div>
                      <form role="form" action="<?php echo base_url().'trainer/updatesertifikasi/'.$this->uri->segment(3) ?>" method="post">
                        <div class="modal-body">
                          <div class="box-body">
                            <div class="form-group">
                              <?php foreach ($sertifikasi as $st) { ?>
                                <label>Persyaratan Dasar</label>
                                <textarea rows="3" class="form-control" name="persyaratan_dasar"><?php echo $st->persyaratan_dasar; ?></textarea>
                              </div>
                              <div class="form-group">
                                <label>Hak Peserta</label>
                                <textarea class="form-control" name="hak" rows="3"><?php echo $st->hak; ?></textarea>
                              </div>
                              <div class="form-group">
                                <label>Kewajiban Pemegang Sertifikat</label>
                                <textarea class="form-control" name="kewajiban" rows="3"><?php echo $st->kewajiban; ?></textarea>
                              </div>
                              <div class="form-group">
                                <label>Biaya</label>
                                <textarea class="form-control" name="biaya" rows="3"><?php echo $st->biaya; ?></textarea>
                              </div>
                              <div class="form-group">
                                <label>Proses Sertifikasi</label>
                                <textarea class="form-control" name="proses" rows="3"><?php echo $st->proses; ?></textarea>
                              </div>
                            <?php } ?>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </form>            
                    </div>
                  </div>
                </div>
              </section>
            </div>
=======
                    <h4 class="modal-title">Edit Course</h4>
                  </div>
                  <form action="<?php echo base_url('trainer/updatemodul') ?>" method="post">
                    <?php foreach ($modul as $m) { ?>
                      <div class="modal-body">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Course</label>
                            <input type="hidden" name="id" value="<?php echo $m->id_modul ?>">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo $m->nama ?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Deskripsi</label>
                            <textarea class="form-control" id="exampleInputPassword1" rows="5" name="description"><?php echo $m->deskripsi ?></textarea>
                          </div>
                          <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="category">
                              <?php foreach ($category as $ctg) { ?>
                                <option value="<?php echo $ctg->category ?>" <?php if($ctg->category == $m->category){echo "selected";} ?>><?php echo $ctg->category ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <?php } ?>
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
                <div class="modal fade" id="modal-default2">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Tambah Modul</h4>
                        </div>
                        <form role="form" action="<?php echo base_url().'trainer/tambahmateri/'.$this->uri->segment(3) ?>" method="post">
                          <div class="modal-body">
                            <div class="box-body">
                              <div class="form-group">
                                <label>Judul Modul / Materi</label>
                                <?php foreach ($modul as $m) { ?>
                                  <input type="hidden" name="id" value="<?php echo $m->id_modul ?>">
                                  <?php } ?>
                                  <input type="text" class="form-control" name="judul">
                                </div>
                                <div class="form-group">
                                  <label>Indikator</label>
                                  <textarea class="form-control" name="indikator" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <label>Tujuan Pembelajaran</label>
                                  <textarea class="form-control" name="tujuan" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <label>Evaluasi</label>
                                  <textarea class="form-control" name="evaluasi" rows="5"></textarea>
                                </div>
                              </div>
                              <!-- /.box-body -->
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
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
