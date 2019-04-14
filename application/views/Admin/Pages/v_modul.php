<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Course
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><a href="<?php echo base_url('admin/course') ?>">Course</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Course</h3>
					</div>
					<div class="box-body">
						<div class="table table-responsive">
							<table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Kategori</th>
										<th>Trainer</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$num=1;
									foreach ($modul as $m) { ?>
										<tr>
											<td><?php echo $num; ?></td>
											<td><?php echo $m->namamodul; ?></td>
											<td><?php echo $m->category; ?></td>
											<td><?php echo $m->namatrainer; ?></td>
											<td>
												<a href="<?php echo base_url('admin/show_modul/'.$m->slug) ?>"><button type="button" class="btn btn-success btn-flat"></i> <span>View</span></button></a>
												<button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default<?php echo $m->id_modul ?>">Company</button>
												<a href="<?php echo base_url('admin/delete_modul/'.$m->slug) ?>"><button type="button" class="btn btn-danger btn-flat"></i> <span>Delete</span></button></a>
											</td>
										</tr>
										<?php $num++; } ?>
									</tbody>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Kategori</th>
											<th>Trainer</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php foreach ($modul as $m) { ?>
			<div class="modal fade" id="modal-default<?php echo $m->id_modul ?>">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Company</h4>
							</div>
							<form action="<?php echo base_url('admin/updatecompany') ?>" method="post">

								<div class="modal-body">
									<div class="box-body">
										<div class="form-group">
											<label>Nama Company</label>
											<input type="hidden" name="modul" value="<?php echo $m->slug ?>">
											<select class="form-control select2" style="width: 100%;" required="" name="company">
												<option <?php if($m->id_company == "") echo 'selected="selected"'; ?> value="">Pilih Company</option>	
												<?php foreach ($company->result() as $c) { ?>

												<option <?php if($m->id_company == $c->id_company){echo 'selected="selected"';} ?> value="<?php echo $c->id_company ?>"><?php echo $c->nama ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<?php } ?>
			</section>
		</div>