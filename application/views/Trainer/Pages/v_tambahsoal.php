<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
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

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5>Input Soal</h5>
          </div>
          <div class="panel-body">
            <form action="<?php echo base_url('trainer/tambahtest/'.$this->uri->segment(3)) ?>" method="post">
              <?php for ($no=1; $no <= $jumlah_soal; $no++){ ?>
                <div class="form-group">
                  <label>Soal No. <?php echo $no;  ?></label>
                  <input type="text" class="form-control" name="pertanyaan<?php echo $no ?>" placeholder="Tulis Soal Di Sini" required="">
                  <select class="form-control" name="tipe<?php echo $no ?>">
                    <option>Pilih Tipe Jawaban</option>
                    <option value="text">Text</option>
                    <option value="file">File(Audio/Video/Image)</option>
                  </select>
                </div>
              <?php }?>
              <input type="hidden" name="id_materi" value="<?php echo $id_materi ?>">
              <input type="hidden" name="id_trainer" value="<?php echo $id_trainer ?>">
              <input type="hidden" name="waktu" value="<?php echo $waktu ?>">
              <input type="hidden" name="jumlah_soal" value="<?php echo $jumlah_soal ?>">
              <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->