
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Penduduk & Kepala Keluarga</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Penduduk & Kepala Keluarga</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Edit Penduduk & Kepala Keluarga
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('penduduk-kk/patch') ?>" method="post">
              <?= validation_errors() ?>
						     <?= form_hidden('id_demo_penkk', $penduduk->id_demo_penkk) ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $penduduk->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Laki-laki</label>
									<div class="col-md-9">
                    <input type="text" name="laki_laki" value="<?= $penduduk->laki_laki ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Laki-laki 0-15 Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="laki_015" value="<?= $penduduk->laki_015 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Laki-laki 16-55 Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="laki_1655" value="<?= $penduduk->laki_1655 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Laki-laki Diatas 55  Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="laki_diatas55" value="<?= $penduduk->laki_diatas55 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Perempuan</label>
									<div class="col-md-9">
                    <input type="text" name="perempuan" value="<?= $penduduk->perempuan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Perempuan 0-15 Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="perem_015" value="<?= $penduduk->perem_015 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Perempuan 16-55 Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="perem_1655" value="<?= $penduduk->perem_1655 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Perempuan Diatas 55 Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="perem_diatas55" value="<?= $penduduk->perem_diatas55 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Penduduk</label>
									<div class="col-md-9">
                    <input type="text" name="jum_pen" value="<?= $penduduk->jum_pen ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Kepala Keluarga</label>
									<div class="col-md-9">
                    <input type="text" name="jum_kk" value="<?= $penduduk->jum_kk ?>" class="form-control">
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
