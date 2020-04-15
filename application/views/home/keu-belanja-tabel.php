<div class="features">
		<div class="container">

      <h2 class="text-center">Kebijakan Keuangan Desa Tahun <?= $keubelanja->tahun ?></h2>

      <div class="text-center tabel-web">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h3>RENCANA ANGGARAN BELANJA DESA <br>
            ALOKASI DANA DESA ( APBD ) </h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <table class="table table-hover">
              <tr>
                <td> <strong>No</strong> </td>
                <td> <strong>Uraian Belanja</strong> </td>
                <td> <strong>Jumlah (Rp.)</strong> </td>
              </tr>
              <tr>
                <td> <strong>1.1.</strong> </td>
                <td colspan="2"> <strong>Belanja Alokasi Dana Desa ( APBD )</strong> </td>
              </tr>
              <tr>
                <td> 1.1.1 </td>
                <td> Belanja Pegawai </td>
                <td> <?= number_format($keubelanja->apbd_belanja_pegawai, 0, ',', '.') ?> </td>
              </tr>
              <tr>
                <td> 1.1.2 </td>
                <td> Belanja Barang dan Jasa </td>
                <td> <?= number_format($keubelanja->apbd_belanja_bajas, 0, ',', '.') ?> </td>
              </tr>
              <tr>
                <td> 1.1.3 </td>
                <td> Belanja Modal </td>
                <td> <?= number_format($keubelanja->apbd_belanja_modal, 0, ',', '.') ?> </td>
              </tr>
              <tr>
                <td colspan="2"> <strong>Total</strong> </td>
                <td> <strong><?= number_format($keubelanja->apbd_total, 0, ',', '.') ?></strong> </td>
              </tr>

              <tr>
                <td> <strong>1.2</strong> </td>
                <td colspan="2"> <strong>Belanja Dana Desa (APBN)</strong> </td>
              </tr>
              <tr>
                <td> 1.2.1 </td>
                <td>Belanja Pegawai </td>
                <td><?= number_format($keubelanja->apbn_belanja_pegawai, 0, ',', '.') ?> </td>
              </tr>
              <tr>
                <td> 1.2.2 </td>
                <td>Belanja Barang dan Jasa </td>
                <td><?= number_format($keubelanja->apbn_belanja_bajas, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td> 1.2.3 </td>
                <td>Belanja Modal </td>
                <td><?= number_format($keubelanja->apbn_belanja_modal, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td colspan="2"> <strong>Jumlah Belanja</strong> </td>
                <td> <strong><?= number_format($keubelanja->jumlah_belanja, 0, ',', '.') ?></strong> </td>
              </tr>
          </table>
				</div>
			</div>

		</div>
	</div>
