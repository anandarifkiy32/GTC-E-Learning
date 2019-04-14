<div class="content-wrapper">
  <section class="content-header">
    <a href="<?php echo base_url('company/detailcourse/'.$slugmodul) ?>"><button type="button" class="btn btn-flat btn-success"><span class="fa fa-arrow-left"></span> Back</button></a>
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
    <?php if($id_company == $this->session->userdata('id_company')){ ?>
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
                    <h5 class="description" align="left">Tempat, Tanggal Lahir</h5>
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
                    <h5 class="description" align="left">Alamat</h5>
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
                    <h5 class="description" align="left">Telepon / HP</h5>
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
                    <h5 class="description" align="left">Email</h5>
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
                    <h5 class="description" align="left">Biografi</h5>
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
                    <h5 class="description" align="left">Kantor</h5>
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
                    <h5 class="description" align="left">Alamat Kantor</h5>
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
                    <h5 class="description" align="left">Telepon Kantor</h5>
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
                  <th><center></center></th>
                </tr>
                <?php $no=1 ;foreach ($quiz as $s) { ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $s->judul ?></td>
                    <td><?php if($s->kategori == 'post'){ echo 'Post-Test';}elseif($s->kategori == 'pre'){echo 'Pre-Test';}else{echo 'Praktik';}  ?></td>
                    <td><center><?php if($s->nilai == NULL){echo 'Belum Di review';}else{echo $s->nilai;} ?><center></td>
                      <td><?php echo $s->status ?></td>
                      <td align="right">
                        <a href="<?php echo base_url().'company/review/'.$this->uri->segment(3).'/'.$s->coderesult ?>"><button class="btn btn-primary btn-flat">Review</button></a>
                      </td>
                    </tr>
                    <?php $no++; } ?>
                  </table>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      <?php }else{ ?>
       <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>
        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
          <p>
            Kami melihat anda tidak memiliki course ini.
            Atau anda ingin <a href="<?php echo base_url('company') ?>">kembali ke dashboard</a>
          </p>
        </div>
      </div>
    <?php } ?>
  </section>
</div>