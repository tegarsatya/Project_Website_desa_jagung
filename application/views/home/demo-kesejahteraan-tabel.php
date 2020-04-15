<div class="features">
		<div class="container">

      <h2 class="text-center">Demografis Tahun <?= $demokesejahteraan->tahun ?></h2>

      <div class="text-center tabel-web">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h3>Menurut Jenis Kesejahteraan Keluarga</h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <table class="table table-hover">
              <tr>
                <td> <strong>No</strong> </td>
                <td> <strong>Kesejahteraan</strong> </td>
                <td> <strong>Jumlah</strong> </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Pra Sejahtera</td>
                <td><?= number_format($demokesejahteraan->pra_sejahtera, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Sejahtera</td>
                <td><?= number_format($demokesejahteraan->sejahtera, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Kaya</td>
                <td><?= number_format($demokesejahteraan->kaya, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Sedang</td>
                <td><?= number_format($demokesejahteraan->sedang, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Miskin</td>
                <td><?= number_format($demokesejahteraan->miskin, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td colspan="2"> <strong>Total Kepala Keluarga</strong> </td>
                <td> <strong><?= number_format($demokesejahteraan->total_kk, 0, ',', '.') ?></strong> </td>
              </tr>
          </table>
				</div>
			</div>

		</div>
	</div>
