
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Jenis Pekerjaan</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Jenis Pekerjaan</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Edit Jenis Pekerjaan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('pekerjaan/patch') ?>" method="post">
              <?= validation_errors() ?>
						     <?= form_hidden('id_demo_pekerjaan', $pekerjaan->id_demo_pekerjaan) ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $pekerjaan->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Buruh Tani</label>
									<div class="col-md-9">
                    <input type="text" name="buruh_tani" value="<?= $pekerjaan->buruh_tani ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Buruh Harian Lepas</label>
									<div class="col-md-9">
                    <input type="text" name="buruh_harian_lepas" value="<?= $pekerjaan->buruh_harian_lepas ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Petani</label>
									<div class="col-md-9">
                    <input type="text" name="petani" value="<?= $pekerjaan->petani ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Peternak</label>
									<div class="col-md-9">
                    <input type="text" name="peternak" value="<?= $pekerjaan->peternak ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pedagang</label>
									<div class="col-md-9">
                    <input type="text" name="pedagang" value="<?= $pekerjaan->pedagang ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tukang Kayu</label>
									<div class="col-md-9">
                    <input type="text" name="tukang_kayu" value="<?= $pekerjaan->tukang_kayu ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tukang Batu</label>
									<div class="col-md-9">
                    <input type="text" name="tukang_batu" value="<?= $pekerjaan->tukang_batu ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Penjahit</label>
									<div class="col-md-9">
                    <input type="text" name="penjahit" value="<?= $pekerjaan->penjahit ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">PNS</label>
									<div class="col-md-9">
                    <input type="text" name="pns" value="<?= $pekerjaan->pns ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pensiunan</label>
									<div class="col-md-9">
                    <input type="text" name="pensiunan" value="<?= $pekerjaan->pensiunan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">tni_polri</label>
									<div class="col-md-9">
                    <input type="text" name="tni_polri" value="<?= $pekerjaan->tni_polri ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Perangkat Desa</label>
									<div class="col-md-9">
                    <input type="text" name="perangkat_desa" value="<?= $pekerjaan->perangkat_desa ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Montir</label>
									<div class="col-md-9">
                    <input type="text" name="montir" value="<?= $pekerjaan->montir ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pengusaha</label>
									<div class="col-md-9">
                    <input type="text" name="pengusaha" value="<?= $pekerjaan->pengusaha ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tukang Gunting</label>
									<div class="col-md-9">
                    <input type="text" name="tukang_gunting" value="<?= $pekerjaan->tukang_gunting ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Karyawan Swasta</label>
									<div class="col-md-9">
                    <input type="text" name="karyawan_swasta" value="<?= $pekerjaan->karyawan_swasta ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Karyawan Honorer</label>
									<div class="col-md-9">
                    <input type="text" name="karyawan_honorer" value="<?= $pekerjaan->karyawan_honorer ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Guru Honorer</label>
									<div class="col-md-9">
                    <input type="text" name="guru_honorer" value="<?= $pekerjaan->guru_honorer ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Nelayan</label>
									<div class="col-md-9">
                    <input type="text" name="nelayan" value="<?= $pekerjaan->nelayan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pedagang Keliling</label>
									<div class="col-md-9">
                    <input type="text" name="pedagang_keliling" value="<?= $pekerjaan->pedagang_keliling ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bidan</label>
									<div class="col-md-9">
                    <input type="text" name="bidan" value="<?= $pekerjaan->bidan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pembantu RT</label>
									<div class="col-md-9">
                    <input type="text" name="pembantu_rt" value="<?= $pekerjaan->pembantu_rt ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Dukun Kampung Terlatih</label>
									<div class="col-md-9">
                    <input type="text" name="dukun_kampung_terlatih" value="<?= $pekerjaan->dukun_kampung_terlatih ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Dosen Swasta</label>
									<div class="col-md-9">
                    <input type="text" name="dosen_swasta" value="<?= $pekerjaan->dosen_swasta ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Sopir</label>
									<div class="col-md-9">
                    <input type="text" name="sopir" value="<?= $pekerjaan->sopir ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Koki</label>
									<div class="col-md-9">
                    <input type="text" name="koki" value="<?= $pekerjaan->koki ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pengemudi Bentor</label>
									<div class="col-md-9">
                    <input type="text" name="pengemudi_bentor" value="<?= $pekerjaan->pengemudi_bentor ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Konsultan</label>
									<div class="col-md-9">
                    <input type="text" name="konsultan" value="<?= $pekerjaan->konsultan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Wiraswasta</label>
									<div class="col-md-9">
                    <input type="text" name="wiraswasta" value="<?= $pekerjaan->wiraswasta ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Penata Rias</label>
									<div class="col-md-9">
                    <input type="text" name="penata_rias" value="<?= $pekerjaan->penata_rias ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Total Pekerjaan</label>
									<div class="col-md-9">
                    <input type="text" name="total_pekerjaan" value="<?= $pekerjaan->total_pekerjaan ?>" class="form-control">
									</div>
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
                      <button type="submit" class="btn btn-default btn-md pull-right">Edit</button>
									</div>
								</div>
            </form>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
