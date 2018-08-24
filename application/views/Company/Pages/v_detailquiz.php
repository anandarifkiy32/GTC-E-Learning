<<<<<<< HEAD
<div class="content-wrapper">
=======

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
  <section class="content-header">
    <h1>
      Detail Quiz
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Modul</li>
      <li class="active">Detail Quiz</li>
    </ol>
  </section>
<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box" style="border-top:none;">
          <div class="box-header" style="color">
            <h4 class="box-title" style="font-size: 24px;float: left;">Detail</h4>
            <!-- <button class="btn btn-success btn-flat" style="float: right;" data-toggle="modal" data-target="#modal-default1">Edit Detail</button> -->
          </div>
          <div class="box-body" style="padding:25px;padding-top: 15px">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <div style="font-size: 16px">
                      <b>Course</b>
                    </div>
                    <p>
                      <?php echo $modul ?>
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div style="font-size: 16px">
                      <b>Modul</b>
                    </div>
                    <p>
                      <?php echo $materi ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12"><?php foreach ($detail as $d) { ?>
                    <div style="font-size: 16px">
                      <b>Kategori</b>
                    </div>
                    <p>
                      <?php if($d->kategori == 'post'){ echo 'Post-Test';}elseif($d->kategori == 'pre'){echo 'Pre-Test';}else{echo 'Praktik';}  ?>
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div style="font-size: 16px">
                      <b>Waktu Pengerjaan</b>
                    </div>
                    <p>
                      <?php echo $d->waktu ?> menit
                    </p>
                  </div>
                </div>  
<<<<<<< HEAD
              <?php } ?>
=======
                <?php } ?>
              </div>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
            </div>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box" style="border-top:none;">
        <div class="box-header" style="color">
          <h4 class="box-title" style="font-size: 24px;float: left;">Daftar Soal</h4>
          <!-- <button class="btn btn-default btn-flat" style="float: right;" data-toggle="modal" data-target="#modal-default4"><span class="fa fa-plus"></span> Soal</button> -->
        </div>
        <div class="box-body" style="padding:25px;padding-top: 15px">
          <form>
            <?php $num = 1; foreach ($quiz as $q) {                        
              if($q->tipesoal == 'essay' | $q->tipesoal == 'file'){ ?>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="form-group">
                      <label>No. <?php echo $num;  ?></label>
                      <a href="<?php echo base_url('trainer/hapussoal/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$q->id_soal) ?>">
                          <!-- <button type="button" class="btn btn-danger btn-flat" title="Hapus" style="float: right; margin-bottom: 3px; margin-left: 3px"><span class="fa fa-trash"></span></button></a>
                            <button type="button" class="btn btn-primary btn-flat" title="Edit" style="float: right; margin-bottom: 3px;" data-toggle="modal" data-target="#modal-default<?php echo $q->id_soal ?>"><span class="fa fa-edit"></span></button> -->
                            <input type="text" disabled="" class="form-control" value="<?php echo $q->pertanyaan; ?>">
                            <!-- <input type="text" disabled="" class="form-control" value="Jawaban:  <?php echo $q->benar; ?>"> -->
                          </div>
                        </div>
                      </div>
=======
    <div class="row">
      <div class="col-md-12">
        <div class="box" style="border-top:none;">
          <div class="box-header" style="color">
            <h4 class="box-title" style="font-size: 24px;float: left;">Daftar Soal</h4>
            <!-- <button class="btn btn-default btn-flat" style="float: right;" data-toggle="modal" data-target="#modal-default4"><span class="fa fa-plus"></span> Soal</button> -->
          </div>
          <div class="box-body" style="padding:25px;padding-top: 15px">
            <form>
              <?php $num = 1; foreach ($quiz as $q) {                        
                if($q->tipesoal == 'essay' | $q->tipesoal == 'file'){ ?>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="form-group">
                        <label>No. <?php echo $num;  ?></label>
                        <a href="<?php echo base_url('trainer/hapussoal/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$q->id_soal) ?>">
                          <!-- <button type="button" class="btn btn-danger btn-flat" title="Hapus" style="float: right; margin-bottom: 3px; margin-left: 3px"><span class="fa fa-trash"></span></button></a>
                          <button type="button" class="btn btn-primary btn-flat" title="Edit" style="float: right; margin-bottom: 3px;" data-toggle="modal" data-target="#modal-default<?php echo $q->id_soal ?>"><span class="fa fa-edit"></span></button> -->
                          <input type="text" disabled="" class="form-control" value="<?php echo $q->pertanyaan; ?>">
                          <!-- <input type="text" disabled="" class="form-control" value="Jawaban:  <?php echo $q->benar; ?>"> -->
                        </div>
                      </div>
                    </div>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                    <?php }else{?>
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="form-group">
                            <label>No. <?php echo $num ?></label>
                            <a href="<?php echo base_url('trainer/hapussoal/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$q->id_soal) ?>">
                              <!-- <button type="button" class="btn btn-danger btn-flat" title="Hapus" style="float: right; margin-bottom: 3px; margin-left: 3px"><span class="fa fa-trash"></span></button></a>
<<<<<<< HEAD
                                <button type="button" class="btn btn-primary btn-flat" title="Edit" style="float: right; margin-bottom: 3px;" data-toggle="modal" data-target="#modal-default3<?php echo $q->id_soal ?>"><span class="fa fa-edit"></span></button> -->
                                <input type="text" class="form-control" disabled="" value="<?php echo $q->pertanyaan ?>">
                                <div class="row">
                                  <div class="col-md-10">
                                    <div class="input-group" style="margin: 5px 0px 5px 10px">
                                      <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                                      <input type="text" class="form-control" disabled="" value="<?php echo $q->a ?>" >
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="input-group" style="margin: 5px 0px 5px 0px">
                                      <input type="text" class="form-control" value="<?php echo $q->bobot_a ?>" placeholder="Nilai Jawaban" disabled="">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-10">
                                    <div class="input-group" style="margin: 5px 0px 5px 10px">
                                      <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                                      <input type="text" class="form-control" disabled="" value="<?php echo $q->b ?>" >
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="input-group" style="margin: 5px 0px 5px 0px">
                                      <input type="text" class="form-control" value="<?php echo $q->bobot_b ?>" placeholder="Nilai Jawaban" disabled="">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-10">
                                    <div class="input-group" style="margin: 5px 0px 5px 10px">
                                      <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                                      <input type="text" class="form-control" disabled="" value="<?php echo $q->c ?>" >
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="input-group" style="margin: 5px 0px 5px 0px">
                                      <input type="text" class="form-control" value="<?php echo $q->bobot_c ?>" placeholder="Nilai Jawaban" disabled="">
                                    </div>
                                  </div>
                                </div>
=======
                              <button type="button" class="btn btn-primary btn-flat" title="Edit" style="float: right; margin-bottom: 3px;" data-toggle="modal" data-target="#modal-default3<?php echo $q->id_soal ?>"><span class="fa fa-edit"></span></button> -->
                              <input type="text" class="form-control" disabled="" value="<?php echo $q->pertanyaan ?>">

                              <div class="row">
                                <div class="col-md-10">
                                  <div class="input-group" style="margin: 5px 0px 5px 10px">
                                    <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                                    <input type="text" class="form-control" disabled="" value="<?php echo $q->a ?>" >
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group" style="margin: 5px 0px 5px 0px">
                                    <input type="text" class="form-control" value="<?php echo $q->bobot_a ?>" placeholder="Nilai Jawaban" disabled="">
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-10">
                                  <div class="input-group" style="margin: 5px 0px 5px 10px">
                                    <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                                    <input type="text" class="form-control" disabled="" value="<?php echo $q->b ?>" >
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group" style="margin: 5px 0px 5px 0px">
                                    <input type="text" class="form-control" value="<?php echo $q->bobot_b ?>" placeholder="Nilai Jawaban" disabled="">
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-10">
                                  <div class="input-group" style="margin: 5px 0px 5px 10px">
                                    <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                                    <input type="text" class="form-control" disabled="" value="<?php echo $q->c ?>" >
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="input-group" style="margin: 5px 0px 5px 0px">
                                    <input type="text" class="form-control" value="<?php echo $q->bobot_c ?>" placeholder="Nilai Jawaban" disabled="">
                                  </div>
                                </div>
                              </div>

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                              <!-- <div class="input-group" style="margin: 5px 0px 5px 10px">
                                <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                                <input type="text" class="form-control" disabled="" value="<?php echo $q->a ?>" >
                              </div>
<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                              <div class="input-group" style="margin: 5px 0px 5px 10px">
                                <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                                <input type="text" class="form-control" disabled="" value="<?php echo $q->b ?>" >
                              </div>
<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                              <div class="input-group" style="margin: 5px 0px 5px 10px">
                                <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                                <input type="text" class="form-control" disabled="" value="<?php echo $q->c ?>" >
                              </div> -->
                          <!-- <div class="form-group" style="margin: 5px 0px 5px 10px">
                            <input type="text" class="form-control" disabled="" value="Jawaban benar : <?php echo $q->benar ?>" >
                          </div> -->
                        </div>
                      </div>
                    </div>
<<<<<<< HEAD
                  <?php } $num++;}?>
                </form>
              </div>
            </div>
          </div>
        </div>
=======
                    <?php } $num++;}?>
                  </form>
                </div>
              </div>
            </div>
          </div>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
          <!-- <div class="modal fade" id="modal-default1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span></button>
                    <h4 class="modal-title">Edit Quiz</h4>
                  </div>
                  <?php foreach($detail as $d){?>
                    <form role="form" action="<?php echo base_url().'trainer/updatequiz/'.$this->uri->segment(3).'/'.$d->code ?>" method="post">
                      <div class="modal-body">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Course</label>
                            <input type="text" class="form-control" disabled="" value="<?php echo $modul ?>">
                          </div>
                          <div class="form-group">
                            <label>Materi</label>
                            <input type="text" class="form-control" disabled="" value="<?php echo $materi ?>">
                          </div>
                          <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" disabled="" value="<?php if($d->kategori == 'post'){ echo 'Post-Test';}elseif($d->kategori == 'pre'){echo 'Pre-Test';}else{echo 'Praktik';}  ?>">
                          </div>
                          <div class="form-group">
                            <label>Waktu</label>
                            <input type="text" class="form-control" name="waktu" value="<?php echo $d->waktu ?>">
                          </div>
                        </div>
<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                      <?php } ?>
                    </form>
                  </div>
                </div>
              </div> -->
              <?php foreach ($quiz as $q){ ?>
                <div class="modal fade" id="modal-default<?php echo $q->id_soal ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">x</span></button>
                          <h4 class="modal-title">Edit Soal</h4>
                        </div>
                        <form role="form" action="<?php echo base_url().'trainer/updatesoal/'.$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" method="post">
                          <div class="modal-body">
                            <div class="box-body">
                              <div class="form-group">
                                <input type="text" class="form-control" name="pertanyaan" value="<?php echo $q->pertanyaan ?>">
                              </div>
                              <input type="hidden" name="id_soal" value="<?php echo $q->id_soal ?>">
                              <input type="hidden" name="A" value="">
                              <input type="hidden" name="B" value="">
                              <input type="hidden" name="C" value="">
                              <input type="hidden" name="jawaban" value="">
                              <!-- <input type="text" class="form-control" placeholder="Jawaban" name="benar<?php echo $no ?>" > -->
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
<<<<<<< HEAD
                <?php } ?>
                <?php foreach ($quiz as $q){ ?>
                  <div class="modal fade" id="modal-default3<?php echo $q->id_soal ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span></button>
                            <h4 class="modal-title">Edit Soal</h4>
                          </div>
                          <form role="form" action="<?php echo base_url().'trainer/updatesoal/'.$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" method="post">
                            <div class="modal-body">
                              <div class="box-body">
                                <div class="form-group">
                                  <input type="hidden" name="id_soal" value="<?php echo $q->id_soal ?>">
                                  <input type="text" class="form-control" name="pertanyaan" value="<?php echo $q->pertanyaan ?>">
                                  <div class="row">
                                    <div class="col-md-10">
                                      <div class="input-group" style="margin: 5px 0px 5px 10px">
                                        <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                                        <input type="text" class="form-control" name="A" value="<?php echo $q->a ?>" >
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group" style="margin: 5px 0px 5px 0px">
                                        <input type="text" class="form-control" name="bobot_a" value="<?php echo $q->bobot_a ?>" placeholder="Nilai Jawaban" >
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-10">
                                      <div class="input-group" style="margin: 5px 0px 5px 10px">
                                        <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                                        <input type="text" class="form-control" name="B" value="<?php echo $q->b ?>" >
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group" style="margin: 5px 0px 5px 0px">
                                        <input type="text" class="form-control" name="bobot_b" value="<?php echo $q->bobot_b ?>" placeholder="Nilai Jawaban" >
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-10">
                                      <div class="input-group" style="margin: 5px 0px 5px 10px">
                                        <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                                        <input type="text" class="form-control" name="C" value="<?php echo $q->c ?>" >
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="input-group" style="margin: 5px 0px 5px 0px">
                                        <input type="text" class="form-control" name="bobot_c" value="<?php echo $q->bobot_c ?>" placeholder="Nilai Jawaban" >
                                      </div>
                                    </div>
                                  </div>
                                   <!--<div class="input-group" style="margin: 5px 0px 5px 10px">
=======
                  <?php } ?>
                  <?php foreach ($quiz as $q){ ?>
                    <div class="modal fade" id="modal-default3<?php echo $q->id_soal ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">x</span></button>
                              <h4 class="modal-title">Edit Soal</h4>
                            </div>
                            <form role="form" action="<?php echo base_url().'trainer/updatesoal/'.$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" method="post">
                              <div class="modal-body">
                                <div class="box-body">
                                  <div class="form-group">
                                    <input type="hidden" name="id_soal" value="<?php echo $q->id_soal ?>">
                                    <input type="text" class="form-control" name="pertanyaan" value="<?php echo $q->pertanyaan ?>">

                                    <div class="row">
                                      <div class="col-md-10">
                                        <div class="input-group" style="margin: 5px 0px 5px 10px">
                                          <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                                          <input type="text" class="form-control" name="A" value="<?php echo $q->a ?>" >
                                        </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="input-group" style="margin: 5px 0px 5px 0px">
                                          <input type="text" class="form-control" name="bobot_a" value="<?php echo $q->bobot_a ?>" placeholder="Nilai Jawaban" >
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-10">
                                        <div class="input-group" style="margin: 5px 0px 5px 10px">
                                          <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                                          <input type="text" class="form-control" name="B" value="<?php echo $q->b ?>" >
                                        </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="input-group" style="margin: 5px 0px 5px 0px">
                                          <input type="text" class="form-control" name="bobot_b" value="<?php echo $q->bobot_b ?>" placeholder="Nilai Jawaban" >
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-10">
                                        <div class="input-group" style="margin: 5px 0px 5px 10px">
                                          <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                                          <input type="text" class="form-control" name="C" value="<?php echo $q->c ?>" >
                                        </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="input-group" style="margin: 5px 0px 5px 0px">
                                          <input type="text" class="form-control" name="bobot_c" value="<?php echo $q->bobot_c ?>" placeholder="Nilai Jawaban" >
                                        </div>
                                      </div>
                                    </div>
 <!--                                    <div class="input-group" style="margin: 5px 0px 5px 10px">
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                                      <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                                      <input type="text" class="form-control" name="A" value="<?php echo $q->a ?>">
                                    </div>
                                    <div class="input-group" style="margin: 5px 0px 5px 10px">
                                      <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                                      <input type="text" class="form-control" name="B" value="<?php echo $q->b ?>">
                                    </div>
                                    <div class="input-group" style="margin: 5px 0px 5px 10px">
                                      <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                                      <input type="text" class="form-control" name="C" value="<?php echo $q->c ?>">
                                    </div>
                                    <div class="form-group" style="margin: 5px 0px 5px 10px">
                                      <select class="form-control" name="jawaban" required="">
                                        <option value="<?php echo $q->benar ?>"><?php echo $q->benar ?></option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                      </select>
                                    </div> -->
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
                      </div>
<<<<<<< HEAD
                    <?php } ?>
                    <div class="modal fade" id="modal-default4">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">x</span></button>
                              <h4 class="modal-title">Tambah Soal</h4>
                            </div>
                            <form role="form" action="<?php echo base_url().'trainer/updatesoal2/'.$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" method="post">
                              <div class="modal-body">
                                <?php if($tipesoal == 'essay'){ ?>
                                  <div class="box-body">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="pertanyaan" placeholder="Tulis Soal Di Sini" required="">
                                    </div>
                                    <input type="hidden" name="A" value="">
                                    <input type="hidden" name="B" value="">
                                    <input type="hidden" name="C" value="">
                                    <input type="hidden" name="jawaban" value="">
                                    <!-- <input type="text" class="form-control" placeholder="Jawaban" name="benar<?php echo $no ?>" > -->
                                  </div>
                                <?php } else{?>
                                  <div class="box-body">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="pertanyaan" placeholder="Tulis Soal Di Sini" required="">
                                      <div class="row">
                                        <div class="col-md-10">
                                          <div class="input-group" style="margin: 5px 0px 5px 10px">
                                            <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                                            <input type="text" class="form-control" name="A"  >
                                          </div>
                                        </div>
                                        <div class="col-md-2">
                                          <div class="input-group" style="margin: 5px 0px 5px 0px">
                                            <input type="text" class="form-control" name="bobot_a" placeholder="Nilai Jawaban" >
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-10">
                                          <div class="input-group" style="margin: 5px 0px 5px 10px">
                                            <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                                            <input type="text" class="form-control" name="B">
                                          </div>
                                        </div>
                                        <div class="col-md-2">
                                          <div class="input-group" style="margin: 5px 0px 5px 0px">
                                            <input type="text" class="form-control" name="bobot_b" placeholder="Nilai Jawaban" >
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-10">
                                          <div class="input-group" style="margin: 5px 0px 5px 10px">
                                            <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                                            <input type="text" class="form-control" name="C" >
                                          </div>
                                        </div>
                                        <div class="col-md-2">
                                          <div class="input-group" style="margin: 5px 0px 5px 0px">
                                            <input type="text" class="form-control" name="bobot_c" placeholder="Nilai Jawaban" >
                                          </div>
                                        </div>
                                      </div>
                                          <!--<div class="input-group" style="margin: 5px 0px 5px 10px">
=======
                      <?php } ?>
                      <div class="modal fade" id="modal-default4">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span></button>
                                <h4 class="modal-title">Tambah Soal</h4>
                              </div>
                              <form role="form" action="<?php echo base_url().'trainer/updatesoal2/'.$this->uri->segment(3).'/'.$this->uri->segment(4) ?>" method="post">
                                <div class="modal-body">
                                  <?php if($tipesoal == 'essay'){ ?>
                                    <div class="box-body">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="pertanyaan" placeholder="Tulis Soal Di Sini" required="">
                                      </div>
                                      <input type="hidden" name="A" value="">
                                      <input type="hidden" name="B" value="">
                                      <input type="hidden" name="C" value="">
                                      <input type="hidden" name="jawaban" value="">
                                      <!-- <input type="text" class="form-control" placeholder="Jawaban" name="benar<?php echo $no ?>" > -->
                                    </div>
                                    <?php } else{?>
                                      <div class="box-body">
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="pertanyaan" placeholder="Tulis Soal Di Sini" required="">
                                          <div class="row">
                                            <div class="col-md-10">
                                              <div class="input-group" style="margin: 5px 0px 5px 10px">
                                                <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                                                <input type="text" class="form-control" name="A"  >
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div class="input-group" style="margin: 5px 0px 5px 0px">
                                                <input type="text" class="form-control" name="bobot_a" placeholder="Nilai Jawaban" >
                                              </div>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-10">
                                              <div class="input-group" style="margin: 5px 0px 5px 10px">
                                                <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                                                <input type="text" class="form-control" name="B">
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div class="input-group" style="margin: 5px 0px 5px 0px">
                                                <input type="text" class="form-control" name="bobot_b" placeholder="Nilai Jawaban" >
                                              </div>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-10">
                                              <div class="input-group" style="margin: 5px 0px 5px 10px">
                                                <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                                                <input type="text" class="form-control" name="C" >
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div class="input-group" style="margin: 5px 0px 5px 0px">
                                                <input type="text" class="form-control" name="bobot_c" placeholder="Nilai Jawaban" >
                                              </div>
                                            </div>
                                          </div>
                   <!--                        <div class="input-group" style="margin: 5px 0px 5px 10px">
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                                            <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                                            <input type="text" class="form-control" name="A" placeholder="Tulis Jawaban Disini" required="">
                                          </div>
                                          <div class="input-group" style="margin: 5px 0px 5px 10px">
                                            <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                                            <input type="text" class="form-control" name="B" placeholder="Tulis Jawaban Disini" required="">
                                          </div>
                                          <div class="input-group" style="margin: 5px 0px 5px 10px">
                                            <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                                            <input type="text" class="form-control" name="C" placeholder="Tulis Jawaban Disini" required="">
                                          </div>
                                          <div class="form-group" style="margin: 5px 0px 5px 10px">
                                            <select class="form-control" name="jawaban" required="">
                                              <option value="">Pilih Jawaban Benar</option>
                                              <option value="A">A</option>
                                              <option value="B">B</option>
                                              <option value="C">C</option>
                                            </select>
<<<<<<< HEAD
                                          </div>-->                                        
                                        </div>
                                      </div>
                                    <?php } ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
=======
                                          </div>
                                        -->                                        </div>
                                      </div>
                                      <?php } ?>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
<!-- /.content-wrapper
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
