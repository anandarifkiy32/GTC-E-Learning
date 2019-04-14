<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Soal
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Modul</li>
      <li class="active">Detail Materi</li>
      <li class="active">Edit Soal</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5>Edit Soal</h5>
          </div>
          <div class="panel-body">
            <form action="<?php echo base_url('trainer/updatesoal/'.$this->uri->segment(3)) ?>" method="post">
              <?php foreach ($soal as $s) { ?>
                <div class="form-group">  
                  <input type="text" class="form-control" name="pertanyaan" value="<?php echo $s->pertanyaan ?>">
                  <select class="form-control" name="tipe">
                    <option value="<?php echo $s->tipe; ?>"><?php echo $s->tipe; ?></option>
                    <option value="text">Text</option>
                    <option value="file">File(Audio/Video/Image)</option>
                  </select>
                </div>
                <input type="hidden" name="id_soal" value="<?php echo $s->id_soal ?>">
              <?php } ?>
              <a><button type="submit" class="btn btn-primary" style="float: right;">Submit</button><a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>