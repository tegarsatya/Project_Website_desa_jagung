	<div class="about-us">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
					<h2> <a href="<?= base_url('berita') ?>">Berita Desa</a> </h2>
				</div>
			</div>
			<div class="col-md-12 text-center">
				<form class="form-inline" action="<?= base_url('berita/cari') ?>" method="get">
					<input type="text" class="form-control" name="cariberita" placeholder="Judul Berita" style="width:75%;float:left;border-radius:25px">
					<button type="submit" class="btn btn-primary" style="margin:0 0 0 5px; float:left; width:22%; border-radius:25px">Cari</button>
				</form>
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
			</div>
		</div>
	</div>
