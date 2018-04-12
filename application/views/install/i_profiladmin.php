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
				<form method="POST" class="form-auth-small" id="form" action="<?php echo base_url('installer/profiladmin'); ?>">
					<div class="form-group">
						<label for="username">Username : </label>
						<input type="text" required="required" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label for="userpass">Password : </label>
						<input type="text" required="required" class="form-control" name="userpass">
					</div>
					<div class="form-group">
						<label for="userfullname">Nama lengkap : </label>
						<input type="text" required="required" class="form-control" name="userfullname">
					</div>
					<div class="form-group">
						<label for="useralamat">Alamat : </label>
						<textarea name="useralamat" class="form-control" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label for="usertelp">Nomor Telpon : </label>
						<input type="text" required="required" class="form-control" name="usertelp">
					</div>
					<div class="form-group">
						<label for="useremail">Email : </label>
						<input type="text" required="required" class="form-control" name="useremail">
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
