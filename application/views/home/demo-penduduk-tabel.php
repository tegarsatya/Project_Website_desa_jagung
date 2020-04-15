<div class="features">
		<div class="container">

      <h2 class="text-center">Demografis Tahun <?= $demopenduduk->tahun ?></h2>

			<div class="text-center tabel-web">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h3>Jumlah Penduduk dan Kepala Keluarga Desa Jagung</h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <table class="table table-hover">
              <tr>
                <td> <strong>No</strong> </td>
                <td> <strong>Tingkat Penduduk</strong> </td>
                <td> <strong>Jumlah Jiwa</strong> </td>
              </tr>
            <tr>
              <td> <strong>1</strong> </td>
              <td> <strong>Laki-laki</strong> </td>
              <td><?= number_format($demopenduduk->laki_laki, 0, ',', '.') ?></td>
            </tr>
            <tr>
              <td>a</td>
              <td>0-15 Tahun</td>
              <td><?= number_format($demopenduduk->laki_015, 0, ',', '.') ?></td>
            </tr>
            <tr>
              <td>b</td>
              <td>16-55 Tahun</td>
              <td><?= number_format($demopenduduk->laki_1655, 0, ',', '.') ?></td>
            </tr>
            <tr>
              <td>c</td>
              <td>Diatas 55 Tahun</td>
              <td><?= number_format($demopenduduk->laki_diatas55, 0, ',', '.') ?></td>
            </tr>

            <tr>
              <td> <strong>2</strong> </td>
              <td> <strong>Perempuan</strong> </td>
              <td><?= number_format($demopenduduk->perempuan, 0, ',', '.') ?></td>
            </tr>
            <tr>
              <td>a</td>
              <td>0-15 Tahun</td>
              <td><?= number_format($demopenduduk->perem_015, 0, ',', '.') ?></td>
            </tr>
            <tr>
              <td>b</td>
              <td>16-55 Tahun</td>
              <td><?= number_format($demopenduduk->perem_1655, 0, ',', '.') ?></td>
            </tr>
            <tr>
              <td>c</td>
              <td>Diatas 55 Tahun</td>
              <td><?= number_format($demopenduduk->perem_diatas55, 0, ',', '.') ?></td>
            </tr>

            <tr>
              <td> <strong>3</strong> </td>
              <td> <strong>Jumlah Penduduk</strong> </td>
              <td><?= number_format($demopenduduk->jum_pen, 0, ',', '.') ?></td>
            </tr>

            <tr>
              <td> <strong>4</strong> </td>
              <td> <strong>Jumlah KK</strong> </td>
              <td><?= number_format($demopenduduk->jum_kk, 0, ',', '.') ?></td>
            </tr>
        </table>
				</div>
			</div>

		</div>
	</div>
