  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($title == 'Dashboard'){echo 'active';}?>">
          <a href="<?php echo base_url('admin/');?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
        <li class="treeview <?php if($title == 'User'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="color: #d2d6de;">
            <li class="<?php if($subtitle == 'Peserta'){echo 'active';}?>"><a href="<?php echo base_url('admin/peserta');?>"><i class="fa fa-circle-"></i> Peserta</a></li>
            <li class="<?php if($subtitle == 'Trainer'){echo 'active';}?>"><a href="<?php echo base_url('admin/trainer');?>"><i class="fa fa-circle-"></i> Trainer</a></li>
            <li class="<?php if($subtitle == 'Company'){echo 'active';}?>"><a href="<?php echo base_url('admin/company');?>"><i class="fa fa-circle-"></i> Company</a></li>
          </ul>
        </li>
        <li class="<?php if($title == 'Course'){echo 'active';}?>">
          <a href="<?php echo base_url('admin/course');?>"><i class="fa fa-book"></i><span>Course</span></a>
        </li>
        <li class="<?php if($title == 'Profile'){echo 'active';}?>">
          <a href="<?php echo base_url('admin/logout');?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>