<div class="features keuangan">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h2>Kebijakan Keuangan Desa</h2>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <h3>Pendapatan</h3>
					<h4>Pendapatan desa sebagaimana meliputi semua penerimaan uang melalui rekening desa yang merupakan hak desa dalam 1 (satu) tahun anggaran yang tidak perlu dibayar kembali oleh desa. Perkiraan pendapatan desa disusun berdasarkan asumsi realisasi pendapatan desa tahun sebelumnya dengan perkiraan peningkatan berdasarkan potensi yang menjadi sumber Pendapatan Asli Desa, Dana Desa dari APBN, Bagi Hasil, Bagian Dana Perimbangan, Bantuan keuangan dari Pemerintah, Pemerintah Provinsi dan Pemerintah Kabupaten, Hibah dan Sumbangan Pihak Ketiga.</h4>
				</div>
			</div>
		</div>
	</div>

	<div class="about-us demografis-about">
		<div class="container">
			<div class="text-center">
				<div class="text-center">
					<?php foreach($thn_anggarans as $ta): ?>
        <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="col-md-3 demografis">
            <a href="<?= base_url('keu-pendapatan/'.$ta->tahun) ?>">
              <img src="<?= base_url('assets/images/uang.png') ?>" alt="" >
						  <h3><?= $ta->tahun ?></h3>
            </a>
					</div>
				</div>
			<?php endforeach ?>
			</div>
			</div>
		</div>
	</div>
