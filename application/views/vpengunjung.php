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
	<?php
//tanggal, dll
include('opsional.php');

	if ($page=="Beranda") {

?>
<!-- slide -->
<!-- <div class="fill"> -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  	<?php
  		$no=0;
  		foreach ($cmslide as $s) {
  			if ($no==0) {
  				echo '<div class="active item">';
  			}else{
  				echo '<div class="item">';
  			}
  	?>
  	<div class="fill" style="background-image:url('//placehold.it/1024x700/CC1111/FFF');">

      	<div class="carousel-caption"><?php echo $s->psjudul; ?></div>
        <div class="container">

        </div>
      </div>
    </div>
<?php
  			$no++;
  		}
  	 ?>
  </div>
  <div class="pull-center">
	<a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
	<a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
  </div>
</div>
</div>
<!-- end slide -->

		<!-- <div class="container backgroundpictop" style="margin-left: 0px;margin-right: 0px ;width: 100%"> -->
		<!-- <div class="container backgroundpictop" style="">
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
		</div> -->
		<div class="whitebg">

		<div class="container" >
			<hr id="1">
			<div class="row center">
				<h2 class="hitam">Selamat Datang di website
				<p class="phitam"><?php echo $cmprofil->pnama; ?></p>
			</h2>
			</div>
			<div class="row">
				<div class="box">
					<div class="col-md-4">
							<h4>Portal Donasi</h4>
							<a href="<?php echo base_url('');?>"<i class="fa fa-money fa-5x icon"></i></a>
							<p>Pastikan kita menggunakan harta kita di jalan Allah</p>
							<div class="ficon">
							</div>
					</div>
					<div class="col-md-4">
						<div>
							<h4>Jadwal Kegiatan</h4>
								<a href="<?php echo base_url('beranda/jadwalkegiatan');?>"><i class="fa fa-calendar fa-5x icon"></i></a>
							<p>Jangan sampai hari ini berakhir tanpa ada satu ilmu pun yang kita dapatkan</p>
							<div class="ficon">
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<h4>Materi Kajian</h4>
							<a href="#"><i class="fa fa-book fa-5x icon"></i></a>
							<p>Klik untuk melihat daftar judul kajian</p>
							<div class="ficon">
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr id="2">
		</div>
		<div class="container">
			<div class="row">
				<div class="center">
					<div class="col-md-10 col-md-offset-1">
						<h2 class="hitam">Profil Masjid</h2><br>
						<h3>Sejarah</h3>
						<p class="phitam">
							<?php echo substr($profil->psejarah,0,300)." ...";?>
						</p><br>
						<h3>Visi Misi</h3>
						<p class="phitam">
							<?php echo substr($profil->pvisimisi,0,300)." ...";?>
						</p><br>
					</div>
				</div>
			</div>
			<hr id="3">
		</div>
		<div class="container">
			<div class="row center">
				<h2 class="hitam">Galeri</h2>
				<p class="phitam">Tentang Masjid <?php echo $cmprofil->pnama; ?>
				</p>
			</div>
			<div class="grid row" style="">

				<?php
			//iterate pic
			foreach ($imgs as $v) {?>
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
		</div>


		<?php }else if ($page=="Semua Artikel") {?>
		<!-- <div class="whitebg" style="padding-top: 0px"> -->
		<div class="whitebg" style="">
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
					</div>
					<hr>
					<?php
							$n = 1;
							foreach ($cmpost as $v) {
								?>
								<div class="col-xs-12 col-md-4 col-lg-4" style="">
									<a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>">
										<div class="card">
											<div class="imgpost">
												<img class="" src="<?php echo base_url('uploads/posts/'.$v->mediadir);?>"/>
											</div>
											<div class="container2" style="text-align: justify;">
													<h5 class=""><?php echo $v->psjudul; ?></h5>
													<a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>" alt="">Lebih banyak...</a>
											</div>
										</div>
									</a>
									</div>
									<!--

							<p class="text-muted">
								<?php echo htmlentities(indonesian_date($v->psbuat)." |	".$v->psustadz." | ".$v->tag." | ");?><i class='fa fa-eye' aria-hidden='true'></i> <span> <?php echo $v->vcount; ?></span>
							</p>
							<div class="phitam">
								<?php
								// echo $this->security->xss_clean(substr($v->pstext,0,50));
								echo htmlspecialchars_decode(substr($v->pstext,0,100))."...";
								//."...</p>"; ?>
							</div>

						<hr>
					-->
						<?php
								$n++;
							}

						?>
				</div>
				<!-- col -->
				<!-- <div class="container"> -->
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
		<!-- </div> -->
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
				<!-- <div class="whitebg" style="padding-top: 0px; margin-left: 90px; margin-right: 90px"> -->
				<div class="container" id="pengunjung">
					<div class="row">
						<div class="blogs col-lg-12">
							<img src="assets/img/01.jpg" class="img-responsive" alt="" />
							<h1 class=""><a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>"><?php echo $v->psjudul;?></a></h1>
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
				<!-- </div> -->
				</div>
				<?php }else if ($page=="Profil Masjid") {?>

				<!-- <div class="whitebg" style="padding-top: 0px; margin-left: 90px; margin-right: 90px"> -->
				<div class="whitebg">
				<div class="container" style="margin-left: 20px">
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
						<h2 class="center">Deskripsi</h2>
						<p class="phitam">
							<?php echo nl2br($profil->pdeskripsi);?>
						</p>
					</div>
					<hr>
					<div class="row">
						<h2 class="center">Sejarah</h2>
						<p class="phitam">
							<?php echo nl2br($profil->psejarah);?>
						</p>
					</div>
					<hr>
					<div class="row">
						<h2 class="center">Visi Misi</h2>
						<p class="phitam">
							<?php echo nl2br($profil->pvisimisi);?>
						</p>
					</div>
				</div>
				<hr>
				</div>
				<?php }else if ($page=="Takmir Masjid") {?>

				<div class="whitebg" style="padding-top: 0px">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2 class="hitam"><?php echo $page;?></h2>
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
				<?php
					$n = 1;
					foreach ($cmtakmir as $v) {
					// <td>"$v->mediaid."</td>"
					// echo "<tr align=center>
					// <td>".$n."</td>";
					?>
					<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="card">
  						<img class="img" src="<?php echo base_url('uploads/takmir/'.$v->mediadir);?>"/>
  						<div class="container2">
								<h4><?php echo $v->tknama;?></h4>
							  <h5><?php echo $v->tkjabatan;?></h5>
							  <h5><?php echo $v->tkmasajabatan;?></h5>
							  <h5><?php echo $v->tknotelp;?></h5>
								</div>
										</div>
										</div>
							<?php
								$n++;
								}
							?>
</div>
				</div>
				</div>

				<?php }else if ($page=="Ustadz") {?>

				<div class="whitebg" style="padding-top: 0px">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2 class="hitam"><?php echo $page;?></h2>
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

<?php
					$n = 1;
					foreach ($cmustadz as $v) {
					// <td>"$v->mediaid."</td>"
					// echo "<tr align=center>
					// <td>".$n."</td>";
					?>
					<div class="col-xs-6 col-md-3 col-lg-3">
						<div class="card">
	  					<img class="img" src="<?php echo base_url('uploads/ustadz/'.$v->mediadir);?>" width=250 height=250 />
	  						<div class="container2">
									<h5><?php echo $v->usnama;?></h4>
									<h5><?php echo $v->usnotelp;?></h4>
									<h5><?php echo $v->usalamat;?></h4>
								</div>
							</div>
						</div>
						<?php
								$n++;
								}
							?>
						</div>
					</div>
				</div>

				<?php }else if ($page=="Keuangan Masjid") {?>

				<!-- <div class="whitebg" style="padding-top: 0px; margin-left: 70px; margin-right: 70px"> -->
				<div class="whitebg">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2 class="hitam"><?php echo $page;?></h2>
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
						<div class="col-md-12">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#papandana" role="tab" data-toggle="tab" aria-expanded="true" style="height:40px;padding:10px">Papan Dana Masjid</a></li>
							<li class=""><a href="#donasi" role="tab" data-toggle="tab" aria-expanded="false" style="height:40px;padding:10px">Donasi</a></li>
						</ul>
						<div class="tab-content tab-content-colored">
							<div class="tab-pane fade active in" id="papandana">
								<h5>Papan Dana Masjid</h5>
								<table id="datatable" class="table table-bordered table-striped table-hover">
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
						<td>".indonesian_date($v->kmwaktu)."</td>
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
								<table id="datatable2" class="table table-bordered table-striped table-hover">
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
										<td>".indonesian_date($v->rdwaktu)."</td>
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
				</div>
				</div>

				<?php }else if ($page=="Jadwal Kegiatan") {?>

				<!-- <div class="whitebg" style="padding-top: 0px; margin-left: 70px; margin-right: 70px"> -->
				<div class="whitebg">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2 class="hitam"><?php echo $page;?></h2>
									<h5>Jadwal kegiatan-kegiatan <?php echo $cmprofil->pnama;?><br>
									</h5>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
					<div class="col-md-12 ">
					<table id="datatable" class="table table-bordered table-striped table-hover">
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
				</div>
				</div>

				<?php } else if ($page=="Galeri") {?>

				<!-- <div class="whitebg" style="padding-top: 0px; margin-left: 70px; margin-right: 70px"> -->
				<div class="whitebg">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2 class="hitam"><?php echo $page;?></h2>
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
						<div class="container content" style="padding-bottom: 50px">
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
				</div>
				</div>

				<?php }else if ($page=="Bantuan") {?>

				<!-- <div class="whitebg" style="padding-top: 0px; margin-left: 70px; margin-right: 70px"> -->
				<div class="whitebg">
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
				</div>

				<?php }else if ($page=="Tentang") {?>

				<!-- <div class="whitebg" style="padding-top: 0px; margin-left: 70px; margin-right: 70px"> -->
				<div class="whitebg">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2 class="hitam"><?php echo $page;?></h2>
									<h5 class="phitam">Tentang CMS & Developer<br>
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row text-center">
						<h2 class="hitam">Pengembang (Developer)</h2>
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
				</div>
				<?php }?>
				<!-- end wrapp -->
				</div>
