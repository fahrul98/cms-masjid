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

?>
	<!-- <div class="wrapper"> -->
	<!-- Template -->
<div class="">
</div>
	<?php
	function indonesian_date ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
		if (trim ($timestamp) == ''){
						$timestamp = time ();
		}	elseif (!ctype_digit ($timestamp))		{
				$timestamp = strtotime ($timestamp);
		}
		# remove S (st,nd,rd,th) there are no such things in indonesia :p
		$date_format = preg_replace ("/S/", "", $date_format);
		$pattern = array (
				'/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
				'/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
				'/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
				'/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
				'/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
				'/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
				'/April/','/June/','/July/','/August/','/September/','/October/',
				'/November/','/December/',
		);
		$replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
				'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
				'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
				'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
				'Oktober','November','Desember',
		);
		$date = date ($date_format, $timestamp);
		$date = preg_replace ($pattern, $replace, $date);
		$date = "{$date} {$suffix}";
		return $date;
	}
	if ($page=="Beranda") {

?>

		<div class="container backgroundpictop" style="margin-left: 0px;margin-right: 0px; margin-bottom: 50px ;width: 100%">
			<div class="row">
				<div class="slider">
					<div class="col-md-6 col-md-offset-3" style="margin-top: 130px">
						<div class="text-center">
							<h1>Selamat Datang di Website <br><?php echo $cmprofil->pnama; ?></h1>
							<p>Mari kita memuliakan rumah Allah</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="box">
					<div class="col-md-4">
						<!-- <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s"> -->
						<div>
							<h4>Portal Donasi</h4>
							<div class="icon">
								<i class="fa fa-heart-o fa-3x"></i>
							</div>
							<p>Pastikan kita menggunakan harta kita di jalan Allah</p>
							<div class="ficon">
								<a href="<?php echo base_url('');?>" class="btn btn-default" role="button">Buka</a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<!-- <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s"> -->
						<div>
							<h4>Jadwal Kegiatan</h4>
							<div class="icon">
								<i class="fa fa-calendar fa-3x"></i>
							</div>
							<p>Jangan sampai hari ini berakhir tanpa ada satu ilmu pun yang kita dapatkan</p>
							<div class="ficon">
								<a href="<?php echo base_url('beranda/jadwalkegiatan');?>" class="btn btn-default" role="button">Buka</a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<!-- <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s"> -->
						<div>
							<h4>Materi Kajian</h4>
							<div class="icon">
								<i class="fa fa-location-arrow fa-3x"></i>
							</div>
							<p>Klik untuk melihat daftar judul kajian</p>
							<div class="ficon">
								<a href="#" class="btn btn-default" role="button">Buka</a>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="text-center">
					<!-- <div class="col-md-10"> -->
					<div class="col-md-10 col-md-offset-1">
						<h2>Profil Masjid</h2><br>
						<h3>Sejarah</h3>
						<p class="phitam">
							<?php echo substr($profil->psejarah,0,300)." ...";?>
						</p><br>
						<h3>Visi Misi</h3>
						<p class="phitam">
							<?php echo substr($profil->pvisimisi,0,300)." ...";?>
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="text-center">
						<h2>Galeri</h2>
						<h5 class="phitam">Tentang Masjid <?php echo $cmprofil->pnama; ?></p>
						</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="container content">
			<div class="grid" style="">

				<?php
			//iterate pic
			foreach ($imgs as $v) {?>
					<!-- <div class="col-md-3">
					<div class="thumbnail">
						<img src="<?php echo base_url('uploads/'.$v->mdir);?>"/>
						<a class="btn btn-danger" href="<?php echo base_url('media/dbmhapus?mediaid='.$v->mediaid.'&mdir='.$v->mdir); ?>">hapus</a><br>
					</div>
				</div> -->
					<figure class="effect-zoe">
						<!-- <img src="assets/img/25.jpg" alt="img25"> -->
						<img src="<?php echo base_url('uploads/'.$v->mdir);?>" />
						<figcaption>
							<h2>Opsi <span>></span></h2>
							<p class="icon-links">
								<a class="" href="<?php echo base_url('beranda/galeri');?>">
								<span class="fa fa-eye"></span>
							</a>
							</p>
						</figcaption>
					</figure>
					<?php	}	?>
			</div>
		</div>

		<?php }else if ($page=="Semua Post") {?>

		<div class="container" style="">
			<div class="row">
				<div class="col-lg-8">
					<div class="service">
						<h2><?php echo $page;?></h2>
						<!-- <h3 class="phitam">~hadits~</h3> -->
						<?php
						if (isset($page2)&&$page2=="balik") {?>
							<a class="btn btn-primary" href="<?php echo base_url('beranda/post'); ?>">Tampil semuanya</a>
							<?php
					} ?>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="service">
						<div class="media">
							<?php echo form_open('beranda/search','class="navbar-form search-form" ');  ?>
							<input name="search" value="" class="form-control" placeholder="Cari..." type="text">
							<button type="submit" class="btn"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h5><?php echo "Sekarang : ".indonesian_date(date("Y-m-d"),'l, j F Y',''); ?></h5>
					<hr>
					<?php
							$n = 1;
							foreach ($cmpost as $v) {
								// echo "<tr>
								// <td>".$n."</td>
								// <td><a href=".base_url('beranda/post/'.urlencode($v->psjudul)).">".$v->psjudul."</a></td>
								// <td>".$v->psustadz."</td>
								// <td>".$v->psubah."</td>
								// <td>".$v->tagid."</td>
								// </tr>";
								?>

						<a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>">
							<h3 class="media-heading"><?php echo $v->psjudul; ?></h3>
							<p class="text-muted">
								<?php echo htmlentities(indonesian_date($v->psbuat)." |	".$v->psustadz." | ".$v->tag." | ");?><i class='fa fa-eye' aria-hidden='true'></i> <span> <?php echo $v->vcount; ?></span>
							</p>
							<div class="phitam">
								<?php
								// echo $this->security->xss_clean(substr($v->pstext,0,50));
								echo htmlspecialchars_decode(substr($v->pstext,0,100))."...";
								//."...</p>"; ?>
							</div>
							<a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>" alt="">Lebih banyak...</a>
						</a>
						<hr>
						<?php
								$n++;
							}

						?>
				</div>
				<div class="container">
					<div class="row">
						<nav>
							<ul class="pagination">
								<?php
										if (isset($links)) {
											foreach ($links as $link) {
												echo "<li>". $link."</li>";
											}
										}
										?>
									<!-- <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
										<li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li> -->
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<?php

//tampilpost
 }else if ($page=="tampilpost") {?>
			<!-- <h2><?php echo $page;?></h2> -->
			<?php
		$n = 1;
		$v=$post;
	?>


				<!-- <div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<div class="blogs">
									<div class="text-center">
										<h2>Blog</h2>

										<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
										</p>
									</div>
									<hr>
								</div>
							</div>
						</div>
					</div> -->
<hr>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<img src="assets/img/01.jpg" class="img-responsive" alt="" />
							<h1><a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>"><?php echo $v->psjudul;?></a></h1>
							<h5><?php echo indonesian_date($v->psbuat)." | ".$v->psustadz." | ".$v->tag." | ";?><i class='fa fa-eye' aria-hidden='true'></i> <span> <?php echo $v->vcount; ?></span></h5>
							<!-- <p class="phitam">
							<p class="phitam" style="font-size:15px;">
							</p> -->
							<div class="phitam">
							<?php echo $v->pstext;?>
							</div>
							<!-- sidebar -->
						</div>
					</div>
				</div>
				</div>

				<?php }else if ($page=="Profil Masjid") {?>

				<div class="container" style="">
					<div class="row">
						<div class="service">
							<h2><?php echo $page;?></h2>
							<h3 class="phitam">Lanjutkan membaca untuk mengenal <?php echo $cmprofil->pnama; ?> lebih dekat
									</h3>
						</div>
					</div>
				</div>
				<hr>
				<div class="container">
					<div class="row">
						<h2 class="text-center">Deskripsi</h2>
						<p class="phitam">
							<?php echo nl2br($profil->pdeskripsi);?>
						</p>
					</div>
					<hr>
					<div class="row">
						<h2 class="text-center">Sejarah</h2>
						<p class="phitam">
							<?php echo nl2br($profil->psejarah);?>
						</p>
					</div>
					<hr>
					<div class="row">
						<h2 class="text-center">Visi Misi</h2>
						<p class="phitam">
							<?php echo nl2br($profil->pvisimisi);?>
						</p>
					</div>
				</div>
				<hr>
				<?php }else if ($page=="Takmir Masjid") {?>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2><?php echo $page;?></h2>
									<h5 class="phitam">Daftar Takmir <?php echo $cmprofil->pnama; ?><br>
										</h5>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
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
			// <td>"$v->mediaid."</td>"
			echo "<tr align=center>
			<td>".$n."</td>";
			?>
								<td align=center>
									<img class="thumbnail" src="<?php echo base_url('uploads/takmir/'.$v->mediadir);?>" width=80 height=80 />
								</td>
								<?php
			echo "</td>
			<td>".$v->tknama."</td>
			<td>".$v->tkjabatan."</td>
			<td>".$v->tkmasajabatan."</td>
			<td>".$v->tknotelp."</td>

			</tr>";
			$n++;
		}
		 ?>
						</table>
					</div>
				</div>
				<?php }else if ($page=="Ustadz") {?>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2><?php echo $page;?></h2>
									<h5 class="phitam">Daftar Ustadz <?php echo $cmprofil->pnama; ?><br>
										</h5>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
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
			echo "<tr align='center'>
			<td>".$n."</td>";
			?>
								<td align="center">
									<img class="thumbnail" src="<?php echo base_url('uploads/ustadz/'.$v->mediadir);?>" width=80 height=80 />
								</td>
								<?php
			echo
			"<td>".$v->usnama."</td>
			<td>".$v->usnotelp."</td>
			<td>".$v->usalamat."</td>

			</tr>";
			$n++;
		}
		 ?>
						</table>
					</div>
				</div>
				<?php }else if ($page=="Keuangan Masjid") {?>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2><?php echo $page;?></h2>
									<h5 class="phitam">Keuangan <?php echo $cmprofil->pnama;?><br> Untuk donasi silahkan menuju Tab Donasi<br>
									</h5>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<!-- BASIC TABS -->
						<ul class="nav nav-pills" role="tablist">
							<li class="active"><a href="#papandana" role="tab" data-toggle="tab" aria-expanded="true">Papan Dana Masjid</a></li>
							<li class=""><a href="#donasi" role="tab" data-toggle="tab" aria-expanded="false">Donasi</a></li>
						</ul>
						<div class="tab-content tab-content-colored">
							<div class="tab-pane fade active in" id="papandana">
								<h5>Papan Dana Masjid</h5>
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
							</div>
							<div class="tab-pane fade" id="donasi">
								<h5>Donasi</h5>
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<th>No.</th>
										<th>Waktu</th>
										<th>Jumlah</th>
										<th>Donatur</th>
										<th>Total</th>
									</thead>
									<?php

							$n = 1;
									foreach ($cmrdonasi as $v) {
										echo "<tr>
										<td>".$n."</td>
										<td>".$v->rdwaktu."</td>
										<td>".$v->rdjumlah."</td>
										<td>".$v->rddonatur."</td>
										<td>".$v->rdtotal."</td>
										</tr>";
										$n++;
									}
									 ?>
								</table>
							</div>
						</div>
						<!-- END BASIC TABS -->

					</div>
				</div>
				<?php }else if ($page=="Jadwal Kegiatan") {?>

				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2><?php echo $page;?></h2>
									<h5>Jadwal kegiatan-kegiatan <?php echo $cmprofil->pnama;?><br>
									</h5>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
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
				<td>".indonesian_date($v->jkwaktu)."</td>
				<td>".$v->tag."</td>

				</tr>";
				$n++;
			}
			 ?>
					</table>
				</div>

				<?php } else if ($page=="Galeri") {?>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2><?php echo $page;?></h2>
									<h5 class="phitam">Galeri <?php echo $cmprofil->pnama;?><br>
										</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="container">
					<div class="row">
						<div class="container content">
							<div class="grid" style="">

								<?php
									//iterate pic
									foreach ($imgs as $v) {?>
									<!-- <div class="col-md-3">
											<div class="thumbnail">
												<img src="<?php echo base_url('uploads/'.$v->mdir);?>"/>
												<a class="btn btn-danger" href="<?php echo base_url('media/dbmhapus?mediaid='.$v->mediaid.'&mdir='.$v->mdir); ?>">hapus</a><br>
											</div>
										</div> -->
									<figure class="effect-zoe">
										<!-- <img src="assets/img/25.jpg" alt="img25"> -->
										<img src="<?php echo base_url('uploads/'.$v->mdir);?>" />
										<figcaption>
											<h2>Opsi <span>></span></h2>
											<p class="icon-links">
												<!-- <a class="" href="<?php echo base_url('#');?>"> -->
												<a class="" href="#">
														<span class="fa fa-eye"></span>
													</a>
											</p>
										</figcaption>
									</figure>
									<?php	}	?>
							</div>
						</div>

					</div>
				</div>

				<?php }else if ($page=="Bantuan") {?>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2><?php echo $page;?></h2>
									<h5 class="phitam">Bantuan<br>
									</h5>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>

				<?php }else if ($page=="Tentang") {?>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2><?php echo $page;?></h2>
									<h5 class="phitam">Tentang CMS & Developer<br>
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="container">
					<div class="row text-center">
						<h2 class="">Pengembang (Developer)</h2>
					</div>
					<br>
					<div class="row text-center">
						<div class="col-md-4 col-md-offset-4">
							<img class="img-circle" src="<?php echo base_url('uploads/default.png');?>" alt="gb1" width="300" height="300" />
							<p class="phitam">
								CMS Masjid Al-Afa <br> AFAdev <br> @2018
							</p>
						</div>
					</div>
				</div>

				<?php }?>
				<!-- end wrapp -->
				</div>
