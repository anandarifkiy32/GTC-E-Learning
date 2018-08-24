<aside class="main-sidebar">
<<<<<<< HEAD
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url()?>assets/adm/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $this->session->userdata('nama');?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="<?php if($title == 'Dashboard'){echo 'active';}?>">
				<a href="<?php echo base_url('trainer');?>">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="<?php if($title == 'Course Category'){echo 'active';}?>">
				<a href="<?php echo base_url('trainer/coursecategory');?>">
					<i class="fa fa-book"></i> <span>Course Category</span>
				</a>
			</li>
			<li class="<?php if($title == 'Profile'){echo 'active';}?>">
				<a href="<?php echo base_url('trainer/profile');?>">
					<i class="fa fa-user"></i> <span>Profile</span>
				</a>
			</li>
			<li class="<?php if($title == 'Company'){echo 'active';}?>">
				<a href="<?php echo base_url('trainer/logout');?>">
					<i class="fa fa-sign-out"></i> <span>Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
=======
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
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
</aside>