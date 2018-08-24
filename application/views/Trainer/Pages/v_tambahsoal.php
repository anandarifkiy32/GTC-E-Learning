<<<<<<< HEAD
<div class="content-wrapper">
=======
Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
  <section class="content-header">
    <h1>
      Soal
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Modul</li>
      <li class="active">Detail Materi</li>
      <li class="active">Tambah Soal</li>
    </ol>
  </section>
<<<<<<< HEAD
  <section class="content">
=======

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5>Input Soal</h5>
          </div>
          <div class="panel-body">
            <form action="<?php echo base_url('trainer/tambahtest/'.$this->uri->segment(3)) ?>" method="post">
              <?php if($tipesoal == 'essay' || $tipesoal == 'file'){
                for ($no=1; $no <= $jumlah_soal; $no++){ ?>
                  <div class="form-group">
                    <label>Soal No. <?php echo $no;  ?></label>
                    <input type="text" class="form-control" name="pertanyaan<?php echo $no ?>" placeholder="Tulis Soal Di Sini" required="">
                    <!-- <input type="text" class="form-control" placeholder="Jawaban" name="benar<?php echo $no ?>" > -->
                  </div>
<<<<<<< HEAD
                <?php } }else{ for ($no=1; $no <= $jumlah_soal; $no++){  ?>
                  <div class="form-group">
                    <label>Soal No. <?php echo $no ?></label>
                    <input type="text" class="form-control" name="pertanyaan<?php echo $no ?>" placeholder="Tulis Soal Di Sini" required="">
                    <div class="row">
                      <div class="col-md-10">
                        <div class="input-group" style="margin: 5px 0px 5px 10px">
                          <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                          <input type="text" class="form-control" name="A<?php echo $no ?>" placeholder="Tulis Jawaban Disini" required="">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group" style="margin: 5px 0px 5px 0px">
                          <input type="text" class="form-control" name="bobot_a<?php echo $no ?>" placeholder="Nilai Jawaban" required="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <div class="input-group" style="margin: 5px 0px 5px 10px">
                          <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                          <input type="text" class="form-control" name="B<?php echo $no ?>" placeholder="Tulis Jawaban Disini" required="">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group" style="margin: 5px 0px 5px 0px">
                          <input type="text" class="form-control" name="bobot_b<?php echo $no ?>" placeholder="Nilai Jawaban" required="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <div class="input-group" style="margin: 5px 0px 5px 10px">
                          <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                          <input type="text" class="form-control" name="C<?php echo $no ?>" placeholder="Tulis Jawaban Disini" required="">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="input-group" style="margin: 5px 0px 5px 0px">
                          <input type="text" class="form-control" name="bobot_c<?php echo $no ?>" placeholder="Nilai Jawaban" required="">
                        </div>
                      </div>
                    </div>
=======
                  <?php } }else{ for ($no=1; $no <= $jumlah_soal; $no++){  ?>
                    <div class="form-group">
                      <label>Soal No. <?php echo $no ?></label>
                      <input type="text" class="form-control" name="pertanyaan<?php echo $no ?>" placeholder="Tulis Soal Di Sini" required="">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="input-group" style="margin: 5px 0px 5px 10px">
                            <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">A</span>
                            <input type="text" class="form-control" name="A<?php echo $no ?>" placeholder="Tulis Jawaban Disini" required="">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="input-group" style="margin: 5px 0px 5px 0px">
                            <input type="text" class="form-control" name="bobot_a<?php echo $no ?>" placeholder="Nilai Jawaban" required="">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-10">
                          <div class="input-group" style="margin: 5px 0px 5px 10px">
                            <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">B</span>
                            <input type="text" class="form-control" name="B<?php echo $no ?>" placeholder="Tulis Jawaban Disini" required="">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="input-group" style="margin: 5px 0px 5px 0px">
                            <input type="text" class="form-control" name="bobot_b<?php echo $no ?>" placeholder="Nilai Jawaban" required="">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-10">
                          <div class="input-group" style="margin: 5px 0px 5px 10px">
                            <span class="input-group-addon" style="background-color: grey;color: white;font-weight: bold">C</span>
                            <input type="text" class="form-control" name="C<?php echo $no ?>" placeholder="Tulis Jawaban Disini" required="">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="input-group" style="margin: 5px 0px 5px 0px">
                            <input type="text" class="form-control" name="bobot_c<?php echo $no ?>" placeholder="Nilai Jawaban" required="">
                          </div>
                        </div>
                      </div>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                      <!-- <div class="form-group" style="margin: 5px 0px 5px 10px">
                        <select class="form-control" name="jawaban<?php echo $no ?>" required="">
                          <option value="">Pilih Jawaban Benar</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                        </select>
                      </div> -->
                    </div>

<<<<<<< HEAD
                  <?php } } ?>
                  <input type="hidden" name="id_materi" value="<?php echo $id_materi ?>">
                  <input type="hidden" name="id_trainer" value="<?php echo $id_trainer ?>">
                  <input type="hidden" name="waktu" value="<?php echo $waktu ?>">
                  <input type="hidden" name="jumlah_soal" value="<?php echo $jumlah_soal ?>">
                  <input type="hidden" name="tipesoal" value="<?php echo $tipesoal ?>">
                  <input type="hidden" name="kategori" value="<?php echo $kategori ?>">
                  <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
=======
                    <?php } } ?>
                    <input type="hidden" name="id_materi" value="<?php echo $id_materi ?>">
                    <input type="hidden" name="id_trainer" value="<?php echo $id_trainer ?>">
                    <input type="hidden" name="waktu" value="<?php echo $waktu ?>">
                    <input type="hidden" name="jumlah_soal" value="<?php echo $jumlah_soal ?>">
                    <input type="hidden" name="tipesoal" value="<?php echo $tipesoal ?>">
                    <input type="hidden" name="kategori" value="<?php echo $kategori ?>">
                    <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
<!-- /.content-wrapper
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
