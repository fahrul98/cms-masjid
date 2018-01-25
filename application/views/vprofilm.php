<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
/*
pnama
pdeskripsi
psejarah
pvisimisi
*/
?>
<div class="container">
<h2>Profil masjid</h2>
		<form>
			<div class="form-group">
				<input type="hidden" name="pnama" value="<?php echo $profil->pnama;?>">
			</div>
			<div class="form-group">
				<label for="pnama">Nama Masjid</label>
				<input type="text" class="form-control" name="pnama2" value="<?php echo $profil->pnama;?>">
			</div>
			<div class="form-group">
				<label for="pdeskripsi">Deskripsi</label>
				<input type="textarea" class="form-control" name="pdeskripsi" value="<?php echo $profil->pdeskripsi;?>">
			</div>
			<div class="form-group">
				<label for="psejarah">Sejarah</label>
				<input type="textarea" class="form-control" name="psejarah" value="<?php echo $profil->psejarah;?>">
			</div>
			<div class="form-group">
				<label for="pvisimisi">Visi Misi</label>
				<input type="textarea" class="form-control" name="pvisimisi" value="<?php echo $profil->pvisimisi;?>">
			</div>
			<button type="submit" name="submit" class="btn btn-lg btn-primary">Terapkan</button>
			<a href="<?php echo base_url('#');?>"><button type="submit" name="submit" class="btn btn-lg btn-primary">Lihat Profile</button></a>
		</form> <br>
<?php echo form_open('profilm/dbubahprofilm');?>
<?php
	echo "Nama Masjid : ".$profil->pnama; echo"<br>";
	echo "Deskripsi : ".$profil->pdeskripsi; echo"<br>";
	echo "Sejarah : ".$profil->psejarah; echo"<br>";
	echo "Visi Misi : ".$profil->pvisimisi; echo"<br>";
 ?>
</div>