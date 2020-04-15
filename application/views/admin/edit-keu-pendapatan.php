
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Pendapatan</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Pendapatan</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Edit Pendapatan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('pendapatan/patch') ?>" method="post">
              <?= validation_errors() ?>
						     <?= form_hidden('id_keu_pendapatan', $pendapatan->id_keu_pendapatan) ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $pendapatan->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hasil Usaha Desa</label>
									<div class="col-md-9">
                    <input type="text" name="hasil_usaha_desa" value="<?= $pendapatan->hasil_usaha_desa ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tanah Kas Desa</label>
									<div class="col-md-9">
                    <input type="text" name="tanah_kas_desa" value="<?= $pendapatan->tanah_kas_desa ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hasil Swadaya Masyarakat</label>
									<div class="col-md-9">
                    <input type="text" name="hasil_swamas" value="<?= $pendapatan->hasil_swamas ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hasil Partisipasi dan Gotong Royong</label>
									<div class="col-md-9">
                    <input type="text" name="hasil_pargoro" value="<?= $pendapatan->hasil_pargoro ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pungutan Desa</label>
									<div class="col-md-9">
                    <input type="text" name="pungutan_desa" value="<?= $pendapatan->pungutan_desa ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Lain-lain Pendapatan Asli Desa yang Sah</label>
									<div class="col-md-9">
                    <input type="text" name="pendesah" value="<?= $pendapatan->pendesah ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bagi Hasil Pajak Daerah dan Retribusi</label>
									<div class="col-md-9">
                    <input type="text" name="bahaspadar" value="<?= $pendapatan->bahaspadar ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bagian  Alokasi Dana Desa Pemerintah Pusat (APBN)</label>
									<div class="col-md-9">
                    <input type="text" name="bapbn" value="<?= $pendapatan->bapbn ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Alokasi Dana Desa (ADD) APBD</label>
									<div class="col-md-9">
                    <input type="text" name="add_apbd" value="<?= $pendapatan->add_apbd ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bantuan Keuangan Pemerintah Pusat</label>
									<div class="col-md-9">
                    <input type="text" name="bkppus" value="<?= $pendapatan->bkppus ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bantuan Keuangan Pemerintah Provinsi</label>
									<div class="col-md-9">
                    <input type="text" name="bkppro" value="<?= $pendapatan->bkppro ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Bantuan Keuangan Pemerintah Kabupaten</label>
									<div class="col-md-9">
                    <input type="text" name="bkpk" value="<?= $pendapatan->bkpk?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pos Hibah</label>
									<div class="col-md-9">
                    <input type="text" name="pos_hibah" value="<?= $pendapatan->pos_hibah ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Sumbangan Pihak Ketiga</label>
									<div class="col-md-9">
                    <input type="text" name="sumpiket" value="<?= $pendapatan->sumpiket ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Pendapatan </label>
									<div class="col-md-9">
                    <input type="text" name="jum_pendapatan" value="<?= $pendapatan->jum_pendapatan ?>" class="form-control">
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
