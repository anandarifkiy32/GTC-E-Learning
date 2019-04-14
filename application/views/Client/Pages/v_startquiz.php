<div id="blog" class="section">
	<div class="container">
		<div class="row">
			<div id="main" class="col-md-12">
				<div class="blog-post">
					<?php if($tipesoal == "essay" || $tipesoal == "multiple"){ ?>
						<b><div id="demo" style="float: right"></div></b><br><br>
					<?php } ?>
					<form action="<?php echo base_url('homepage/submit') ?>" enctype="multipart/form-data" method="post" id="myquiz" >
						<?php if($tipesoal == "essay"){ ?>
							<?php $no = 1 ;foreach ($soal as $q) { ?>
								<div class="form-group">
									<label><?php echo $no.". ".$q->pertanyaan ?></label>
									<input class="form-control" type="text" name="jawaban<?php echo $q->id_soal ?>" required="">
								</div>
								<?php $no++; } }elseif($tipesoal == "multiple"){ $no = 1 ;foreach ($soal as $q) { ?>
									<div class="form-group jawaban-group">
										<label style="font-size: 16px"><?php echo $no.". ".$q->pertanyaan ?></label><br>
										<label class="jawaban"><?php echo $q->a ?>
										<input type="radio" name="jawaban<?php echo $q->id_soal ?>" value="A">
										<span class="checkmark"></span>
									</label>
									<label class="jawaban"><?php echo $q->b ?>
									<input type="radio" name="jawaban<?php echo $q->id_soal ?>" value="B">
									<span class="checkmark"></span>
								</label>
								<label class="jawaban"><?php echo $q->c ?>
								<input type="radio" name="jawaban<?php echo $q->id_soal ?>" value="C">
								<span class="checkmark"></span>
							</label>
						</div>
						<?php $no++; }}else{$no = 1 ;foreach ($soal as $q) {  ?>
							<div class="form-group">
								<label><?php echo $no.". ".$q->pertanyaan ?></label>
								<input class="form-control" onchange="ValidateSize(this)" type="file" name="jawaban<?php echo $q->id_soal ?>" required="" accept=".mp4">
							</div>

							<?php $no++;} } ?>	
							<button type="submit" class="main-button icon-button" value="submit">Submit</button>
						</form>
						<?php if($tipesoal == "file"){
							echo "<p style='color: red;padding-top:10px'>Ukuran maksimal : 5 MB, FormatFile : MP4</p>";
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>