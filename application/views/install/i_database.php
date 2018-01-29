<div class="row">
<div class="vertical-align-wrap">
	<div class="vertical-align-middle">
		<div class="auth-box">
			<div class="content">
				<div class="header">
					<div class="logo text-center"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="DiffDash"></div>
					<p class="lead">
						Selamat datang di halaman instalasi, masukkan input berikut untuk mulai menggunakan CMS Masjid Al-
					</p>
				</div>
					<form method="POST" class="form-auth-small" id="form" action="<?php echo base_url('installer/dbGenerator'); ?>">
					<div class="form-group">
						<label for="signin-email" class="control-label">Host</label>
						<!-- <input type="email" class="form-control" id="signin-email" value="samuel.gold@domain.com" placeholder="Email"> -->
						<input type="text" class="form-control" id="signin-email" name="host" value="" placeholder="Host">
					</div>
					<div class="form-group">
						<label for="signin-email" class="control-label">Username</label>
						<!-- <input type="email" class="form-control" id="signin-email" value="samuel.gold@domain.com" placeholder="Email"> -->
						<input type="text" class="form-control" id="signin-email" name="username" value="" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="signin-password" class="control-label">Password</label>
						<!-- <input type="password" class="form-control" id="signin-password" value="thisisthepassword" placeholder="Password"> -->
						<input type="password" class="form-control" id="signin-password" name="password" value ="" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="signin-email" class="control-label">Nama Database</label>
						<!-- <input type="email" class="form-control" id="signin-email" value="samuel.gold@domain.com" placeholder="Email"> -->
						<input type="text" class="form-control" id="signin-email" name="dbname" value="" placeholder="Nama Database">
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
