<div class="features">
		<div class="container">

      <h2 class="text-center">Kebijakan Keuangan Desa Tahun <?= $keupendapatan->tahun ?></h2>

			<div class="text-center tabel-web">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h3>
            Rencana Anggaran Pendapatan Desa
           </h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <table class="table table-hover">
              <tr>
                <td> <strong>No</strong> </td>
                <td> <strong>Uraian Pendapatan</strong> </td>
                <td> <strong>Jumlah (Rp.)</strong> </td>
              </tr>
              <tr>
                <td> <strong>1.1</strong> </td>
                <td colspan="2"> <strong>Pos Pendapatan Asli Desa</strong> </td>
              </tr>
              <tr>
                <td>1.1.1</td>
                <td>Hasil Usaha Desa</td>
                <td><?= number_format($keupendapatan->hasil_usaha_desa, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>1.1.2</td>
                <td>Tanah Kas Desa</td>
                <td><?= number_format($keupendapatan->tanah_kas_desa, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>1.1.3</td>
                <td>Hasil Swadaya Masyarakat</td>
                <td><?= number_format($keupendapatan->hasil_swamas, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>1.1.4</td>
                <td>Hasil Partisipasi dan Gotong Royong</td>
                <td><?= number_format($keupendapatan->hasil_pargoro, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>1.1.5</td>
                <td>Pungutan Desa</td>
                <td><?= number_format($keupendapatan->pungutan_desa, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>1.1.6</td>
                <td>Lain-lain hasil pendapatan desa yang sah</td>
                <td><?= number_format($keupendapatan->pendesah, 0, ',', '.') ?></td>
              </tr>

              <tr>
                <td> <strong>1.2</strong> </td>
                <td colspan="2"> <strong>Pos Bagi Hasil</strong> </td>
              </tr>
              <tr>
                <td>1.2.1</td>
                <td>Bagi Hasil Pajak Daerah dan Retribusi</td>
                <td><?= number_format($keupendapatan->bahaspadar, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>1.2.2</td>
                <td>Bagian  Alokasi Dana Desa Pemerintah Pusat (APBN)</td>
                <td><?= number_format($keupendapatan->bapbn, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>1.2.3</td>
                <td>Alokasi Dana Desa (ADD) APBD</td>
                <td><?= number_format($keupendapatan->add_apbd, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>1.2.4</td>
                <td>Bantuan Keuangan Pemerintah Pusat</td>
                <td><?= number_format($keupendapatan->bkppus, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>1.2.5</td>
                <td>Bantuan Keuangan Pemerintah Propinsi</td>
                <td><?= number_format($keupendapatan->bkppro, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>1.2.6</td>
                <td>Bantuan Keuangan Pemerintah Kabupaten </td>
                <td><?= number_format($keupendapatan->bkpk, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td> <strong>1.3</strong> </td>
                <td> <strong>Pos Hibah</strong> </td>
                <td> <strong><?= number_format($keupendapatan->pos_hibah, 0, ',', '.') ?></strong> </td>
              </tr>
              <tr>
                <td> <strong>1.4</strong> </td>
                <td> <strong>Sumbangan Pihak Ketiga</strong> </td>
                <td> <strong><?= number_format($keupendapatan->sumpiket, 0, ',', '.') ?></strong> </td>
              </tr>
              <tr>
                <td colspan="2"> <strong>Jumlah Pendapatan</strong> </td>
                <td> <strong><?= number_format($keupendapatan->jum_pendapatan, 0, ',', '.') ?></strong> </td>
              </tr>
        </table>
				</div>
			</div>

		</div>
	</div>
