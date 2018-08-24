<div id="blog" class="section">
<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- main blog -->
      <div id="main" class="col-md-9 tab-content">
        <!-- blog post -->
        <?php if($this->session->flashdata('quiz')){?>
          <div class="alert alert-success alert-dismissible">
<<<<<<< HEAD
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Quiz berhasil dikirim !</h4>
            Menunggu direview oleh trainer.
          </div> 
=======
            <h4><i class="icon fa fa-check"></i>Quiz berhasil dikirim !</h4>
            Menunggu direview oleh trainer.
          </div>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
                          <button class="tablinks active" onclick="openCity(event, 'materi<?php echo $num.'a'; ?>')">Materi Ppt</button>
                          <button class="tablinks" onclick="openCity(event, 'materi<?php echo $num.'b'; ?>')">Video</button>
                          <button class="tablinks" onclick="openCity(event, 'materi<?php echo $num.'c'; ?>')">Hand Out</button>
                        </div>
                        <div class="tabcontent fade in" id="materi<?php echo $num.'a'; ?>" style='display: block'>
                            <div class="embed-responsive embed-responsive-16by9" style="width: 100%;height: 100%">
                              <div class="embed-responsive-item">
                                <!-- <iframe src="<?php echo base_url('assets/pdfjs/web/viewer.html?file=').base_url('assets/modul_pdf/'.$c->pdf)?>" allowfullscreen></iframe> -->
                                <?php if($c->ppt == ''){
                                  echo '<center>Materi Belum Tersedia</center>';
                                }else{ ?>
                                  <iframe src="<?php echo base_url()?>assets/ViewerJS/#<?php echo base_url('assets/modul_pdf/ppt/'.$c->ppt)?>" type='application/pdf' allowFullScreen></iframe>
                                  
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                        <div class="tabcontent fade in" id="materi<?php echo $num.'b'; ?>">
=======
                          <button class="tablinks active" onclick="openCity(event, 'materi<?php echo $num.'a'; ?>')">Video</button>
                          <button class="tablinks" onclick="openCity(event, 'materi<?php echo $num.'b'; ?>')">Dokumen</button>
                        </div>
                        <div class="tabcontent fade in" id="materi<?php echo $num.'a'; ?>" style='display: block'>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                          <div style="position:relative;height:0;padding-bottom:56.26%">
                            <?php if($c->konten == ''){
                              echo '<center><div style="position:relative;top:50%">Materi Belum Tersedia</div></center>';
                            }else{ ?>
                              <div class="plyr__video-embed" id="player">
<<<<<<< HEAD
                                <iframe src="<?php echo $c->konten ?>?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
=======
                                <iframe src="<?php echo $c->konten ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                              </div>
                              <?php } ?>
                            </div>
                          </div>
<<<<<<< HEAD
                          <div class="tabcontent fade in" id="materi<?php echo $num.'c'; ?>">
=======
                          <div class="tabcontent fade in" id="materi<?php echo $num.'b'; ?>">
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                            <div class="embed-responsive embed-responsive-16by9" style="width: 100%;height: 100%">
                              <div class="embed-responsive-item">
                                <!-- <iframe src="<?php echo base_url('assets/pdfjs/web/viewer.html?file=').base_url('assets/modul_pdf/'.$c->pdf)?>" allowfullscreen></iframe> -->
                                <?php if($c->pdf == ''){
                                  echo '<center>Materi Belum Tersedia</center>';
                                }else{ ?>
<<<<<<< HEAD
                                  <iframe src="<?php echo base_url()?>assets/ViewerJS2/#<?php echo base_url('assets/modul_pdf/'.$c->pdf)?>" type='application/pdf' allowFullScreen></iframe>
=======
                                  <iframe src="<?php echo base_url()?>assets/ViewerJS/#<?php echo base_url('assets/modul_pdf/'.$c->pdf)?>" type='application/pdf' allowFullScreen></iframe>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                                  
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
<<<<<<< HEAD
                              <div class="row">
                                <div class="col-md-3"><b>Indikator : </b></div>
                                <div class="col-md-9"><?php echo $c->description; ?></div>
                              </div>
                              <div class="row">
                                <div class="col-md-3"><b>Tujuan Pembelajaran : </b></div>
                                <div class="col-md-9"><?php echo $c->tujuan;?></div>
                              </div>
=======
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

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
                           <div class="widget category-widget">
=======
                          <div class="widget category-widget">
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                            <h3>Your Score</h3>
                            <i class="fa fa-user"></i>&nbsp;&nbsp;<?php foreach ($profile as $p) {echo $p->nama; } ?>
                            <h1 style="color:green;">
                             <?php $nilaiakhir = 0;$jml=0;
                             foreach ($materi->result() as $m) { 
                              $where = 'id_materi = '.$m->id_materi.' and tipesoal = "multiple" or tipesoal = "essay" and id_materi = '.$m->id_materi.' or tipesoal = "file" and id_materi = '.$m->id_materi;
                              $test = $this->Test_model->select_where($where);
                              $count = 0;
                              $nilai = 0;
                              foreach ($test->result() as $t) {
                                $where = array('id_test' => $t->id_test, 'id_peserta' => $id_peserta);
                                $result = $this->Result_model->select_where($where)->row('nilai');
                                if($result != NULL){
                                  $nilai = $nilai + $result;
                                  $count++;
                                }
                              }
                              if($count == 0){
                                $nilaiakhir = $nilaiakhir + $nilai; 
                              }else{
                                $nilai = $nilai / $count; 
                                $nilaiakhir = $nilaiakhir + $nilai; 
                              }
                              if($count != 0){ 
                                $jml++;  
                              }
                            }
                            echo number_format($nilaiakhir/$jml,2);
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
<<<<<<< HEAD
                        <!-- row -->
                      </div>
                      <!-- container -->
                    </div>
=======
                        <a href="javascript:;" data-friend="<?= $this->uri->segment(3) ?>">tes</a>
                      </div>
                      <!-- container -->

                      <div class="btn-chat" id="btn-chat" onclick="funcChat()"><a href="javascript:;" data-friend="<?= $this->uri->segment(3) ?>">Punya Pertanyaan ?</a></div>
                      <div id="chat-box">
                        <div class="chat-header">Header<span style="" class="close-chat fa fa-close" onclick="funcChat()"></span></div>
                        <div id="wgt-container-template" style="display: none">
                          <div class="msg-wgt-container">
                            <div class="msg-wgt-header">
                              <a href="javascript:;" class="online"></a>
                              <a href="javascript:;" class="name"></a>
                              <a href="javascript:;" class="close">x</a>
                            </div>
                            <div class="msg-wgt-message-container">
                              <table width="100%" class="msg-wgt-message-list">
                              </table>
                            </div>
                            <div class="msg-wgt-message-form">
                              <textarea name="message" placeholder="Type your message. Press Shift + Enter for newline"></textarea>
                            </div>
                          </div>
                        </div>




          <!--               <div class="panel panel-info">
                          <div class="panel-body" style="height:400px;overflow-y:auto" id="box">
                            <div id="chat-box">
                              <div class='panel-body'><h2 style='text-align:center;color:grey'>Click User on Chatt List to Start Chatt</h2></div> -->
            <!--br/>
            <div id="loading" style="display:none"><center><i class="fa fa-spinner fa-spin"></i> Loading...</center></div>
          </br !-->
          <!--    </div> -->
          <!--       </div> -->
<!--       <div class="panel-footer" style="">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" id="id_user" value="<?php echo $this->uri->segment(3); ?>" />
            <textarea class="form-control " id="pesan" style="margin-right:10px;"></textarea>
            <button id="send" type="button" class="btn btn-primary pull-right" style="margin-top:10px;"  onClick="sendMessage()" ><i class="fa fa-send"></i> Send Message</button>
          </div>
        </div>
      </div>
    </div> -->

  </div>
</div>

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
