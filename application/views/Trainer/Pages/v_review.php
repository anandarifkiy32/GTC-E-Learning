<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url('trainer/submitreview/'.$this->uri->segment(3).'/'.$this->uri->segment(4)) ?>" method="POST">
            <div class="box-body">
              <?php $no = 1 ;foreach ($jawaban as $j) { ?>
                <div class="form-group">
                  <label for="exampleInputEmail1"><?php echo $no.'. '.$j->pertanyaan ?></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $j->jawaban ?>" readonly>
                  <input type="text" class="form-control" name="<?php echo $j->id_jawaban ?>" placeholder="Nilai" value="<?php echo $j->nilai ?>" style="width:60px">
                </div>
                <?php $no++; } ?>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->