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
		foreach ($cmpost as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td><a href=".base_url('post/ubahpost/'.$v->postid).">".$v->psjudul."</a></td>
			<td>".$v->psustadz."</td>
			<td>".$v->psubah."</td>
			<td>".$v->tagid."</td>
			</tr>";
			$n++;
		}
		 ?>
	</table>

<?php }else if ($page=="Semua Post") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>

<?php }else if ($page=="Profil Masjid") {?>
<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>

<?php }else if ($page=="Takmir Masjid") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>

<?php }else if ($page=="Ustadz") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>

<?php }else if ($page=="Keuangan Masjid") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>

<?php }else if ($page=="Jadwal Kegiatan") {?>
	<h2><?php echo $page;?><h3><?php echo $mode; ?></h3></h2>

<?php }?>
</div>