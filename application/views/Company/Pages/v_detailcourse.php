<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Detail Course
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Detail Course</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-7">
        <div class="box box-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-blue">
            <div class="row">
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
              </div>
            </div>
            <div class="box-body">
              <table class="table table-condensed" style="font-size: 16px"> 
                <tr>
                  <td style="font-size: 16px" width="25%">Trainer</td>
                  <td><?php echo $namatrainer ?></td>
                </tr>
                <tr>
                  <td style="font-size: 16px" width="25%">Deskripsi</td>
                  <td><?php echo $m->deskripsi ?></td>
                </tr>
              <?php } foreach($company as $cmp){ ?>
                <tr>
                  <td style="font-size: 16px" width="25%">Perusahaan</td>
                  <td><?php echo $cmp->nama; } ?></td>
                </tr>
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
          </div>
        </div>
        <div class="col-md-5">
          <div class="box" style="border-top:none;">
            <div class="box-header" style="color">
              <h3 class="box-title">Modul</h3>
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
                      <a href="<?php echo base_url().'company/detailmateri/'.$s->slug ?>"><button class="btn btn-primary btn-flat btn-xs">Lihat</button></a>
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
                        <td align="right"><a href="<?php echo base_url('company/detailpeserta/'.$dp->code)?>"><button class="btn btn-success btn-flat">Detail</button></a></td>
                      </tr>
                      <?php $num++; } ?>
                    </tbody>

                  </table>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
<!-- /.content-wrapper -->