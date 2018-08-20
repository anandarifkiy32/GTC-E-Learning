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
          $num=1;
          foreach ($course as $c) { ?>
            <?php 
            $where = 'test.id_test = result.id_test and test.kategori = "pre" and test.id_materi = '.$c->id_materi.' and result.id_peserta = '.$id_peserta;
            $cekpre = $this->Test_model->cekpretes($where)->num_rows();
            $sudahtes = $this->Test_model->cekpretes($where)->result();
            $where = array('kategori' => 'pre', 'id_materi' => $c->id_materi);
            $code = $this->Test_model->select_where($where)->result();
            $jmltes = $this->Test_model->select_where($where)->num_rows();

            ?>
            <div id="tab<?php echo $num; ?>" class="tab-pane fade in blog-post <?php if($num == 1){echo 'active';} ?>">
             <?php if($cekpre < $jmltes){ 
              foreach ($code as $cd) { 
                if($cekpre == 0){ ?>
                  <div class="alert alert-success alert-dismissible">
                    <h4><i class="icon fa fa-exclamation-circle"></i> Ambil Pre-Test untuk melihat materi.</h4>
                    <a class="main-button icon-button" href="<?php echo base_url('homepage/quizoverview/pre/'.$cd->code) ?>" style="width: 150px">Pre-test</a>
                  </div>
                  <?php }else{
                    foreach ($sudahtes as $st) { 
                      if($cd->id_test != $st->id_test ){?>
                       <div class="alert alert-success alert-dismissible">
                        <h4><i class="icon fa fa-exclamation-circle"></i> Ambil Pre-Test untuk melihat materi.</h4>
                        <a class="main-button icon-button" href="<?php echo base_url('homepage/quizoverview/pre/'.$cd->code) ?>" style="width: 150px">Pre-test</a>
                      </div>
                      <?php } } } }?>
                      <?php }else{ ?>
                        <div class="tab2">
                          <button class="tablinks active" onclick="openCity(event, 'materi<?php echo $num.'a'; ?>')">Video</button>
                          <button class="tablinks" onclick="openCity(event, 'materi<?php echo $num.'b'; ?>')">Dokumen</button>
                        </div>
                        <div class="tabcontent fade in" id="materi<?php echo $num.'a'; ?>" style='display: block'>
                          <div style="position:relative;height:0;padding-bottom:56.26%">
                            <?php if($c->konten == ''){
                              echo '<center><div style="position:relative;top:50%">Materi Belum Tersedia</div></center>';
                            }else{ ?>
                              <div class="plyr__video-embed" id="player">
                                <iframe src="<?php echo $c->konten ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
                              </div>
                              <?php } ?>
                            </div>
                          </div>
                          <div class="tabcontent fade in" id="materi<?php echo $num.'b'; ?>">
                            <div class="embed-responsive embed-responsive-16by9" style="width: 100%;height: 100%">
                              <div class="embed-responsive-item">
                                <!-- <iframe src="<?php echo base_url('assets/pdfjs/web/viewer.html?file=').base_url('assets/modul_pdf/'.$c->pdf)?>" allowfullscreen></iframe> -->
                                <?php if($c->pdf == ''){
                                  echo '<center>Materi Belum Tersedia</center>';
                                }else{ ?>
                                  <iframe src="<?php echo base_url()?>assets/ViewerJS/#<?php echo base_url('assets/modul_pdf/'.$c->pdf)?>" type='application/pdf' allowFullScreen></iframe>
                                  
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                              <table>
                                <tr >
                                  <th>Indikator</th>
                                  <td  style="padding:0px 5px 0px 5px">:</td>
                                  <td><?php echo $c->description ?></td>
                                </tr>
                                <tr >
                                  <th>Tujuan Pembelajaran</th>
                                  <td  style="padding:0px 5px 0px 5px">:</td>
                                  <td><?php echo $c->tujuan ?></td>
                                </tr>
                              </table>

                              <br><br>
                              <div class="blog-post">
                                <a class="main-button icon-button" href="<?php echo base_url('homepage/quiz/'.$c->slug ) ?>" style="width: 200px">Quiz</a>      
                              </div>
                            </div>
                            <?php } ?>
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
                                if($n->nilai != NULL){
                                  $pembagi++;
                                }
                              } 
                              $nilai = $skor/$pembagi;
                              echo number_format($nilai,2);
                            }else{
                              echo '0';
                            }
                            ?>
                          </h1>
                          <a href="<?php echo base_url('homepage/detailtest/'.$this->uri->segment(3)) ?>">Detail</a>
                        </div>
                        <!-- /category widget -->
                        <!-- category widget -->
                        <div class="widget category-widget tab">
                          <h3>Modul</h3>
                          <ul class="nav">
                            <?php $num=1; foreach ($course as $c) { ?>
                              <li class="<?php if($num == 1){echo 'active';} ?>">
                                <a class="category" data-toggle="tab" href="#tab<?php echo $num; ?>"><?php echo $c->materi ?></a></li>
                                <?php $num++; } ?>
                              </ul>
                            </div>
                          </div>
                          <!-- /aside blog -->
                        </div>
                        <!-- row -->
                      </div>
                      <!-- container -->
                    </div>