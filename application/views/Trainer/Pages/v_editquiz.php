<<<<<<< HEAD
<div class="content-wrapper">
=======
<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
  <section class="content-header">
    <h1>
      Edit Detail Quiz
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Modul</li>
      <li class="active">Detail Materi</li>
      <li class="active">Edit Detail Quiz</li>
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
        <div class="panel panel-default" style="border-radius: 0px;">
          <div class="panel-heading">
            <h5>Detail Quiz</h5>
          </div>
          <div class="panel-body">
            <?php foreach ($test as $t) { ?>
<<<<<<< HEAD
              <form role="form" action="<?php echo base_url().'trainer/updatequiz/'.$this->uri->segment(3)?>" method="post">
                <div class="form-group">
                  <label>Modul</label>
                  <input type="text" class="form-control" value="<?php echo $namamodul ?>" disabled="">
                </div>
                <div class="form-group">
                  <label>Materi</label>              
                  <input type="text" class="form-control" value="<?php echo $t->judul ?>" disabled="">
                  <input type="hidden" name="id_materi" value="<?php echo $t->id_materi ?>">
                </div>
                <div class="form-group">
                  <label>Trainer</label>
=======
            <form role="form" action="<?php echo base_url().'trainer/updatequiz/'.$this->uri->segment(3)?>" method="post">
              <div class="form-group">
                <label>Modul</label>
                  <input type="text" class="form-control" value="<?php echo $namamodul ?>" disabled="">
              </div>
              <div class="form-group">
                <label>Materi</label>
                
                  <input type="text" class="form-control" value="<?php echo $t->judul ?>" disabled="">
                  <input type="hidden" name="id_materi" value="<?php echo $t->id_materi ?>">
              </div>
              <div class="form-group">
                <label>Trainer</label>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                  <input type="text" class="form-control" value="<?php echo $t->namatrainer ?>" disabled="">
                  <input type="hidden" name="id_trainer" value="<?php echo $t->id_trainer ?>">
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Waktu Pengerjaan</label>
                <input type="number" name="waktu" class="form-control" value="<?php echo $t->waktu ?>">
              </div>
              <button type="submit" class="btn btn-primary" style="float: right; border-radius: 0px;">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<<<<<<< HEAD
</div>
=======
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3