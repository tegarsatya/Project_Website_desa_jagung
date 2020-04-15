<div class="features">
		<div class="container">
			<div class="text-center">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<h2>Kondisi Demografis</h2>
					<h2>Kesejahteraan</h2>
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
            <a href="<?= base_url('demo-kesejahteraan/'.$ta->tahun) ?>">
              <img src="<?= base_url('assets/images/demografi.jpg') ?>" alt="" >
						  <h3><?= $ta->tahun ?></h3>
            </a>
					</div>
				</div>
			<?php endforeach ?>
			</div>
			</div>
		</div>
	</div>
