<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Quiz
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Tambah Quiz</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Teori</a></li>
            <li><a href="#tab_2" data-toggle="tab">Praktek</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="panel panel-default" style="border-radius: 0px;">
                <div class="box-body">
                  <?php foreach ($materi as $m) { ?>
                    <form role="form" action="<?php echo base_url().'trainer/tambahsoal/'.$m->slug?>" method="post">
                      <div class="form-group">
                        <label>Kategori</label>
                        <select type="text" class="form-control" name="kategori" required="">
                          <option value="">Pilih Kategori Test</option>
                          <option value="pre">Pre-Test</option>
                          <option value="post">Post-Test</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Course</label>
                        <input type="text" class="form-control" value="<?php echo $namamodul ?>" disabled="">
                      </div>
                      <div class="form-group">
                        <label>Modul / Materi</label>

                        <input type="text" class="form-control" value="<?php echo $m->judul ?>" disabled="">
                        <input type="hidden" name="id_materi" value="<?php echo $m->id_materi ?>">
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label>Trainer</label>
                      <?php foreach ($profile as $p) { ?>
                        <input type="text" class="form-control" value="<?php echo $p->nama ?>" disabled="">
                        <input type="hidden" name="id_trainer" value="<?php echo $p->id_trainer ?>">
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label>Waktu Pengerjaan</label>
                      <input type="number" name="waktu" class="form-control" placeholder="Ex: 60 (menit)" required="">
                    </div>
                    <div class="form-group">
                      <label>Tipe Soal</label>
                      <select type="text" class="form-control" name="tipesoal" required="">
                        <option value="">Pilih Tipe Soal</option>
                        <option value="multiple">Multiple Choice</option>
                        <option value="essay">Essay</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Jumlah Soal</label>
                      <input type="number" name="jumlah_soal" class="form-control" required="">
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right; border-radius: 0px;">Next</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              <div class="panel panel-default" style="border-radius: 0px;">
                <div class="box-body">
                  <?php foreach ($materi as $m) { ?>
                    <form role="form" action="<?php echo base_url().'trainer/tambahsoal/'.$m->slug?>" method="post">
                      <div class="form-group">
                        <label>Kategori</label>
                        <select type="text" class="form-control" name="kategori" required="">
                          <option value="">Pilih Kategori Test</option>
                          <option value="pre">Pre-Test</option>
                          <option value="post">Post-Test</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Course</label>
                        <input type="text" class="form-control" value="<?php echo $namamodul ?>" disabled="">
                      </div>
                      <div class="form-group">
                        <label>Modul / Materi</label>

                        <input type="text" class="form-control" value="<?php echo $m->judul ?>" disabled="">
                        <input type="hidden" name="id_materi" value="<?php echo $m->id_materi ?>">
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label>Trainer</label>
                      <?php foreach ($profile as $p) { ?>
                        <input type="text" class="form-control" value="<?php echo $p->nama ?>" disabled="">
                        <input type="hidden" name="id_trainer" value="<?php echo $p->id_trainer ?>">
                      <?php } ?>
                    </div>
                    <input type="hidden" name="tipesoal" value="file">
                    <div class="form-group">
                      <label>Jumlah Soal</label>
                      <input type="number" name="jumlah_soal" class="form-control" required="">
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right; border-radius: 0px;">Next</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->

      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->