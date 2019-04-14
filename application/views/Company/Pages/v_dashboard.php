<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
  </section>
  <section class="content">
    <div class="row">
      
      <div class="col-md-12">
        <?php foreach ($course as $c) { ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="<?php echo base_url('company/detailcourse/'.$c->slug) ?>">
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" style="background: url('./assets/modul/<?php echo $c->img ?>'); background-size: cover">
                  <h3 class="widget-user-username">
                    <?php echo $c->nama ?>
                  </h3>
                </div> 
              </div>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
</div>