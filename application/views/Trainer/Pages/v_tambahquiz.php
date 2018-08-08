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
        <div class="panel panel-default" style="border-radius: 0px;">
          <div class="panel-heading">
            <h5>Detail Quiz</h5>
          </div>
          <div class="panel-body">
            <?php foreach ($materi as $m) { ?>
            <form role="form" action="<?php echo base_url().'trainer/tambahsoal/'.$m->slug?>" method="post">
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
                <label>Jumlah Soal</label>
                <input type="number" name="jumlah_soal" class="form-control" required="">
              </div>
              <button type="submit" class="btn btn-primary" style="float: right; border-radius: 0px;">Next</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->