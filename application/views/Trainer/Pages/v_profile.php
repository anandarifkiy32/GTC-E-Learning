
<!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Profile</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Profile</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="box" style="border-top:none;">
          <div class="box-header with-border" style="background-color: #666570;">
            <center><h3 class="box-title" style="color:white;">Your Profile</h3></center>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?php foreach ($profile as $p) {?> 
              <table class="table table-bordered">
               <tr>
                 <td rowspan="6" style="width: 40%">
                   <center><img src="<?php echo base_url('assets/profile_photos/trainer/'.$p->img) ?>"  class="img-circle" alt="User Image" height="250px" width="250px" style="object-fit: cover"></center>
                 </td>
                 <td style="width:25%">
                   Nama 
                 </td>
                 <td>
                   <?php echo $p->nama ?>
                 </td>
               </tr>
               <tr>
                 <td>
                   Jenis Kelamin 
                 </td>
                 <td>
                   <?php if($p->gender == "L"){echo "Laki-laki";}else{echo "Perempuan";} ?>
                 </td>
               </tr>
               <tr>
                 <td>
                   Tempat, Tanggal Lahir 
                 </td>
                 <td>
                  <?php 
                  $date = date('j F Y', strtotime($p->ttl));
                  echo $p->tempatlahir.", ".$date;
                  ?>
                </td>
              </tr>
              <tr>
               <td>
                 Alamat 
               </td>
               <td>
                 <?php echo $p->alamat ?>
               </td>
             </tr>
             <tr>
               <td>
                 Email 
               </td>
               <td>
                 <?php echo $p->email ?>
               </td>
             </tr>
             <tr>
               <td>
                 Nomor Telepon 
               </td>
               <td>
                 <?php echo $p->telp ?>
               </td>
             </tr>
         <tr>
          <td><center><a href="<?php echo base_url('dashboard/editphoto/'.$p->id_trainer)?>"><button class="btn btn-primary btn-flat">Edit Photo</button></a></center><td>
           <td align="right">
            <a href="<?php echo base_url('dashboard/editprofile/'.$p->id_trainer)?>"><button class="btn btn-primary btn-flat">Edit Profile</button></a>
          </td>
        </tr>
      </table>
      <?php } ?>
    </div>
  </div>
</div>
</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->