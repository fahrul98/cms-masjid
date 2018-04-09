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
  	<!-- <div class="fill" style="background-image:url('//placehold.it/1024x700/CC1111/FFF');"> -->
  	<div class="" style="background-image:url('<?php echo base_url('uploads/'.$s->mediadir); ?>');">

      	<div class="carousel-caption">
					<a href="<?php echo base_url('beranda/post/'.urlencode($s->psjudul)); ?>">
					<!-- <h2 style="color:white;"> -->
					<h2 style="font-size:30pt;color:white;text-shadow: 1px 1px 10px #000000;">
						<?php echo $s->psjudul; ?>
					</h2>
				</a>
				<!-- <div class="" style="color:white;text-shadow: 0 1px 0 #333322;">
				<?php
							// echo $this->security->xss_clean(substr($v->pstext,0,50));
							echo htmlspecialchars_decode(substr($s->pstext,0,100))."...";
							//."...</p>"; ?>
			</div> -->
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

		<div class="container">
			<!-- <hr id="1"> -->
			<div class="row center" style="margin-bottom: 30px">
				<h2 style="font-family: Arial Black; font-size: 35px">Selamat Datang di website
				</h2>
				<p class="phitam" style="font-family: Arial; font-size: 25px"><?php echo $cmprofil->pnama; ?></p>
			</div>

			<div class="row">
				<div class="box">
					<div class="col-md-4">
							<h4 style="font-family: Arial Black; font-size: 20px">Portal Donasi</h4>
							<a href="<?php echo base_url('beranda/keuanganmasjid');?>"><i class="fa fa-money fa-5x icon"></i></a>
							<p>Pastikan kita menggunakan harta kita di jalan Allah</p>
							<div class="ficon">
							</div>
					</div>
					<div class="col-md-4">
						<div>
							<h4 style="font-family: Arial Black; font-size: 20px">Jadwal Kegiatan</h4>
								<a href="<?php echo base_url('beranda/jadwalkegiatan');?>"><i class="fa fa-calendar fa-5x icon"></i></a>
							<p>Jangan sampai hari ini berakhir tanpa ada satu ilmu pun yang kita dapatkan</p>
							<div class="ficon">
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div>
							<h4 style="font-family: Arial Black; font-size: 20px">Materi Kajian</h4>
							<a href="<?php echo base_url('beranda/post');?>"><i class="fa fa-book fa-5x icon"></i></a>
							<p>Klik untuk melihat daftar judul kajian</p>
							<div class="ficon">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <hr id="2"> -->
		</div>
		<div class="container" style="background-color:#efeaea; margin:0px; width: 100%">
			<div class="row">
				<div class="center">
					<div class="col-md-10 col-md-offset-1">
						<h2 style="font-family: Arial Black; font-size: 35px">Profil Masjid</h2><br>
						<h3 style="font-family: Geneva; font-size: 30px">Sejarah</h3>
						<p class="">
							<?php echo substr($profil->psejarah,0,300)." ...";?>
						</p><br>
						<h3 style="font-family: Geneva; font-size: 30px">Visi Misi</h3>
						<p class="">
							<?php echo substr($profil->pvisimisi,0,300)." ...";?>
						</p><br>
					</div>
				</div>
			</div>
			<!-- <hr id="3"> -->
		</div>
		<div class="container">
			<div class="row center">
				<h2 style="font-family: Arial Black; font-size: 35px">Galeri</h2>
				<p class="phitam" style="font-family: Arial; font-size: 25px"><?php echo $cmprofil->pnama; ?>
				</p>
			</div>
			<section>
		  <div class="container gal-container" style="padding-top: 25px">
		  	<hr style= "height:0.5px">
				<?php
				$n=1;
				// $val= rand(1,10);
				$val= 5;
					//iterate pic
					foreach ($imgs as $v) {?>
						<?php if ($n%$val==0){ ?>
							<div class="col-md-8 col-sm-12 co-xs-12 gal-item">
						<?php }else {?>
							<div class="col-md-4 col-sm-12 co-xs-12 gal-item">
						<?php } ?>
		      <div class="box">
		        <a href="#<?php echo $n; ?>" data-toggle="modal" data-target="#<?php echo $n; ?>">
							<img src="<?php echo base_url('uploads/'.$v->mdir);?>" />
		        </a>
		        <div class="modal fade" id="<?php echo $n; ?>" role="dialog">
		          <div class="modal-dialog">
		            <div class="modal-content">
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		              <div class="modal-body">
										<img src="<?php echo base_url('uploads/'.$v->mdir);?>" />
		              </div>
		                <div class="col-md-12 description">
		                  <h4>Desk</h4>
		                </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
				<?php
				$n++;
			}	?>
		  </div>
		  </div>
		</section>
		</div>
		</div>


		<?php }else if ($page=="Semua Artikel") {?>
		<!-- <div class="whitebg" style="padding-top: 0px"> -->
		<div class="whitebg" style="">
		<div class="container" style="">
			<div class="row">
				<div class="col-lg-8">
					<div class="service">
						<h2 style="font-family: Arial Black; font-size: 35px"><?php echo $page;?></h2>
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
					<h5 style="font-family: Arial"><?php echo "Sekarang : ".indonesian_date(date("Y-m-d"),'l, j F Y',''); ?></h5>
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

							<h1 class="" style="font-family: Arial Black; font-size: 35px"><a href="<?php echo base_url('beranda/post/'.urlencode($v->psjudul));?>"><?php echo $v->psjudul;?></a></h1>
							<h5><?php echo indonesian_date($v->psbuat)." | ".$v->psustadz." | ".$v->tag." | ";?><i class='fa fa-eye' aria-hidden='true'></i> <span> <?php echo $v->vcount; ?></span></h5>
							<!-- <p class="phitam">
							<p class="phitam" style="font-size:15px;">
							</p> -->
							<img src="
							<?php echo base_url('assets/uploads/'.$v->psjudul); ?>
							" class="img-responsive" alt="" />
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
				<div class="container" style="margin:0px; width: 100%; margin-bottom: 50px">
					<div class="row center">
						<div class="service">
							<h2 style="font-family: Arial Black; font-size: 35px"><?php echo $page;?></h2>
							<h3 class="phitam">Lanjutkan membaca untuk mengenal <?php echo $cmprofil->pnama; ?> lebih dekat
									</h3>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="row">
						<h2 class="center" style="font-family: Arial Black; font-size: 30px">Deskripsi</h2>
						<p class="phitam">
							<?php echo nl2br($profil->pdeskripsi);?>
						</p>
					</div>
					<hr style="height: 0.5px">
					<div class="row">
						<h2 class="center" style="font-family: Arial Black; font-size: 30px">Sejarah</h2>
						<p class="phitam">
							<?php echo nl2br($profil->psejarah);?>
						</p>
					</div>
					<hr style="height: 1px">
					<div class="row">
						<h2 class="center" style="font-family: Arial Black; font-size: 30px">Visi Misi</h2>
						<p class="phitam">
							<?php echo nl2br($profil->pvisimisi);?>
						</p>
					</div>
				</div>
				
				</div>
				<?php }else if ($page=="Takmir Masjid") {?>

				<div class="whitebg" style="padding-top: 0px">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="portfolios">
								<div class="text-center">
									<h2 class="hitam" style="font-family: Arial Black; font-size: 35px"><?php echo $page;?></h2>
									<h5 class="phitam" style="font-family: Arial">Daftar Takmir <?php echo $cmprofil->pnama; ?><br>
										</h5>
								</div>
								<hr style="height: 0.5px">
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
  						<img class="" src="<?php echo base_url('uploads/takmir/'.$v->mediadir);?>" width="250" height="250" />
  						<div class="container2">
							  <h4 style="font-family:Arial; font-weight: bold; padding-bottom: 10px"><?php echo $v->tknama;?></h4>
							  <h5 style="font-family: Arial"><?php echo $v->tkjabatan;?></h5>
							  <h5 style="font-family: Arial"><?php echo $v->tkmasajabatan;?></h5>
							  <h5 style="font-family: Arial;"><?php echo $v->tknotelp;?></h5>
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
									<h2 class="hitam" style="font-family: Arial Black; font-size: 35px"><?php echo $page;?></h2>
									<h5 class="phitam" style="font-family: Arial">Daftar Ustadz <?php echo $cmprofil->pnama; ?><br>
										</h5>
								</div>
								<hr style="height: 0.5px">
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
	  					<img class="" src="<?php
							if ($v->mediadir) {
								echo base_url('uploads/ustadz/'.$v->mediadir);
							}else{
								echo base_url('uploads/default.png');
							}

							 ?>" width="250" height="250" />
	  						<div class="container2">
									<h5 style="font-family:Arial; font-weight: bold; font-size: 20px;padding-bottom: 10px"><?php echo $v->usnama;?></h4>
									<h5 style="font-family: Arial"><?php echo $v->usnotelp;?></h4>
									<h5 style="font-family: Arial"><?php echo $v->usalamat;?></h4>
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
									<h2 class="hitam" style="font-family: Arial Black; font-size: 35px"><?php echo $page;?></h2>
									<h5 class="phitam" >Keuangan <?php echo $cmprofil->pnama;?><br> Untuk donasi silahkan menuju Tab Donasi<br>
									</h5>
								</div>
								<hr style="height: 0.5px">
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
									<h2 class="hitam" style="font-family: Arial Black; font-size: 35px"><?php echo $page;?></h2>
									<h5>Jadwal kegiatan-kegiatan <?php echo $cmprofil->pnama;?><br>
									</h5>
								</div>
								<hr style="height:0.5px">
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
									<h2 class="hitam" style="font-family: Arial Black; font-size: 35px"><?php echo $page;?></h2>
									<h5 class="phitam">Galeri <?php echo $cmprofil->pnama;?><br>
										</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr style="height: 0.5px">
	<section>
  <div class="container gal-container">
		<?php
		$n=1;
		// $val= rand(1,10);
		$val= 5;
			//iterate pic
			foreach ($imgs as $v) {?>
				<?php if ($n%$val==0){ ?>
					<div class="col-md-8 col-sm-12 co-xs-12 gal-item">
				<?php }else {?>
					<div class="col-md-4 col-sm-12 co-xs-12 gal-item">
				<?php } ?>
      <div class="box">
        <a href="#<?php echo $n; ?>" data-toggle="modal" data-target="#<?php echo $n; ?>">
					<img src="<?php echo base_url('uploads/'.$v->mdir);?>" />
        </a>
        <div class="modal fade" id="<?php echo $n; ?>" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
								<img src="<?php echo base_url('uploads/'.$v->mdir);?>" />
              </div>
                <div class="col-md-12 description">
                  <h4>Desk</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<?php
		$n++;
	}	?>
  </div>
  </div>
</section>
				<!-- </div> -->
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
									<h2 class="hitam" style="font-family: Arial Black; font-size: 35px"><?php echo $page;?></h2>
									<h5 class="phitam">Tentang CMS & Developer<br>
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row text-center">
						<h2 class="hitam" style="font-family: Arial Black; font-size: 35px">Pengembang (Developer)</h2>
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
