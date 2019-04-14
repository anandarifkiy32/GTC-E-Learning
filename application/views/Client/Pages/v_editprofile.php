<div id="blog" class="section">

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

      <!-- main blog -->
      <div id="main" class="col-md-12">

        <!-- blog post -->
        <div class="blog-post">
          <?php foreach ($profile as $p) { ?>
            <form method="post" action="<?php echo base_url('homepage/updateprofile/') ;?>">
              <div class="form-group">
                <label> Nama Lengkap</label>
                <input class="form-control" type="text" name="namalengkap" value="<?php echo $p->nama ?>">
              </div>
              <div class="form-group">
                <label> Jenis Kelamin</label>
                <select class="form-control" name="gender">
                  <option value="<?php echo $p->gender ?>"><?php echo $p->gender ?></option>
                  <option value="P">Perempuan</option>
                  <option value="L">Laki-laki</option>
                </select>
              </div>
              <div class="form-group">
                <label> Tempat Lahir</label>
                <input class="form-control" type="text" name="tempatlahir" value="<?php echo $p->tempatlahir ?>">
              </div>
              <div class="form-group">
                <label for="dtp_input2">Tanggal Lahir :</label>

                <input class="form-control form_date date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" size="16" type="text" value="<?php echo $p->ttl ?>" readonly>

                <input type="hidden" id="dtp_input2" value="<?php echo $p->ttl ?>" name="tgl"/>
              </div>
              <div class="form-group">
                <label> Alamat</label>
                <textarea class="form-control" name="alamat"><?php echo $p->alamat; ?></textarea>
              </div>
              <div class="form-group">
                <label> Telepon/ HP</label>
                <input class="form-control" type="text" name="telepon" value="<?php echo $p->telp ?>">
              </div>
              <div class="form-group">
                <label> Kantor</label>
                <input class="form-control" type="text" name="kantor" value="<?php echo $p->kantor ?>">
              </div>
              <div class="form-group">
                <label> Alamat Kantor</label>
                <textarea class="form-control" name="alamat_kantor"><?php echo $p->alamat_kantor; ?></textarea>
              </div>
              <div class="form-group">
                <label> Telepon Kantor</label>
                <input class="form-control" type="text" name="telepon_kantor" value="<?php echo $p->telp_kantor ?>">
              </div>
              <div class="form-group">
                <label> Biografi</label>
                <textarea class="form-control" name="biografi"><?php echo $p->biografi ?></textarea>
              </div>
              <button class="btn btn-primary" style="float: right;">Submit</button>
            </form>
            <a href="<?php echo base_url('homepage/showprofile'); ?>"><button class="btn btn-default">Cancel</button></a>
            <?php } ?>
            
          </div>
          <!-- /blog post -->
          
        </div>
        <!-- /main blog -->

        

      </div>
      <!-- row -->

    </div>
    <!-- container -->

  </div>