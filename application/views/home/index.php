<div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">
				<li><img src="<?= base_url('assets/images/slider/background_1d9.jpg') ?>" style="width:100%"/></li>
				<li><img src="<?= base_url('assets/images/slider/background_355.jpg') ?>" style="width:100%"/></li>
			</ul>
		</div>
    </div>

	<div class="container">
		<div class="text-center">
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h2>Lembaga - Lembaga Desa</h2>
			</div>
		</div>
	</div>

		<div class="box">
			<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.4s">
				<div class="col-sm-3">
					<a href="<?= base_url('bpd') ?>">
					<i class="fa fa-cogs fa-3x"></i>
					<h4>B P D</h4></a>
				</div>
			</div>
			<div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.8s">
				<div class="col-sm-3">
					<a href="<?= base_url('lpmd') ?>">
					<i class="fa fa-leaf fa-3x"></i>
					<h4>L P M D</h4></a>
				</div>
			</div>
			<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.2s">
				<div class="col-sm-3">
					<a href="<?= base_url('karang-taruna') ?>">
					<i class="fa fa-heart-o fa-3x"></i>
					<h4>KR. TARUNA</h4></a>
				</div>
			</div>
			<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.6s">
				<div class="col-sm-3">
					<a href="<?= base_url('rt-rw') ?>">
					<i class="fa fa-laptop fa-3x"></i>
					<h4>RT/RW</h4></a>
				</div>
			</div>
		</div>

	<div class="features">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2><a href="<?= base_url('visimisi') ?>">Visi & Misi</a></h2>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Visi</h2>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<p><h3> <em><strong>“MENINGKATKAN SARANA DAN PRASARANA PERHUBUNGAN“</strong></em></h3><br></p>
                    <p><h3> <em><strong>“PENGEMBANGAN EKONOMI MASYARAKAT BERBASIS KELOMPOK“</strong></em></h3><br></p>
					<p><h3> <em><strong>“MENINGKATKAN KUALITAS SUMBER DAYA MANUSIA“</strong></em></h3><br></p>
					<p><h3> <em><strong>“PENGEMBANGAN MASYARAKAT LUAS“</strong></em></h3><br></p>
					<p><h3> <em><strong>“MENINGKATKAN SARANA DAN PRASARANA UMUM“</strong></em></h3><br></p>

				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Misi</h2>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
				<p><h4> <em><strong>“MASYARAKAT ADIL MAKMUR JAGUNG MELALUI PENINGKATAN SUMBER DAYA 
                    MANUSIA YANG BERAKHLAK MULIA, SEHAT, DAN AGAMIS“</strong></em></h4><br> </p>
                


				</div>
			</div>
		</div>
	</div>

	<div class="about-us">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<h2><a href="<?= base_url('berita') ?>">Berita Desa<a/></h2>
				</div>
				<?php foreach($beritas as $berita): ?>
				<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="col-md-3">
						<a href="<?= base_url('berita/'.$berita->slug_berita) ?>">
							<img src="<?= base_url('assets/images/berita/'.$berita->gambar_berita) ?>" style="width:100%">
							<h3><?= $berita->judul_berita ?></h3>
							<h4> <small><?= $berita->username ?></small> | <small><?= $berita->waktu_berita ?></small> </h4>
							<p>
								<?= substr($berita->isi_berita, 0, 150)."..." ?>
							</p>
						</a>
					</div>
				</div>
			<?php endforeach ?>

				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<h4><a href="<?= base_url('berita') ?>">Lihat Semua</a></h4>
				</div>
			</div>
		</div>
	</div>
