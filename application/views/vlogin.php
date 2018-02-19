<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
?>
	<!-- <h1>Welcome to CodeIgniter!</h1> -->
	<!-- <h2><?php echo $page; ?></h2> -->

	<?php echo form_open('login/dblogin');?>

<!-- 	<label for="username">Username</label><input type="text" name="username" value="admin">
	<label for="userpass">Password</label><input type="textarea" name="userpass" value="pass"> -->
	<div class="vertical-align-wrap">
		<div class="vertical-align-middle">
			<div class="auth-box">
				<div class="content">
					<div class="header">
						<div class="logo text-center"><a href="<?php echo base_url('beranda'); ?>"><img src="assets/img/logo.png" alt="DiffDash" ></a></div>
						<p class="lead">
						<?php
							$msg = array('Selamat datang!',
								'Logged out :(',
								'Silahkan login'
							);
							// echo md5('12312312');
							?>
							<br>
							<?php
							if ($this->session->flashdata('msg')) {
								echo $this->session->flashdata('msg');
							}else{
								echo $msg[rand(0,2)];
							}
						?>
						</p>
					</div>
					<!-- <form class="form-auth-small" action="index.php"> -->
						<?php echo form_open('login/dblogin');?>
						<div class="form-group">
							<label for="signin-email" class="control-label sr-only">Email</label>
							<!-- <input type="email" class="form-control" id="signin-email" value="samuel.gold@domain.com" placeholder="Email"> -->
							<input type="text" class="form-control" id="signin-email" name="username" value="admin" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="signin-password" class="control-label sr-only">Password</label>
							<!-- <input type="password" class="form-control" id="signin-password" value="thisisthepassword" placeholder="Password"> -->
							<input type="password" class="form-control" id="signin-password" name="userpass" value ="12312312" placeholder="Password">
						</div>
						<div class="form-group clearfix">
							<label class="fancy-checkbox element-left">
								<input type="checkbox">
								<span>Remember me</span>
							</label>
							<!-- <span class="helper-text element-right">Don't have an account? <a href="page-register.html">Register</a></span> -->
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
						<div class="bottom">
							<span class="helper-text"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Lupa password?</a></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
