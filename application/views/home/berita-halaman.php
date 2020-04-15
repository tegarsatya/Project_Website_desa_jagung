<div class="features">
		<div class="container">
			<div>
				<div class="wow bounceInDown text-center" data-wow-offset="0" data-wow-delay="0.3s">
					<h2><?= $berita->judul_berita ?></h2>
          <h3 style="margin:-30px 0 25px 0"><small><?= $berita->username ?></small> | <small><?= $berita->waktu_berita ?></small></h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <div class="text-center">
            <img src="<?= base_url('assets/images/berita/'.$berita->gambar_berita) ?>" style="width:75%; border-radius:25px">
          </div>
          <h5 style="margin:25px 0; line-height:1.5em;">
            <?= $berita->isi_berita ?>
          </h5>
				</div>
			</div>
		</div>
	</div>
