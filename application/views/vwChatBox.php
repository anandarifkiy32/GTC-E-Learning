<input type="hidden" id="id_user" value="<?php echo $this->uri->segment(3); ?>" />
<input type="hidden" id="id_max" value="<?php echo isset($id_max) ? $id_max : '' ; ?>" />

	<?php if($chat->num_rows() > 0){ ?>	
		<?php foreach($chat->result() as $row){ ?>
			<?php if($row->id_pengirim == $id_peserta){ ?>
				<div class="col-md-12">
					<div class="panel panel-default panel-comment pull-right">
						<div class="panel-heading kiri" >
							<b>Anda :</b><small class="pull-right" style="color:grey;margin-top:0px;"><?php echo date("d-M-Y H:i:s", strtotime($row->created_at)); ?></small><br/>
							<?php echo $row->pesan; ?>
						</div>
					</div>
				</div>
			<?php }else{ ?>
				<div class="col-md-12">
					<div class="panel panel-default panel-comment" style="background-color: #0D47A1  !important;">
						<div class="panel-heading" >
							<?php $user		= $this->model_user->getAll(array("id_user" => $id_user))->row_array(); ?>
							<b> <?php echo $user['nama']?> : </b><small class="pull-right" style="color:grey;margin-top:0px;"><?php echo date("d-M-Y H:i:s", strtotime($row->created_at)); ?></small></br>
							<?php echo $row->pesan; ?>
						</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
	<?php }else{
	echo $chat->num_rows(); 	
	} ?>