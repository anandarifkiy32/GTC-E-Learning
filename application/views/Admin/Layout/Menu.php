  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($title == 'Dashboard'){echo 'active';}?>">
          <a href="<?php echo base_url('Admin/Dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?php if($title == 'User'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="color: #d2d6de;">
            <li class="<?php if($subtitle == 'Peserta'){echo 'active';}?>"><a href="<?php echo base_url('Admin/Peserta');?>"><i class="fa fa-circle-"></i> Peserta</a></li>
            <li class="<?php if($subtitle == 'Trainer'){echo 'active';}?>"><a href="<?php echo base_url('Admin/Trainer');?>"><i class="fa fa-circle-"></i> Trainer</a></li>
            <li class="<?php if($subtitle == 'Company'){echo 'active';}?>"><a href="<?php echo base_url('Admin/Company');?>"><i class="fa fa-circle-"></i> Company</a></li>
          </ul>
        </li>
        <li class="<?php if($title == 'Modul'){echo 'active';}?>">
          <a href="<?php echo base_url('Admin/Modul');?>"><i class="fa fa-book"></i><span>Modul</span></a>
        </li>
        <li class="<?php if($title == 'Profile'){echo 'active';}?>">
          <a href="<?php echo base_url('Admin/Profile');?>">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>