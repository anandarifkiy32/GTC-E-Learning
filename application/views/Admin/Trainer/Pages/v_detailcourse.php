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
                <div class="col-md-8" style="padding-left: 0px">
                  <h3 class="widget-user-username" style="margin-left: 0px;"><?php echo $m->nama ?></h3>
                  <h5 class="widget-user-desc" style="margin-left: 0px;"><?php echo $m->category ?></h5>
                </div>
                <div class="col-md-2">
                  <button class="btn btn-success" style="position: absolute;right: 10px;top: 0px;">Edit</button>
                </div>  
              </div>
            </div>
            <div class="box-body">
              <table class="table table-condensed" style="font-size: 16px"> 
                <tr>
                  <td style="font-size: 16px" width="25%">Deskripsi</td>
                  <td><?php echo $m->deskripsi ?></td>
                </tr>
                <?php } ?>
                <tr>
                  <td style="font-size: 16px">Jumlah Modul</td>
                  <td><?php echo $jumlah_materi ?></td>
                </tr>
                <tr>
                  <td style="font-size: 16px">Jumlah Peserta</td>
                  <td>56</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="box" style="border-top:none;">
            <div class="box-header" style="color">
              <h3 class="box-title">Sub Materi</h3>
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
                      <button class="btn btn-primary btn-flat">Lihat</button>
                    </td>
                  </tr>
                  <?php } ?>
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