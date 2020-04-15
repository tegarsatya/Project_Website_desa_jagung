
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Kesejateraan Keluarga</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Kesejateraan Keluarga</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Edit Kesejateraan Keluarga
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('kesejahteraan/patch') ?>" method="post">
              <?= validation_errors() ?>
						     <?= form_hidden('id_demo_kesejahkk', $kesejahteraan->id_demo_kesejahkk) ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $kesejahteraan->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pra-Sejahtera</label>
									<div class="col-md-9">
                    <input type="text" name="pra_sejahtera" value="<?= $kesejahteraan->pra_sejahtera ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Sejahtera</label>
									<div class="col-md-9">
                    <input type="text" name="sejahtera" value="<?= $kesejahteraan->sejahtera ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Kaya</label>
									<div class="col-md-9">
                    <input type="text" name="kaya" value="<?= $kesejahteraan->kaya ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Sedang</label>
									<div class="col-md-9">
                    <input type="text" name="sedang" value="<?= $kesejahteraan->sedang ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Miskin</label>
									<div class="col-md-9">
                    <input type="text" name="miskin" value="<?= $kesejahteraan->miskin ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Total KK</label>
									<div class="col-md-9">
                    <input type="text" name="total_kk" value="<?= $kesejahteraan->total_kk ?>" class="form-control">
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
