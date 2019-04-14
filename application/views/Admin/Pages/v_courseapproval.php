<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Course Approval
    </h1>
    <ol class="breadcrumb">
    </ol>
  </section>
  <section class="content">
      <div class="row">
      	<div class="col-md-12">
         <div class="box" style="border-top:none">
          <div class="box-header">
            <h3 class="box-title">Daftar Courses</h3>
          </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Judul Course</th>                  
                  <th>Nama Trainer</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $num = 1 ;foreach ($course->result() as $c) { ?>
                  <tr>
                    <td><?php echo $num ?></td>
                    <td><?php echo $c->namacourse ?></td>
                    <td><?php echo $c->namatrainer ?></td>
                      
                    <td align="right"><a href="<?php echo base_url('admin/show_modul/'.$c->slug)?>"><button class="btn btn-success btn-flat">Detail</button></a></td>
                  </tr>
                  <?php $num++; } ?>
                </tbody>
              </table>
            </div>
          </div>
          </div>
      </div>
    </section>
  </div>