<div class="features">
		<div class="container">

      <h2 class="text-center">Demografis Tahun <?= $demopendidikan->tahun ?></h2>

      <div class="text-center tabel-web">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h3>Menurut Tingkat Pendidikan</h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <table class="table table-hover">
              <tr>
                <td> <strong>No</strong> </td>
                <td> <strong>Pendidikan</strong> </td>
                <td> <strong>Jumlah</strong> </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Belum Tamat SD/Sederajat</td>
                <td><?= number_format($demopendidikan->belum_tamat_sd, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>2</td>
                <td>SD/Sederajat</td>
                <td><?= number_format($demopendidikan->sd, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>3</td>
                <td>SLTP/Sederajat</td>
                <td><?= number_format($demopendidikan->sltp, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>4</td>
                <td>SLTA/Sederajat</td>
                <td><?= number_format($demopendidikan->slta, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Diploma/Sarjana</td>
                <td><?= number_format($demopendidikan->diploma_sarjana, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td colspan="2"> <strong>Total</strong> </td>
                <td> <strong><?= number_format($demopendidikan->total_pendidikan, 0, ',', '.') ?></strong> </td>
              </tr>
          </table>
				</div>
			</div>

		</div>
	</div>
