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
                        <label>Modul</label>
                        <input type="text" class="form-control" value="<?php echo $namamodul ?>" disabled="">
                      </div>
                      <div class="form-group">
                        <label>Materi</label>

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
                  The European languages are members of the same family. Their separate existence is a myth.
                  For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                  in their grammar, their pronunciation and their most common words. Everyone realizes why a
                  new common language would be desirable: one could refuse to pay expensive translators. To
                  achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                  words. If several languages coalesce, the grammar of the resulting language is more simple
                  and regular than that of the individual languages.
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  It has survived not only five centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                  sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                  like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <!-- /.tab-pane -->
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