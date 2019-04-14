<div class="content-wrapper">
  <section class="content-header">
    <a href="<?php echo base_url('admin/show_modul/'.$slugmodul) ?>"><button type="button" class="btn btn-flat btn-success"><span class="fa fa-arrow-left"></span> Back</button></a>
    <h1 style="padding-top: 5px;">
      Detail Peserta
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Detail Peserta</li>
    </ol>
  </section>
  <section class="content">
      <div class="row">
        <div class="col-md-6">
         <div class="box box-widget widget-user">
          <?php foreach ($detailpeserta as $dp) { ?>
            <div class="widget-user-header bg-light-blue-active">
              <center><div class="widget-user-username" style="background: none"><?php echo $dp->nama ?></div></center>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" style="height: 80px;width: 80px" src="<?php if($dp->img == ''){echo base_url('assets/profile_photos/default.jpg');}else{echo base_url('assets/profile_photos/'.$dp->img);} ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row" style="padding:10px 20px 0px 30px">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><b>Tempat, Tanggal Lahir</b></h5>
                  </div>
                </div>
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><?php echo $dp->tempatlahir.', '.date('j F Y',strtotime($dp->ttl)) ?></h5>
                  </div>
                </div>
              </div>
              <div class="row" style="padding:0px 20px 0px 30px">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><b>Alamat</b></h5>
                  </div>
                </div>
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><?php echo $dp->alamat ?></h5>
                  </div>
                </div>
              </div>
              <div class="row" style="padding:0px 20px 0px 30px">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><b>Telepon / HP</b></h5>
                  </div>
                </div>
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><?php echo $dp->telp ?></h5>
                  </div>
                </div>
              </div>
              <div class="row" style="padding:0px 20px 0px 30px">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><b>Email</b></h5>
                  </div>
                </div>
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><?php echo $dp->email ?></h5>
                  </div>
                </div>
              </div>
              <div class="row" style="padding:0px 20px 0px 30px">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><b>Biografi</b></h5>
                  </div>
                </div>
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><?php echo $dp->biografi ?></h5>
                  </div>
                </div>
              </div>
              <div class="row" style="padding:0px 20px 0px 30px">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><b>Kantor</b></h5>
                  </div>
                </div>
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><?php echo $dp->kantor ?></h5>
                  </div>
                </div>
              </div>
              <div class="row" style="padding:0px 20px 0px 30px">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><b>Alamat Kantor</b></h5>
                  </div>
                </div>
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><?php echo $dp->alamat_kantor ?></h5>
                  </div>
                </div>
              </div>
              <div class="row" style="padding:0px 20px 10px 30px">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><b>Telepon Kantor</b></h5>
                  </div>
                </div>
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description" align="left"><?php echo $dp->telp_kantor ?></h5>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box" style="border-top:none;">
          <div class="box-header">
            <h3 class="box-title">Quiz</h3>
          </div>
          <div class="box-body">
            <div class="table table-responsive">
              <table class="table table-condensed">
                <tr>
                  <th style="width: 15px">#</th>
                  <th><center>Judul</center></th>
                  <th><center>Kategori</center></th>
                  <th><center>Skor</center></th>
                  <th><center>Status</center></th>

                </tr>
                <?php $no=1 ;foreach ($quiz as $s) { ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $s->judul ?></td>
                    <td><?php if($s->kategori == 'post'){ echo 'Post-Test';}elseif($s->kategori == 'pre'){echo 'Pre-Test';}else{echo 'Praktik';}  ?></td>
                    <td><center><?php if($s->nilai == NULL){echo 'Belum Di review';}else{echo $s->nilai;} ?><center></td>
                      <td><?php echo $s->status ?></td>
       
                    </tr>
                    <?php $no++; } ?>
                  </table>
                </div>
              </div>
              
            </div>
          </div>
        </div>

  </section>
</div>