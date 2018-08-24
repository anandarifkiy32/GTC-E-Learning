<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Course Category
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Course Category</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6">
          <div class="box" style="border-top:none">
            <div class="box-header">
              <h3 class="box-title">Course Category</h3>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
<<<<<<< HEAD
                    <th>Image</th>
=======
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $num = 1 ;foreach ($category as $c) { ?>

                    <tr>
                      <td><?php echo $num ?></td>
                      <td><?php echo $c->category ?></td>
<<<<<<< HEAD
                      <td><a href="<?php echo base_url('assets/modul/category/'.$c->img) ?>"><?php echo $c->img; ?></a></td>
=======
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                      <td>
                        <button class="btn btn-primary btn-xs btn-flat" data-toggle="modal" data-target="#<?php echo $c->id_category ?>">Edit</button>
                        <a href="<?php echo base_url('trainer/hapuscategory/'.$c->slug) ?>"><button type="button" class="btn btn-danger btn-xs btn-flat">Hapus</button></a>
                      </td>
                    </tr>
                    <?php $num++; } ?>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box" style="border-top:none">
              <div class="box-header">
                <h3 class="box-title">Tambah Course Category</h3>
              </div>
              <div class="box-body">
<<<<<<< HEAD
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url('trainer/tambahcategory') ?>">
                  <div class="form-group">
                    <label>Nama Category</label>
                    <input type="text" required="" name="category" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="img" class="form-control" required="">
=======
                <form method="post" action="<?php echo base_url('trainer/tambahcategory') ?>">
                  <div class="form-group">
                    <label>Nama Category</label>
                    <input type="text" name="category" class="form-control">
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                  </div>
                  <button type="submit" class="btn btn-primary btn-flat" style="float: right;">Tambah</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php foreach ($category as $c) { ?>
      <div class="modal fade" id="<?php echo $c->id_category ?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Category</h4>
                  </div>
<<<<<<< HEAD
                  <form action="<?php echo base_url('trainer/updatecategory') ?>" enctype="multipart/form-data" method="post">
=======
                  <form action="<?php echo base_url('trainer/updatecategory') ?>" method="post">
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                    
                      <div class="modal-body">
                        <div class="box-body">
                          <div class="form-group">
                            <label>Nama Category</label>
                            <input type="hidden" name="id_category" value="<?php echo $c->id_category ?>">
                            <input type="text" class="form-control" name="category" value="<?php echo $c->category ?>">
                          </div>
<<<<<<< HEAD
                          <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="img" class="form-control" value="<?php echo $c->img ?>">
                          </div>
=======
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                          </div>
                          <!-- /.box-body -->
                        </div>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary btn-flat">Save changes</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <?php } ?>
    </section>
  </div>