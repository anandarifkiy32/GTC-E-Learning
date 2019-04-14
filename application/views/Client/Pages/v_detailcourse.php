<div id="blog" class="section">
	<div class="container">
		<div class="row">
			<div id="main" class="col-md-9">
				<?php foreach ($modul as $m) { ?>
					<div class="blog-post">
						<img src="<?php echo base_url('assets/modul/'.$m->img)?>" alt="" style="object-fit:cover;width: 100%; height: auto;max-height: 500px;"><br><br>
						<button class="accordion"><b>Deskripsi</b></button>
						<div class="panel2">
							<p><?php echo $m->deskripsi; ?></p>
						</div>
						<button class="accordion"><b>Tugas dan Wewenang</b></button>
						<div class="panel2">
							<p><?php echo $m->tugas; ?></p>
						</div>
						<button class="accordion"><b>Persyaratan Masuk Mengikuti Uji Kompetensi</b></button>
						<div class="panel2">
							<p><?php echo $m->syarat; ?></p>
						</div>
						<button class="accordion"><b>Jenjang Karir</b></button>
						<div class="panel2">
							<p><?php echo $m->karir; ?></p>
						</div>
						<button class="accordion"><b>Biaya</b></button>
						<div class="panel2">
							<p><?php echo "Rp " . number_format($m->biaya,2,',','.'); ?></p>
						</div>
						<br>
						<?php if($cekjoin == 0){ ?>
							<div class="checkbox">
								<label><input type="checkbox" id="checkme" >Saya memenuhi persyaratan untuk mengambil pelatihan ini.</label>
							</div>
							<a id="link" href=""><button class="main-button icon-button" disabled="disabled" id="sendNewSms">Join Course</button></a>
						<?php }else{ ?>
							<a href="<?php echo base_url('homepage/startcourse/'.$m->slug)?>"><button class="main-button icon-button">Start Learning</button></a>
						<?php } ?>
						<a href="<?php echo base_url('homepage/certification/'.$m->slug)?>"><button class="main-button icon-button">Take Certification</button></a>
					</div>
				<?php } ?>
				<div class="blog-share">
					<h4>Share This Post:</h4>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
			<div id="aside" class="col-md-3">
				<div class="widget posts-widget">
					<h3>Related Course</h3>
					<?php foreach ($related as $r) { ?>
						<div class="single-post">
							<a class="single-post-img" href="<?php echo base_url('homepage/detailcourse/'.$r->slug) ?>">
								<img src="<?php echo base_url('assets/modul/'.$r->image) ?>" alt="">
							</a>
							<a href="<?php echo base_url('homepage/detailcourse/'.$r->slug) ?>"><?php echo $r->namamodul ?></a>
							<p><small>Oleh : <?php echo $r->namatrainer ?></small></p>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>