<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// view admin
if ($page=="Jadwal Kegiatan") {
?>
<h2>Jadwal Kegiatan</h2>
<h3><a href="<?php echo base_url('jadwalkegiatan/tambahkegiatan');?>">Tambah kegiatan</a></h3>
<table class="table">
	<thead>
		<th>No.</th>
		<th>Nama Kegiatan</th>
		<th>Pihak terkait</th>
		<th>Waktu</th>
		<th>Tag</th>
		<th colspan="2">Operasi</th>
	</thead>
<?php
	$n = 1;
		foreach ($jadwalk as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->jknama."</td>
			<td>".$v->jkpihak."</td>
			<td>".$v->jkwaktu."</td>
			<td>".$v->tagid."</td>
			<td><a href=".base_url('jadwalkegiatan/ubahjkegiatan/'.$v->jkid)."> ubah</a></td>
			<td><a href=".base_url('jadwalkegiatan/dbhapus/'.$v->jkid)."> hapus</a></td>

			</tr>";
			$n++;
		}
		 ?>
	</table>
	<?php }else if ($page=="Tambah Kegiatan") {?>
	<h3><a href="<?php echo base_url('jadwalkegiatan');?>">Kembali</a></h3>
		<h3>Tambah kegiatan</h3>
		<?php echo form_open('jadwalkegiatan/dbtambahjk','class=form');	?>
		<!-- <input type="hidden" name="jkid" value="<?php echo $jadwalk->jkid ?>"> -->
		<label for="jknama">jknama</label><input type="text" name="jknama" value="">
		<label for="jkpihak">jkpihak</label><input type="text" name="jkpihak" value="">
		<label for="jkwaktu">Text</label><input type="textarea" name="jkwaktu" value="">
		<label for="tagid">tag</label><input type="textarea" name="tagid" value="">
		<input type="submit" name="submit" value="Tambah">

	<?php }else if ($page=="Ubah Kegiatan") {?>
		<h3><a href="<?php echo base_url('jadwalkegiatan');?>">Kembali</a></h3>
		<h3>Ubah kegiatan</h3>
		<a href="<?php echo base_url('jadwalkegiatan/dbhapus/'.$jadwalk->jkid) ?>">Hapus kegiatan</a>
		<?php echo form_open('jadwalkegiatan/dbubahjk','class=form');	?>
		<input type="hidden" name="jkid" value="<?php echo $jadwalk->jkid;?>">
		<label for="jknama">jknama</label><input type="text" name="jknama" value="<?php echo $jadwalk->jknama;?>">
		<label for="jkpihak">jkpihak</label><input type="text" name="jkpihak" value="<?php echo $jadwalk->jkpihak;?>">
		<label for="jkwaktu">Text</label><input type="textarea" name="jkwaktu" value="<?php echo $jadwalk->jkwaktu;?>">
		<label for="tagid">Tag</label><input type="textarea" name="tagid" value="<?php echo $jadwalk->tagid;?>">
		<input type="submit" name="submit" value="Ubah">
	<?php } ?>
