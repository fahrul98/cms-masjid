<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
postid
psbuat
psubah
tagid
psjudul
psustadz
pstext
mediaid
*/
// view admin
?>
<div class="container">
<?php
if ($page=="Beranda") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
<h2><?php echo $page;?></h2>
<h2><?php echo $cmprofil->pnama;?></h2>
	<table class="table  table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Judul</th>
			<th>Ustadz</th>
			<th>Waktu</th>
			<th>Tag</th>
		</thead>
<?php

$n = 1;
// <td><a href=".base_url('beranda/post/'.$v->postid).">".$v->psjudul."</a></td>
		foreach ($cmpost as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td><a href=".base_url('beranda/post/'.urlencode($v->psjudul)).">".$v->psjudul."</a></td>
			<td>".$v->psustadz."</td>
			<td>".$v->psubah."</td>
			<td>".$v->tagid."</td>
			</tr>";
			$n++;
		}
		 ?>
	</table>

<?php }else if ($page=="Semua Post") {?>
	<h2><?php echo $page;?><h3>
		<?php if (isset($mode)) {
		echo $mode;
	} ?></h3></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Judul</th>
			<th>Ustadz</th>
			<th>Waktu</th>
			<th>Tag</th>
		</thead>
	<?php
		$n = 1;
		foreach ($cmpost as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td><a href=".base_url('beranda/post/'.$v->postid).">".$v->psjudul."</a></td>
			<td>".$v->psustadz."</td>
			<td>".$v->psubah."</td>
			<td>".$v->tagid."</td>
			</tr>";
			$n++;
		}
	?>
	</table>


<?php

//tampilpost

 }else if ($page=="tampilpost") {?>
	<h2><?php echo $page;?></h2>
	<?php
		$n = 1;
		$v=$post;
		echo "<tr>
		<td>".$n."</td>
		<td><a href=".base_url('beranda/post/'.urlencode($v->psjudul)).">".$v->psjudul."</a></td>
		<td>".$v->psustadz."</td>
		<td>".$v->psubah."</td>
		<td>".$v->tagid."</td>
		</tr>";
	?>

<h1><a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>"><?php echo $v->psjudul;?></a></h1>
<p><?php echo $v->psustadz;?></p>
<p><?php echo $v->psubah;?></p>
<p><?php echo $v->tagid;?></p>
<p><?php echo $v->pstext;?></p>


<?php }else if ($page=="Profil Masjid") {?>
<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>
<label for="pnama">Nama Masjid</label>
<input type="text" class="form-control" name="pnama2" value="<?php echo $profil->pnama;?>">
<label for="pdeskripsi">Deskripsi</label>
<input type="textarea" class="form-control" name="pdeskripsi" value="<?php echo $profil->pdeskripsi;?>">
<label for="psejarah">Sejarah</label>
<input type="textarea" class="form-control" name="psejarah" value="<?php echo $profil->psejarah;?>">
<label for="pvisimisi">Visi Misi</label>
<input type="textarea" class="form-control" name="pvisimisi" value="<?php echo $profil->pvisimisi;?>">

<?php }else if ($page=="Takmir Masjid") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Foto</th>
			<th>Nama takmir</th>
			<th>Jabatan</th>
			<th>Masa Jabatan</th>
			<th>No. Telp</th>
		</thead>
	<?php

	$n = 1;
		foreach ($cmtakmir as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->mediaid."</td>
			<td>".$v->tknama."</td>
			<td>".$v->tkjabatan."</td>
			<td>".$v->tkmasajabatan."</td>
			<td>".$v->tknotelp."</td>

			</tr>";
			$n++;
		}
		 ?>
	</table>

<?php }else if ($page=="Ustadz") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Foto</th>
			<th>Nama ust.</th>
			<th>No. Telp</th>
			<th>Alamat</th>
		</thead>
<?php

$n = 1;
		foreach ($cmustadz as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->mediaid."</td>
			<td>".$v->usnama."</td>
			<td>".$v->usnotelp."</td>
			<td>".$v->usalamat."</td>

			</tr>";
			$n++;
		}
		 ?>
	</table>
<?php }else if ($page=="Keuangan Masjid") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Waktu</th>
			<th>Keterangan</th>
			<th>Pengeluaran</th>
			<th>Saldo</th>
			<!-- <th colspan="2">Operasi</th> -->
		</thead>
	<?php

	$n = 1;
		foreach ($kmasjid as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->kmwaktu."</td>
			<td>".$v->kmketerangan."</td>
			<td>".$v->kmpengeluaran."</td>
			<td>".$v->kmsaldo."</td>

			</tr>";
			$n++;
		}
		 ?>
	</table>
<?php }else if ($page=="Jadwal Kegiatan") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Nama Kegiatan</th>
			<th>Pihak terkait</th>
			<th>Waktu</th>
			<th>Tag</th>
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

				</tr>";
				$n++;
			}
			 ?>
		</table>
<?php } else if ($page=="Bantuan") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>

<?php }else if ($page=="Tentang") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>

<?php }?>
</div>
