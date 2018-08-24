<<<<<<< HEAD
<div class="content-wrapper">
=======
<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
  <section class="content-header">
    <h1>
      Modul
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="<?php echo base_url('admin/modul') ?>">Modul</a></li>
    </ol>
  </section>
<<<<<<< HEAD
  <section class="content">
    <div class="row">
      <div class="col-md-7">
        <div class="box box-widget widget-user-2">
=======
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-7">
        <div class="box box-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
          <div class="widget-user-header bg-blue">
            <div class="row">
              <div class="col-md-2">
                <div class="widget-user-image">
                  <center><?php foreach ($modul as $m) { ?>
                    <img class="img-circle" src="<?php echo base_url().'assets/modul/'.$m->img ?>" alt="User Avatar" style="height: 60px;width: 60px;object-fit: cover;"></center>
                  </div>
                </div>
                <div class="col-md-8" style="padding-left: 0px">
                  <h3 class="widget-user-username" style="margin-left: 0px;"><?php echo $m->nama ?></h3>
                  <h5 class="widget-user-desc" style="margin-left: 0px;"><?php echo $m->category ?></h5>
                </div>
                <div class="col-md-2">
<<<<<<< HEAD
                  <button class="btn btn-success btn-flat" style="position: absolute;right: 10px;top: 0px;" data-toggle="modal" data-target="#modal-default1">Edit</button>
=======
                  <button class="btn btn-success" style="position: absolute;right: 10px;top: 0px;" data-toggle="modal" data-target="#modal-default1">Edit</button>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                </div>  
              </div>
            </div>
            <div class="box-body">
              <table class="table table-condensed" style="font-size: 16px"> 
                <tr>
                  <td style="font-size: 16px" width="25%">Deskripsi</td>
                  <td><?php echo $m->deskripsi ?></td>
                </tr>
              <?php } ?>
              <tr>
                <td style="font-size: 16px">Jumlah Sub Materi</td>
                <td><?php echo $jumlah_materi ?></td>
              </tr>
              <tr>
<<<<<<< HEAD
               <td style="font-size: 16px">Jumlah Peserta</td>
               <td><?php echo $jumlah_peserta; ?></td>
=======
                 <td style="font-size: 16px">Jumlah Peserta</td>

                 <td><?php echo $jumlah_peserta; ?></td>
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
             </tr>
           </table>
         </div>
       </div>
     </div>
     <div class="col-md-5">
      <div class="box" style="border-top:none;">
        <div class="box-header" style="color">
          <h3 class="box-title">Materi</h3>
          <button class="btn btn-success btn-flat" style="position: absolute;right: 10px;" data-toggle="modal" data-target="#modal-default2">+</button>
        </div>
<<<<<<< HEAD
=======
        <!-- /.box-header -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
        <div class="box-body">
          <table class="table table-condensed">
            <tr>
              <th style="width: 15px">#</th>
              <th colspan="2"><center>Judul</center></th>
            </tr>
            <?php $no=1 ;foreach ($submateri as $s) { ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $s->judul ?></td>
                <td align="right">
                  <a href="<?php echo base_url().'admin/show_materi/'.$s->slug ?>"><button class="btn btn-primary btn-flat">Lihat</button></a>
                  <a href="<?php echo base_url().'admin/hapusmateri/'.$s->slug.'/'.$this->uri->segment(3) ?>"><button class="btn btn-danger btn-flat"><span class="fa fa-trash"></span></button></a>
                </td>
              </tr>
              <?php $no++; } ?>
            </table>
          </div>
<<<<<<< HEAD
        </div>
      </div>
    </div>
=======
          <!-- /.box-body -->
        </div>
      </div>
    </div>


>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
    <div class="modal fade" id="modal-default1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Modul</h4>
            </div>
            <form action="<?php echo base_url('admin/updatemodul') ?>" method="post">
              <?php foreach ($modul as $m) { ?>
                <div class="modal-body">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Modul</label>
                      <input type="hidden" name="id" value="<?php echo $m->id_modul ?>">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo $m->nama ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Deskripsi</label>
                      <textarea class="form-control" id="exampleInputPassword1" rows="5" name="description"><?php echo $m->deskripsi ?></textarea>
                    </div>
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" name="category">
                        <?php foreach ($category as $ctg) { ?>
                          <option value="<?php echo $ctg->category ?>" <?php if($ctg->category == $m->category){echo "selected";} ?>><?php echo $ctg->category ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
<<<<<<< HEAD
=======
                  <!-- /.box-body -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                </div>
              <?php } ?>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
<<<<<<< HEAD
        </div>
=======
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
      </div>
      <div class="modal fade" id="modal-default2">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Materi</h4>
              </div>
              <form role="form" action="<?php echo base_url().'admin/tambah_materi/'.$this->uri->segment(3) ?>" method="post">
                <div class="modal-body">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <?php foreach ($modul as $m) { ?>
                        <input type="hidden" name="id" value="<?php echo $m->id_modul ?>">
                      <?php } ?>
                      <input type="text" class="form-control" id="exampleInputEmail1"  name="judul">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputDescription1">Deskripsi</label>
                      <textarea class="form-control" name="description" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Konten</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="konten">
                    </div>
                  </div>
<<<<<<< HEAD
=======
                  <!-- /.box-body -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>            
            </div>
<<<<<<< HEAD
          </div>
        </div>
      </section>
    </div>
=======
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </section>
      <!-- /.content -->
    </div>
<!-- /.content-wrapper -->
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
