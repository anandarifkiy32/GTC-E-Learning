<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
<!-- Sidebar user panel -->
<!-- search form -->
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
<li class="header">MAIN NAVIGATION</li>
<li class="<?php if($title == 'Dashboard'){echo 'active';}?>">
<a href="<?php echo base_url('trainer');?>">
<i class="fa fa-dashboard"></i> <span>Dashboard</span>
</a>
</li>
<li class="<?php if($title == 'Course Catalog'){echo 'active';}?>">
<a href="<?php echo base_url('trainer/coursecategory');?>">
<i class="fa fa-book"></i> <span>Course Category</span>
</a>
</li>
<li class="<?php if($title == 'Profile'){echo 'active';}?>">
<a href="<?php echo base_url('trainer/profile');?>">
<i class="fa fa-user"></i> <span>Profile</span>
</a>
</li>
</ul>
</section>
<!-- /.sidebar -->
</aside>