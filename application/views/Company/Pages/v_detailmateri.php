<div class="content-wrapper">
  <section class="content-header">
    <a href="<?php echo base_url('company/detailcourse/'.$slugmodul) ?>"><button type="button" class="btn btn-flat btn-success"><span class="fa fa-arrow-left"></span> Back</button></a>
    <h1 style="padding-top: 5px;">
      Detail Materi
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Modul</li>
      <li class="active">Detail Materi</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <?php foreach ($materi as $m) { ?>
          <div class="box" style="border-top:none;">
            <div class="box-header" style="color">
              <h3 class="box-title" style="font-size: 24px;float: left;"><?php echo $m->judul ?></h3>
              <!-- <?php if ($m->pdf != '') { 
                echo '';} else{ ?>
                  <button class="btn btn-primary btn-flat" style="float: right; margin-left: 10px;" data-toggle="modal" data-target="#modal-default2"><span class="fa fa-plus"></span> Pdf</button>
                <?php }
                if ($m->konten != '') { 
                  echo '';} else{ ?>
                    <button class="btn btn-primary btn-flat" style="float: right; margin-left: 10px;" data-toggle="modal" data-target="#modal-default3"><span class="fa fa-plus"></span> Video</button>
                  <?php }
                  ?> -->
                  <!-- <button class="btn btn-success btn-flat" style="float: right;" data-toggle="modal" data-target="#modal-default1">Edit Materi</button> -->
                </div>
                <div class="box-body" style="padding:25px;padding-top: 15px">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12">
                          <div style="font-size: 16px">
                            <b>Indikator</b>
                          </div>
                          <p>
                            <?php echo $m->indikator ?>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div style="font-size: 16px">
                            <b>Tujuan Pembelajaran</b>
                          </div>
                          <p>
                            <?php echo $m->tujuan ?>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div style="font-size: 16px">
                            <b>Evaluasi</b>
                          </div>
                          <p>
                            <?php echo $m->evaluasi ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  <div class="col-md-5">
                    <div class="box" style="border-top:none;">
                      <div class="box-header" style="color">
                        <p><b>Konten Modul / Materi</b></p>
                      </div>
                      <div class="box-body">
                        <div class="table table-responsive">
                          <table class="table table-condensed">
                            <?php foreach ($materi as $m) { 
                              if ($m->ppt != '') {?>
                                <tr>
                                  <td>Materi Presentasi : <a href="#" data-toggle="modal" data-target="#modal-default9"><?php echo $m->ppt ?></a></td>
                                  <!-- <td>
                                    <button class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#modal-default10">Edit</button>
                                    <a href="<?php echo base_url().'trainer/hapusppt/'.$m->slug?>"><button class="btn btn-danger btn-flat btn-xs"><span class="fa fa-trash"></span></button></a>
                                  </td> -->
                                </tr>
                              <?php }else{
                                echo "";
                              }
                              if ($m->pdf != '') {?>
                                <tr>
                                  <td>Hand Out : <a href="#" data-toggle="modal" data-target="#modal-default6"><?php echo $m->pdf ?></a></td>
                                  <!-- <td>
                                    <button class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#modal-default4">Edit</button>
                                    <a href="<?php echo base_url().'trainer/hapuspdf/'.$m->slug?>"><button class="btn btn-danger btn-flat btn-xs"><span class="fa fa-trash"></span></button></a>
                                  </td> -->
                                </tr>
                              <?php }else{
                                echo "";
                              }
                              if($m->konten != ''){?>
                                <tr>
                                  <td>Materi Video : <a href="#" data-toggle="modal" data-target="#modal-default7"><?php echo $m->konten ?></a></td>
                                  <!-- <td>
                                    <button class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#modal-default5">Edit</button>
                                    <a href="<?php echo base_url().'trainer/hapuskonten/'.$m->slug ?>"><button class="btn btn-danger btn-flat btn-xs"><span class="fa fa-trash"></span></button></a>
                                  </td> -->
                                </tr>
                              <?php }else{
                                echo "";
                              } } ?>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php foreach ($materi as $m) { ?>
                </div>
                <!-- <div class="modal fade" id="modal-default1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span></button>
                          <h4 class="modal-title">Edit Modul</h4>
                        </div>
                        <form role="form" action="<?php echo base_url().'trainer/updatemateri' ?>" method="post">
                          <div class="modal-body">
                            <div class="box-body">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Judul Modul</label>
                                <input type="hidden" name="id" value="<?php echo $m->id_materi ?>">
                                <input type="text" class="form-control" id="exampleInputEmail1"  name="judul" value="<?php echo $m->judul ?>">
                              </div>
                              <div class="form-group">
                                <label>Indikator</label>
                                <textarea class="form-control" name="indikator" rows="5"><?php echo $m->indikator ?></textarea>
                              </div>
                              <div class="form-group">
                                <label>Tujuan Pembelajaran</label>
                                <textarea class="form-control" name="tujuan" rows="5"><?php echo $m->tujuan ?></textarea>
                              </div>
                              <div class="form-group">
                                <label>Evaluasi</label>
                                <textarea class="form-control" name="evaluasi" rows="5"><?php echo $m->evaluasi ?></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="modal fade" id="modal-default2">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">Tambah Pdf</h4>
                          </div>
                          <form role="form" action="<?php echo base_url().'trainer/tambahpdf' ?>" method="post"  enctype="multipart/form-data">
                            <div class="modal-body">
                              <div class="box-body">
                                <div class="form-group">
                                  <input type="hidden" name="id" value="<?php echo $m->id_materi ?>">
                                  <input type="hidden" name="judul" value="<?php echo $m->judul ?>">
                                  <input type="file" class="form-control" name="pdf">
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div> -->
                    <!-- <div class="modal fade" id="modal-default3">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span></button>
                              <h4 class="modal-title">Tambah Video</h4>
                            </div>
                            <form role="form" action="<?php echo base_url().'trainer/tambahkonten' ?>" method="post">
                              <div class="modal-body">
                                <div class="box-body">
                                  <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $m->id_materi ?>">
                                    <input type="hidden" name="judul" value="<?php echo $m->judul ?>">
                                    <input type="text" class="form-control" name="konten" placeholder="Masukkan link embed youtube">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div> -->
                      <!-- <div class="modal fade" id="modal-default4">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Update Pdf</h4>
                              </div>
                              <form role="form" action="<?php echo base_url().'trainer/updatepdf' ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <input type="hidden" name="id" value="<?php echo $m->id_materi ?>">
                                      <input type="hidden" name="judul" value="<?php echo $m->judul ?>">
                                      <input type="file" class="form-control" name="pdf">
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div> -->
                        <!-- <div class="modal fade" id="modal-default5">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <h4 class="modal-title">Update Video</h4>
                                </div>
                                <form role="form" action="<?php echo base_url().'trainer/tambahkonten' ?>" method="post">
                                  <div class="modal-body">
                                    <div class="box-body">
                                      <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $m->id_materi ?>">
                                        <input type="hidden" name="judul" value="<?php echo $m->judul ?>">
                                        <input type="text" class="form-control" name="konten" value="<?php echo $m->konten ?>">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div> -->
                          <div class="modal fade" id="modal-default6">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title">Materi Pdf</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="box-body">
                                      <div class="embed-responsive embed-responsive-16by9" style="width: 100%;height: 100%">
                                        <div class="embed-responsive-item">
                                          <iframe src="<?php echo base_url('assets/modul_pdf/'.$m->pdf)?>?#toolbar=0"></iframe>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="modal-default7">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span></button>
                                      <h4 class="modal-title">Materi Video</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="box-body">
                                        <div class="embed-responsive embed-responsive-16by9" style="width: 100%;height: 100%">
                                          <div class="embed-responsive-item">
                                            <iframe src="<?php echo $m->konten ?>?autoplay=0&showinfo=0&rel=0" frameborder="0" gesture="media" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php } ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="box" style="border-top:none">
                              <div class="box-header">
                                <h3 class="box-title">Daftar Quiz&nbsp</h3>
                                <!-- <a href="<?php echo base_url('trainer/tambahquiz/'.$m->slug) ?>"><button class="btn btn-primary btn-flat" style="float: right; margin-left: 10px;"><span class="fa fa-plus"></span> Quiz</button></a>  <?php if ($cekquiz < 1) { ?>
                              <?php } else{ ?>
                                <a href="<?php echo base_url('trainer/hapusquiz/'.$m->slug) ?>"><button class="btn btn-danger btn-flat" style="float: right; margin-left: 3px;">Delete Quiz</button></a>
                                <a href="<?php echo base_url('trainer/editquiz/'.$m->slug) ?>"><button class="btn btn-primary btn-flat" style="float: right; margin-left: 3px;">Edit Detail Quiz</button></a>
                                <a href="<?php echo base_url('trainer/tambahsoal2/'.$m->slug) ?>"><button class="btn btn-default btn-flat" style="float: right; margin-left: 3px;">Tambah Soal</button></a>
                              <?php }
                              ?> -->
                            </div>
                            <div class="box-body">
                              <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Waktu (menit)</th>
                                    <th>Kategori</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $num = 1 ;foreach ($quiz as $q) { ?>
                                    <tr>
                                      <td><?php echo $num ?></td>
                                      <td><?php echo $q->waktu ?></td>
                                      <td><?php if($q->kategori == 'post'){ echo 'Post-Test';}elseif($q->kategori == 'pre'){echo 'Pre-Test';}else{echo 'Praktik';}  ?></td>
                                      <td>
                                        <a href="<?php echo base_url('company/detailquiz/'.$this->uri->segment(3).'/'.$q->code) ?>"><button type="button" class="btn btn-primary btn-xs btn-flat">Lihat</button></a>
                                        <!-- <a href="<?php echo base_url('trainer/hapusquiz/'.$this->uri->segment(3).'/'.$q->code) ?>"><button type="button" class="btn btn-danger btn-xs btn-flat">Hapus</button></a> -->
                                      </td>
                                    </tr>
                                    <?php $num++; } ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>