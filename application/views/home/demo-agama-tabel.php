<div class="features">
		<div class="container">

      <h2 class="text-center">Demografis Tahun <?= $demoagama->tahun ?></h2>

      <div class="text-center tabel-web">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h3>Menurut Agama Yang Dianut</h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <table class="table table-hover">
              <tr>
                <td> <strong>No</strong> </td>
                <td> <strong>Agama</strong> </td>
                <td> <strong>Jumlah</strong> </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Islam</td>
                <td><?= number_format($demoagama->islam, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Kristen Protestan</td>
                <td><?= number_format($demoagama->kristen_protestan, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Budha</td>
                <td><?= number_format($demoagama->budha, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Hindu</td>
                <td><?= number_format($demoagama->hindu, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Katolik</td>
                <td><?= number_format($demoagama->katolik, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td colspan="2"> <strong>Total</strong> </td>
                <td> <strong><?= number_format($demoagama->total_agama, 0, ',', '.') ?></strong> </td>
              </tr>
          </table>
				</div>
			</div>

		</div>
	</div>
