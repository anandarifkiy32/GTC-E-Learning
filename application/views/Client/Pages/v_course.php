<div id="blog" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- main blog -->
      <div id="main" class="col-md-9 tab-content">
        <!-- blog post -->
        <?php 
        $num=0;
        foreach ($course as $c) { ?>

        <div id="tab<?php echo $num; ?>" class="tab-pane fade in blog-post <?php if($num == 0){echo 'active';} ?>">
          <div style="position:relative;height:0;padding-bottom:56.26%"><iframe src="<?php echo $c->konten ?>" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
          <br><br>
          <p><?php echo $c->description; ?></p>
          
        </div>

        <?php $num++; } ?>
        <div id="menu1" class="tab-pane fade blog-post">
          <div style="position:relative;height:0;padding-bottom:56.26%"><iframe src="https://www.youtube.com/embed/2lPgrudy1YQ?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
          <br><br>
          <p>An aeterno percipit per. His minim maiestatis consetetur et, brute tantas iracundia id sea. Vim tota nostrum reformidans te. Nam ad appareat mediocritatem, mediocrem similique usu ex, scaevola invidunt eu sed.</p>
        </div>
        <br><br>
        <div class="blog-post">
          <a class="main-button icon-button" href="quiz.html" style="width: 300px">Start Quiz</a>      
        </div>
      </div>
      <div id="aside" class="col-md-3">
        <!-- category widget -->
        <div class="widget category-widget">
          <h3>Your Total Score</h3>
          <i class="fa fa-user"></i>&nbsp;&nbsp;Koentomo

          <h1 style="color:green;">500</h1>
        </div>
        <!-- /category widget -->
        <!-- category widget -->
        <div class="widget category-widget tab">
          <h3>Modul</h3>
          <ul class="nav">
            <?php $num=0; foreach ($course as $c) { ?>
            <li class="<?php if($num == 0){echo 'active';} ?>"><a class="category" data-toggle="tab" href="#tab<?php echo $num; ?>"><?php echo $c->materi ?><span>score:&nbsp;&nbsp;80</span></a></li>
            <?php $num++; } ?>
          </ul>

        </div>

        <!-- /category widget -->
        <!-- category widget -->
        <div class="widget category-widget">
          <h3>Need Guide ?</h3>
          <a class="main-button icon-button" href="#" style="width: 300px">Let's Start</a>
        </div>
        <!-- /category widget -->
      </div>
      <!-- /aside blog -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</div>