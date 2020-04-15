
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Pendapatan</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pendapatan</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Pendapatan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Pos Hibah</th>
								<th>Sumbangan Pihak Ketiga</th>
								<th>Jumlah Pendapatan</th>
								<th>Tahun Anggaran</th>
              <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
              <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($pendapatans as $pendapatan):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $pendapatan->pos_hibah ?></td>
								<td><?= $pendapatan->sumpiket ?></td>
								<td><?= $pendapatan->jum_pendapatan ?></td>
								<td><?= $pendapatan->tahun ?></td>
								<td>
                  <a href="<?= base_url('keu-pendapatan/'.$pendapatan->tahun) ?>" target="_blank" class="btn btn-primary pull-left" style="color:white;">Detail</a>
                  <?php if($this->session->has_userdata('admin')): ?>
									<a href="<?= base_url('pendapatan/edit/'.$pendapatan->id_keu_pendapatan) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
									<form action="<?= base_url('pendapatan/delete') ?>" method="post">
                      <input type="hidden" name="id_keu_pendapatan" value="<?= $pendapatan->id_keu_pendapatan ?>">
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
						Pendapatan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('pendapatan/post') ?>" method="post">
              <?= validation_errors() ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $input->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hasil Usaha Desa</label>
									<div class="col-md-9">
                    <input type="text" name="hasil_usaha_desa" value="<?= $input->hasil_usaha_desa ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tanah Kas Desa</label>
									<div class="col-md-9">
                    <input type="text" name="tanah_kas_desa" value="<?= $input->tanah_kas_desa ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hasil Swadaya Masyarakat</label>
									<div class="col-md-9">
                    <input type="text" name="hasil_swamas" value="<?= $input->hasil_swamas ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hasil Partisipasi dan Gotong Royong</label>
									<div class="col-md-9">
                    <input type="text" name="hasil_pargoro" value="<?= $input->hasil_pargoro ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pungutan Desa</label>
									<div class="col-md-9">
                    <input type="text" name="pungutan_desa" value="<?= $input->pungutan_desa ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Lain-lain Pendapatan Asli Desa yang Sah</label>
									<div class="col-md-9">
                    <input type="text" name="pendesah" value="<?= $input->pendesah ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bagi Hasil Pajak Daerah dan Retribusi</label>
									<div class="col-md-9">
                    <input type="text" name="bahaspadar" value="<?= $input->bahaspadar ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bagian  Alokasi Dana Desa Pemerintah Pusat (APBN)</label>
									<div class="col-md-9">
                    <input type="text" name="bapbn" value="<?= $input->bapbn ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Alokasi Dana Desa (ADD) APBD</label>
									<div class="col-md-9">
                    <input type="text" name="add_apbd" value="<?= $input->add_apbd ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bantuan Keuangan Pemerintah Pusat</label>
									<div class="col-md-9">
                    <input type="text" name="bkppus" value="<?= $input->bkppus ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bantuan Keuangan Pemerintah Provinsi</label>
									<div class="col-md-9">
                    <input type="text" name="bkppro" value="<?= $input->bkppro ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bantuan Keuangan Pemerintah Kabupaten</label>
									<div class="col-md-9">
                    <input type="text" name="bkpk" value="<?= $input->bkpk ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pos Hibah</label>
									<div class="col-md-9">
                    <input type="text" name="pos_hibah" value="<?= $input->pos_hibah ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Sumbangan Pihak Ketiga</label>
									<div class="col-md-9">
                    <input type="text" name="sumpiket" value="<?= $input->sumpiket ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Pendapatan </label>
									<div class="col-md-9">
                    <input type="text" name="jum_pendapatan" value="<?= $input->jum_pendapatan ?>" class="form-control">
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
