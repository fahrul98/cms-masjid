<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
?>
	<!-- <h1>Welcome to CodeIgniter!</h1> -->
	<!-- <h2><?php echo $page; ?></h2> -->

<!-- 	<?php echo form_open('login/dblogin');?> -->

<!-- 	<label for="username">Username</label><input type="text" name="username" value="admin">
	<label for="userpass">Password</label><input type="textarea" name="userpass" value="pass"> -->
	<div class="vertical-align-wrap">
		<div class="vertical-align-middle">
			<div class="auth-box">
				<div class="content">
					<div class="header">
						<div class="logo text-center"><a href="<?php echo base_url('beranda'); ?>"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="DiffDash" ></a></div>
						<p class="lead">
						<?php
							$msg = array('Selamat datang!',
								'Logged out :(',
								'Silahkan login',
								'Untuk melakukan reset password, silakan masukkan alamat email anda.'
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
					<?php 
						if ($page=="Login") {							
						echo form_open('login/dblogin');?>
						<!-- <form class="form-auth-small" action="index.php"> -->
						<div class="form-group">
							<label for="signin-email" class="control-label sr-only">Email</label>
							<!-- <input type="email" class="form-control" id="signin-email" value="samuel.gold@domain.com" placeholder="Email"> -->
							<input type="text" class="form-control" id="signin-email" name="username" value="admin" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="signin-password" class="control-label sr-only">Password</label>
							<!-- <input type="password" class="form-control" id="signin-password" value="thisisthepassword" placeholder="Password"> -->
							<input type="password" class="form-control" id="signin-password" name="userpass" value ="" placeholder="Password">
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
							<span class="helper-text"><i class="fa fa-lock"></i> <a href="<?php echo base_url('login/forget');?>">Lupa password?</a></span>
						</div>
					</form>
					<?php 
					}else if ($page=="Forget Password") {
					echo form_open('login/dbsendemail');?>
						<div class="form-group">
								<label for="send-email" class="control-label sr-only">Email</label>
								<input type="text" class="form-control" id="send-email" name="email" placeholder="Masukkan Email Anda">
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block">Send E-mail</button>
						<div class="bottom">
							<span class="helper-text"><i class="fa fa-arrow"></i> <a href="<?php echo base_url('login');?>">kembali ke login</a></span>
						</div>
					</form>
					<?php }else if ($page=="Change Password") {
					 echo form_open('login/dbchangepass'); ?>
					 	<div class="form-group">
					 		<input type="hidden" name="userid" value="<?php echo $user->userid  ?>" >
							<label for="new-password" class="control-label sr-only">Password Baru</label>
							<input type="password" class="form-control" id="new-password" name="newpass" placeholder="Password Baru">
						</div>
						<div class="form-group">
							<label for="confirm-password" class="control-label sr-only">Konfirmasi Password</label>
							<input type="password" class="form-control" id="confirm-password" name="conpass" placeholder="Konfirmasi Password">
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block">Change Password</button>
					</form>
					 <?php }else if ($page=="Email Terkirim") { echo $page; } ?>
				</div>
			</div>
		</div>
	</div>
