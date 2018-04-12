<div class="row">
<div class="vertical-align-wrap">
	<div class="vertical-align-middle">
		<div class="auth-box">
			<div class="content">
				<div class="header">
					<div class="logo text-center"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="DiffDash"></div>
					<p class="lead">
						Selamat datang di halaman instalasi, masukkan input berikut untuk mulai menggunakan CMS Masjid
					</p>
				</div>
					<form method="POST" class="form-auth-small" id="form" action="<?php echo base_url('installer/profilm'); ?>">
					<div class="form-group">
						<label for="pnama">Nama Masjid : </label>
						<input type="text" required="required" class="form-control" name="pnama" value="">
					</div>
					<div class="form-group">
						<label for="pdeskripsi">Deskripsi : </label>
						<textarea style="resize: none; height: 300px" type="textarea" class="form-control" name="pdeskripsi"></textarea>
					</div>
					<div class="form-group">
						<label for="psejarah">Sejarah : </label>
						<textarea style="resize: none; height: 300px" type="textarea" class="form-control" name="psejarah"></textarea>
					</div>
					<div class="form-group">
						<label for="pvisimisi">Visi Misi : </label>
						<textarea style="resize: none; height: 300px" type="textarea" class="form-control" name="pvisimisi"></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Lanjut</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<div class="row">
<footer>
  <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
</footer>
</div>
