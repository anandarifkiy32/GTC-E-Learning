<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Daftar Trainer
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Daftar Trainer</li>
    </ol>
  </section>
<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
          </div>
          <div class="box-body">
            <div class="table table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Trainer</th>
                    <th>Alamat</th>
                    <th>E-mail</th>
                    <th>No. Telp</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $num = 1 ;foreach ($trainer as $t) { ?>
<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                    <tr>
                      <td><?php echo $num ?></td>
                      <td><?php echo $t->nama; ?></td>
                      <td><?php echo $t->alamat; ?></td>
                      <td><?php echo $t->email; ?></td>
                      <td><?php echo $t->telp; ?></td>
                      <td>
                        <a href="<?php echo base_url('company/detailtrainer/'.$t->unique_code) ?>"><button type="button" class="btn btn-primary btn-xs btn-flat">View</button></a>
                      </td>
                    </tr> 
                    <?php $num++; } ?>
                  </tbody>
<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>