<div id="blog" class="section">
	<div class="container">
		<div class="row">
			<div id="main" class="col-md-12">
				<div class="blog-post">
					<form method="post" action="<?php echo base_url('homepage/register') ;?>">
						<div class="form-group">
							<label> Nama Lengkap</label>
							<input class="form-control" type="text" name="namalengkap" required="">
						</div>
						<div class="form-group">
							<label> Jenis Kelamin</label>
							<select class="form-control" name="gender" required="">
								<option>Pilih Jenis Kelamin</option>
								<option value="P">Perempuan</option>
								<option value="L">Laki-laki</option>
							</select>
						</div>
						<div class="form-group">
							<label> Tempat Lahir</label>
							<input class="form-control" type="text" name="tempatlahir" required="">
						</div>
						<div class="form-group">
							<label for="dtp_input2">Tanggal Lahir :</label>

							<input class="form-control form_date date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" size="16" type="text" value="" readonly>

							<input type="hidden" id="dtp_input2" value="" name="tgl"/>
						</div>
						<div class="form-group">
							<label> Alamat</label>
							<textarea class="form-control" name="alamat" required=""></textarea>
						</div>
						<div class="form-group">
							<label> Telepon/ HP</label>
							<input class="form-control" type="number" name="telepon" required="">
						</div>
						<div class="form-group">
							<label> E-mail</label>
							<input class="form-control" type="email" name="email" required="">
						</div>
						<div class="form-group">
							<label> Password</label>
							<input class="form-control" type="password" name="password">
						</div>

						<button class="main-button icon-button">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>