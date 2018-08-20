  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($title == 'Dashboard'){echo 'active';}?>">
          <a href="<?php echo base_url('company');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if($title == 'Daftar Trainer'){echo 'active';}?>">
          <a href="<?php echo base_url('company/daftartrainer');?>">
            <i class="fa fa-user"></i> <span>Daftar Trainer</span>
          </a>
        </li>
        <li class="<?php if($title == 'Profile'){echo 'active';}?>">
          <a href="<?php echo base_url('company/profile');?>">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>
        <li class="<?php if($title == 'Logout'){echo 'active';}?>">
          <a href="<?php echo base_url('company/logout');?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  