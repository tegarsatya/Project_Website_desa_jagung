
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Jenis Pekerjaan</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Jenis Pekerjaan</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Jenis Pekerjaan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Buruh Tani</th>
								<th>PNS</th>
								<th>Karyawan Swasta</th>
								<th>Total</th>
								<th>Tahun Anggaran</th>
              <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
              <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($pekerjaans as $pekerjaan):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $pekerjaan->buruh_tani ?></td>
								<td><?= $pekerjaan->pns ?></td>
								<td><?= $pekerjaan->karyawan_swasta ?></td>
								<td><?= $pekerjaan->total_pekerjaan ?></td>
								<td><?= $pekerjaan->tahun ?></td>
								<td>
                  <a href="<?= base_url('demo-pekerjaan/'.$pekerjaan->tahun) ?>" target="_blank" class="btn btn-primary pull-left" style="color:white;" >Detail</a>
                  <?php if($this->session->has_userdata('admin')): ?>
									<a href="<?= base_url('pekerjaan/edit/'.$pekerjaan->id_demo_pekerjaan) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
									<form action="<?= base_url('pekerjaan/delete') ?>" method="post">
                      <input type="hidden" name="id_demo_pekerjaan" value="<?= $pekerjaan->id_demo_pekerjaan ?>">
									    <button type="submit" class="btn btn-danger pull-left" style="color:white;">Hapus</button>
									</form>
                <?php endif ?>
								</td>
							</tr>
            <?php endforeach ?>
						</table>
					</div>
				</div>

        <?php if($this->session->has_userdata('admin')): ?>
				<div class="panel panel-default">
					<div class="panel-heading">
						Jenis Pekerjaan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('pekerjaan/post') ?>" method="post">
              <?= validation_errors() ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $input->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Buruh Tani</label>
									<div class="col-md-9">
                    <input type="text" name="buruh_tani" value="<?= $input->buruh_tani ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Buruh Harian Lepas</label>
									<div class="col-md-9">
                    <input type="text" name="buruh_harian_lepas" value="<?= $input->buruh_harian_lepas ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Petani</label>
									<div class="col-md-9">
                    <input type="text" name="petani" value="<?= $input->petani ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Peternak</label>
									<div class="col-md-9">
                    <input type="text" name="peternak" value="<?= $input->peternak ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pedagang</label>
									<div class="col-md-9">
                    <input type="text" name="pedagang" value="<?= $input->pedagang ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tukang Kayu</label>
									<div class="col-md-9">
                    <input type="text" name="tukang_kayu" value="<?= $input->tukang_kayu ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tukang Batu</label>
									<div class="col-md-9">
                    <input type="text" name="tukang_batu" value="<?= $input->tukang_batu ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Penjahit</label>
									<div class="col-md-9">
                    <input type="text" name="penjahit" value="<?= $input->penjahit ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">PNS</label>
									<div class="col-md-9">
                    <input type="text" name="pns" value="<?= $input->pns ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pensiunan</label>
									<div class="col-md-9">
                    <input type="text" name="pensiunan" value="<?= $input->pensiunan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">tni_polri</label>
									<div class="col-md-9">
                    <input type="text" name="tni_polri" value="<?= $input->tni_polri ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Perangkat Desa</label>
									<div class="col-md-9">
                    <input type="text" name="perangkat_desa" value="<?= $input->perangkat_desa ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Montir</label>
									<div class="col-md-9">
                    <input type="text" name="montir" value="<?= $input->montir ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pengusaha</label>
									<div class="col-md-9">
                    <input type="text" name="pengusaha" value="<?= $input->pengusaha ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tukang Gunting</label>
									<div class="col-md-9">
                    <input type="text" name="tukang_gunting" value="<?= $input->tukang_gunting ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Karyawan Swasta</label>
									<div class="col-md-9">
                    <input type="text" name="karyawan_swasta" value="<?= $input->karyawan_swasta ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Karyawan Honorer</label>
									<div class="col-md-9">
                    <input type="text" name="karyawan_honorer" value="<?= $input->karyawan_honorer ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Guru Honorer</label>
									<div class="col-md-9">
                    <input type="text" name="guru_honorer" value="<?= $input->guru_honorer ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Nelayan</label>
									<div class="col-md-9">
                    <input type="text" name="nelayan" value="<?= $input->nelayan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pedagang Keliling</label>
									<div class="col-md-9">
                    <input type="text" name="pedagang_keliling" value="<?= $input->pedagang_keliling ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bidan</label>
									<div class="col-md-9">
                    <input type="text" name="bidan" value="<?= $input->bidan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pembantu RT</label>
									<div class="col-md-9">
                    <input type="text" name="pembantu_rt" value="<?= $input->pembantu_rt ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Dukun Kampung Terlatih</label>
									<div class="col-md-9">
                    <input type="text" name="dukun_kampung_terlatih" value="<?= $input->dukun_kampung_terlatih ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Dosen Swasta</label>
									<div class="col-md-9">
                    <input type="text" name="dosen_swasta" value="<?= $input->dosen_swasta ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Sopir</label>
									<div class="col-md-9">
                    <input type="text" name="sopir" value="<?= $input->sopir ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Koki</label>
									<div class="col-md-9">
                    <input type="text" name="koki" value="<?= $input->koki ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pengemudi Bentor</label>
									<div class="col-md-9">
                    <input type="text" name="pengemudi_bentor" value="<?= $input->pengemudi_bentor ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Konsultan</label>
									<div class="col-md-9">
                    <input type="text" name="konsultan" value="<?= $input->konsultan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Wiraswasta</label>
									<div class="col-md-9">
                    <input type="text" name="wiraswasta" value="<?= $input->wiraswasta ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Penata Rias</label>
									<div class="col-md-9">
                    <input type="text" name="penata_rias" value="<?= $input->penata_rias ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Total Pekerjaan</label>
									<div class="col-md-9">
                    <input type="text" name="total_pekerjaan" value="<?= $input->total_pekerjaan ?>" class="form-control">
									</div>
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
                      <button type="submit" class="btn btn-default btn-md pull-right">Tambah</button>
									</div>
								</div>
            </form>
					</div>
				</div>
      <?php endif ?>
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
