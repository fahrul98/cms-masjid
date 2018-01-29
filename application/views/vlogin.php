<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
?>
<div id="container">
	<!-- <h1>Welcome to CodeIgniter!</h1> -->
	<h2><?php echo $page; ?></h2>
</div>
	<?php echo form_open('login/dblogin');?>

<!-- 	<label for="username">Username</label><input type="text" name="username" value="admin">
	<label for="userpass">Password</label><input type="textarea" name="userpass" value="pass"> -->

<div class="container" style="margin-left: 400px; margin-top: 150px;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login</h1><br>
				  <form>
					<input type="text" name="username" value="admin" placeholder="Username">
					<input type="password" name="userpass" value ="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
</div>
<!-- 	<label for="username">Username</label><input type="text" name="username" value="admin">
	<label for="userpass">Password</label><input type="textarea" name="userpass" value="passsecret">
>>>>>>> 1ccb56942216d0120ba8f442ed3d964c6fd11770
	<label for="capt">Captcha</label><input type="textarea" name="capt" value="">
	<input type="submit" name="login" value="login">
 -->