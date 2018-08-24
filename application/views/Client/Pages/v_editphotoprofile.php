<div id="blog" class="section">

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

      <!-- main blog -->
      <div id="main" class="col-md-12">

        <!-- blog post -->
        <div class="blog-post">
          <?php if($status == 'failed'){ ?>
          <div class="alert alert-danger alert-dismissible">
            <h4><i class="icon fa fa-check"></i> Gagal !</h4>
            File tidak cocok atau tidak memenuhi syarat.
          </div>
          <?php } ?>
          <?php foreach ($profile as $p) { ?>
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('homepage/uploadphoto/');?>">
              <div class="form-group">
                <label> Image</label>
                <input class="form-control" type="file" name="berkas" value="<?php echo $p->img; ?>" required>
                <input class="form-control" type="hidden" name="code" value="<?php echo $p->id_peserta; ?>">
              </div>
              <button class="btn btn-primary" type="submit" style="float: right;">Submit</button>
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