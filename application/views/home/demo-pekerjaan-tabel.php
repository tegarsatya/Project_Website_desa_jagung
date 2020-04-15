<div class="features">
		<div class="container">

      <h2 class="text-center">Demografis Tahun <?= $demopekerjaan->tahun ?></h2>

      <div class="text-center tabel-web">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h3>Menurut Jenis Pekerjaan</h3>
				</div>
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <table class="table table-hover">
              <tr>
                <td> <strong>No</strong> </td>
                <td> <strong>Pekerjaan</strong> </td>
                <td> <strong>Jumlah</strong> </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Buruh Tani</td>
                <td><?= number_format($demopekerjaan->buruh_tani, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Buruh Harian Lepas</td>
                <td><?= number_format($demopekerjaan->buruh_harian_lepas, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Petani</td>
                <td><?= number_format($demopekerjaan->petani, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Peternak</td>
                <td><?= number_format($demopekerjaan->peternak, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Pedagang</td>
                <td><?= number_format($demopekerjaan->pedagang, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>6</td>
                <td>Tukang Kayu</td>
                <td><?= number_format($demopekerjaan->tukang_kayu, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>7</td>
                <td>Tukang Batu</td>
                <td><?= number_format($demopekerjaan->tukang_batu, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>8</td>
                <td>Penjahit</td>
                <td><?= number_format($demopekerjaan->penjahit, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>9</td>
                <td>PNS</td>
                <td><?= number_format($demopekerjaan->pns, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>10</td>
                <td>Pensiunan</td>
                <td><?= number_format($demopekerjaan->pensiunan, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>11</td>
                <td>TNI/Polri</td>
                <td><?= number_format($demopekerjaan->tni_polri, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>12</td>
                <td>Perangkat Desa</td>
                <td><?= number_format($demopekerjaan->perangkat_desa, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>13</td>
                <td>Montir</td>
                <td><?= number_format($demopekerjaan->montir, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>14</td>
                <td>Pengusaha</td>
                <td><?= number_format($demopekerjaan->pengusaha, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>15</td>
                <td>Tukang Gunting</td>
                <td><?= number_format($demopekerjaan->tukang_gunting, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>16</td>
                <td>Karyawan Swasta</td>
                <td><?= number_format($demopekerjaan->karyawan_swasta, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>17</td>
                <td>Kayawan Honorer</td>
                <td><?= number_format($demopekerjaan->karyawan_honorer, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>18</td>
                <td>Guru Honorer</td>
                <td><?= number_format($demopekerjaan->guru_honorer, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>19</td>
                <td>Nelayan</td>
                <td><?= number_format($demopekerjaan->nelayan, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>20</td>
                <td>Pedagang Keliling</td>
                <td><?= number_format($demopekerjaan->pedagang_keliling, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>21</td>
                <td>Bidan</td>
                <td><?= number_format($demopekerjaan->bidan, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>22</td>
                <td>Pembantu RT</td>
                <td><?= number_format($demopekerjaan->pembantu_rt, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>23</td>
                <td>Dukun Kampung Terlatih</td>
                <td><?= number_format($demopekerjaan->dukun_kampung_terlatih, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>24</td>
                <td>Dosen Swasta</td>
                <td><?= number_format($demopekerjaan->dosen_swasta, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>25</td>
                <td>Sopir</td>
                <td><?= number_format($demopekerjaan->sopir, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>26</td>
                <td>Koki</td>
                <td><?= number_format($demopekerjaan->koki, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>27</td>
                <td>Pengemudi Bentor</td>
                <td><?= number_format($demopekerjaan->pengemudi_bentor, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>28</td>
                <td>Konsultan</td>
                <td><?= number_format($demopekerjaan->konsultan, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>29</td>
                <td>Wiraswasta</td>
                <td><?= number_format($demopekerjaan->wiraswasta, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td>30</td>
                <td>Penata Rias</td>
                <td><?= number_format($demopekerjaan->penata_rias, 0, ',', '.') ?></td>
              </tr>
              <tr>
                <td colspan="2"> <strong>Total Pekerjaan</strong> </td>
                <td> <strong><?= number_format($demopekerjaan->total_pekerjaan, 0, ',', '.') ?></strong> </td>
              </tr>
          </table>
				</div>
			</div>

		</div>
	</div>
