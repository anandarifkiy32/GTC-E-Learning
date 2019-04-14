<div class="content-wrapper">
  <section class="content-header">
    <a href="

    <?php if($this->uri->segment(2) == 'detailsertifikasi'){
      echo base_url('admin/certification/');
    }else{
      echo base_url('admin/show_modul/'.$slug);
    } ?>

    "><button type="button" class="btn btn-flat btn-success"><span class="fa fa-arrow-left"></span> Back</button></a>
    <h1>
      Detail Peserta Sertifikasi
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Detail Peserta</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <?php foreach ($detailpeserta as $dp) { ?>
        <div class="col-md-6">
         <div class="box box-widget widget-user">

          <div class="widget-user-header bg-light-blue-active">
            <center><div class="widget-user-username" style="background: none"><?php echo $dp->nama; ?></div></center>
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
                  <h5 class="description" align="left"><?php echo $dp->tempatlahir.', '.date('j F Y',strtotime($dp->ttl)); ?></h5>
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
                  <h5 class="description" align="left"><?php echo $dp->alamat; ?></h5>
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
                  <h5 class="description" align="left"><?php echo $dp->telp; ?></h5>
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
                  <h5 class="description" align="left"><?php echo $dp->email; ?></h5>
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
                  <h5 class="description" align="left"><?php echo $dp->biografi; ?></h5>
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
                  <h5 class="description" align="left"><?php echo $dp->kantor; }?></h5>
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
                  <?php foreach ($detailpeserta as $dp) {
                    # code...
                    ?>
                    <h5 class="description" align="left"><?php echo $dp->alamat_kantor; ?></h5>
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
                    <h5 class="description" align="left"><?php echo $dp->telp_kantor;?></h5>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <?php } ?>
        <?php if($this->uri->segment(2) =='detailsertifikasi'){ ?>
        <?php foreach ($detailpeserta as $dp) { ?>
          <div class="col-md-6">
            <div class="box" style="border-top: none">
              <div class="box-body">
                <?php foreach ($psertifikasi->result() as $ps) { ?>
                <form action="<?php echo base_url('admin/updateaksesor') ?>" method="post">
                  <div class="form-group">
                    <label>Nama Aksesor</label>
                    <input type="hidden" name="psertifikasi" value="<?php echo $ps->id_psertifikasi ?>">
                    <select class="form-control select2" style="width: 100%;" required="" name="aksesor">
                      <option value="" <?php if($ps->id_trainer == NULL) echo "selected='selected'" ?>>Pilih Aksesor</option> 
                      <?php foreach ($trainer->result() as $t) { ?>
                      <option <?php if($ps->id_trainer == $t->id_trainer) echo "selected='selected'" ?> value="<?php echo $t->id_trainer ?>"><?php echo $t->nama ?></option>
                      <?php } ?>
                      
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                <?php } ?>
              </div>

            </div>
          </div>
          <?php } } ?>
        </div>
      </section>
    </div>