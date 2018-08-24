<div class="content-wrapper">
  <?php foreach ($trainer as $t) {  
    ?>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-widget" style="border-radius: 0px; border-color: #fff;">
            <div class="box-header bg-light-blue-active">
              <h4>Trainer Profile</h4>
            </div>
            <div class="box-body">
              <center><img src="<?php echo base_url('assets/profile_photos/trainer/'.$t->img)?>" class="img-circle" width="100" height="100" style="margin-top: 10px;">
              </center>
              <div class="col-md-12">
                <br>
                <div class="table" style="border: 0px;">
                  <table class="table" rules="none">
                    <tr>
                      <th>Nama Trainer</th>
                      <td><?php echo $t->nama; ?></td>
                    </tr>
                    <tr>
                      <th>Tempat Lahir</th>
                      <td><?php echo $t->tempatlahir; ?></td>
                    </tr>
                    <tr>
                      <th>Tanggal Lahir</th>
                      <td><?php echo date('d-M-Y', strtotime($t->ttl)); ?></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td><?php echo $t->alamat; ?></td>
                    </tr>
                    <tr>
                      <th>Telephon / Hp</th>
                      <td><?php echo $t->telp; ?></td>
                    </tr>
                    <tr>
                      <th>E-mail</th>
                      <td><?php echo $t->email; ?></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <div class="row">
      <center><b><h4>Course</h4></b></center>
      <?php foreach ($course as $c) { ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo base_url('company/detailcourse/'.$c->slug) ?>">
            <div class="box box-widget widget-user">
              <div class="widget-user-header bg-black" style="background: url('/gtclearning/assets/modul/<?php echo $c->img ?>'); background-size: cover">
                <h3 class="widget-user-username">
                  <?php echo $c->nama;?>
                </h3>
              </div> 
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
    <div class="modal fade" id="modal-default1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Tambah Course</h4>
            </div>
            <form action="<?php echo base_url('company/tambahcourse') ?>" method="post">
              <div class="modal-body">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Modul</label>
                    <input type="hidden" name="id" value="">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea class="form-control" id="exampleInputPassword1" rows="5" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="category">
                      <?php foreach ($category as $ctg) { ?>
                        <option value="<?php echo $ctg->category ?>" ><?php echo $ctg->category ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="berkas" class="form-control">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>