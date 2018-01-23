<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
/*
userid
username
userpass
userfullname
useremail
userurl
usertgldaftar
displayname
mediaid
useralamat
usertelp
*/
?>
	<h2><?php echo $page; ?></h2>
	<a href="<?php echo base_url('#');?>">Lihat profil</a>

<?php echo form_open('profiladmin/dbubahprofiladmin');?>

<label for="username">Username</label><input type="text" name="username" value="<?php echo $padmin->username;?>">
<label for="userpass">Password</label><input type="textarea" name="userpass" value="<?php echo $padmin->userpass;?>">
<label for="userfullname">Nama lengkap</label><input type="textarea" name="userfullname" value="<?php echo $padmin->userfullname;?>">
<label for="useremail">Email</label><input type="textarea" name="useremail" value="<?php echo $padmin->useremail;?>">
<!-- <label for="userurl">URL</label><input type="textarea" name="userurl" value="<?php // echo $padmin->userurl;?>"> -->
<label for="usertgldaftar">Tanggal daftar</label><input type="textarea" name="usertgldaftar" value="<?php echo $padmin->usertgldaftar;?>">
<label for="displayname">Nama layar</label><input type="textarea" name="displayname" value="<?php echo $padmin->displayname;?>">
<label for="mediaid">media </label><input type="textarea" name="mediaid" value="<?php echo $padmin->mediaid;?>">
<label for="useralamat">Alamat</label><input type="textarea" name="useralamat" value="<?php echo $padmin->useralamat;?>">
<label for="usertelp">Nomor Telpon</label><input type="textarea" name="usertelp" value="<?php echo $padmin->usertelp;?>">
<input type="submit" name="submit" value="Terapkan">
