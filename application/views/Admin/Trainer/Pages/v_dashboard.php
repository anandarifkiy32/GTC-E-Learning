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
            <?php foreach ($course as $c) { ?>
                <div class="col-md-3">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-black" style="background: url('./assets/modul/<?php echo $c->img ?>'); fill: cover">
                          <h3 class="widget-user-username"><?php echo $c->nama ?></h3>
                      </div>
                      <div class="box-footer">
                          <div class="row">
                            <div class="col-sm-6 border-right">
                              <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Sub Bab</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 border-right">
                          <div class="description-block">
                            <h5 class="description-header">13,000</h5>
                            <span class="description-text">Peserta</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <?php } ?>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->