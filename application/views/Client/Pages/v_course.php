<div id="blog" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- main blog -->
      <div id="main" class="col-md-9 tab-content">
        <!-- blog post -->
        <?php if($this->session->flashdata('quiz')){?>
        <div class="alert alert-success alert-dismissible">
          <h4><i class="icon fa fa-check"></i>Quiz berhasil dikirim !</h4>
         Menunggu direview oleh trainer.
        </div>
        <?php } ?>
        <?php 
        $num=0;
        foreach ($course as $c) { ?>

          <div id="tab<?php echo $num; ?>" class="tab-pane fade in blog-post <?php if($num == 0){echo 'active';} ?>">
            <!-- <h3><?php echo $c->materi ?></h3> -->
            <div style="position:relative;height:0;padding-bottom:56.26%"><iframe src="<?php echo $c->konten ?>?autoplay=0&showinfo=0&rel=0" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
            <br><br>
            <p><?php echo $c->description; ?></p>

            <br><br>
            <div class="blog-post">
              <a class="main-button icon-button" href="<?php echo base_url('homepage/quizoverview/'.$c->slug ) ?>" style="width: 300px">Start Quiz</a>      
            </div>
          </div>
          <?php $num++; } ?>
        </div>
        <div id="aside" class="col-md-3">
          <!-- category widget -->
          <div class="widget category-widget">
            <h3>Your Score</h3>
            <i class="fa fa-user"></i>&nbsp;&nbsp;<?php foreach ($profile as $p) {echo $p->nama; } ?>

            <h1 style="color:green;">
             <?php
             $skor = 0; 
             $pembagi = 0;
             if($nilai){
              foreach ($nilai as $n) {
                $skor = $skor + $n->nilai;
                $pembagi++;
              } 
              $nilai = $skor/$pembagi;
              echo $nilai;
            }else{
              echo '0';
            }
            ?>

          </h1>
        </div>
        <!-- /category widget -->
        <!-- category widget -->
        <div class="widget category-widget tab">
          <h3>Modul</h3>
          <ul class="nav">
            <?php $num=0; foreach ($course as $c) { ?>
              <li class="<?php if($num == 0){echo 'active';} ?>">
                <a class="category" data-toggle="tab" href="#tab<?php echo $num; ?>"><?php echo $c->materi ?>
                <span>Skor : 
                  <?php 
                  if($nilai2){
                    foreach($nilai2 as $n) {
                      if($c->id_materi == $n->id_materi){
                        if($n->nilai == ''){
                          echo 'Belum di review';
                        }else{
                          echo $n->nilai;
                        }
                      }else{
                        echo 'Tidak ada';
                      }
                    }
                  }else{
                    echo 'Tidak ada';
                  } ?>

                </span></a></li>
                <?php $num++; } ?>
              </ul>

            </div>

            <!-- /category widget -->
            <!-- category widget -->
          <!--   <div class="widget category-widget">
              <h3>Need Guide ?</h3>
              <a class="main-button icon-button" href="#" style="width: 300px">Let's Start</a>
            </div>
          -->            <!-- /category widget -->
        </div>
        <!-- /aside blog -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>