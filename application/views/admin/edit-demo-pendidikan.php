

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Pendidikan</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Pendidikan</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Edit Pendidikan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('pendidikan/patch') ?>" method="post">
              <?= validation_errors() ?>
						     <?= form_hidden('id_demo_pendidikan', $pendidikan->id_demo_pendidikan) ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $pendidikan->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Belum Tamat SD</label>
									<div class="col-md-9">
                    <input type="text" name="belum_tamat_sd" value="<?= $pendidikan->belum_tamat_sd ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">SD</label>
									<div class="col-md-9">
                    <input type="text" name="sd" value="<?= $pendidikan->sd ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">SLTP</label>
									<div class="col-md-9">
                    <input type="text" name="sltp" value="<?= $pendidikan->sltp ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">SLTA</label>
									<div class="col-md-9">
                    <input type="text" name="slta" value="<?= $pendidikan->slta ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Diploma/Sarjana</label>
									<div class="col-md-9">
                    <input type="text" name="diploma_sarjana" value="<?= $pendidikan->diploma_sarjana ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Total Pendidikan</label>
									<div class="col-md-9">
                    <input type="text" name="total_pendidikan" value="<?= $pendidikan->total_pendidikan ?>" class="form-control">
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
