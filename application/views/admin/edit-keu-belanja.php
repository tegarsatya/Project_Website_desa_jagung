
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Belanja</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Belanja</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Edit Belanja
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('belanja/patch') ?>" method="post">
              <?= validation_errors() ?>
						     <?= form_hidden('id_keu_belanja', $belanja->id_keu_belanja) ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $belanja->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBD - Belanja Pegawai</label>
									<div class="col-md-9">
                    <input type="text" name="apbd_belanja_pegawai" value="<?= $belanja->apbd_belanja_pegawai ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBD - Belanja Barang & Jasa</label>
									<div class="col-md-9">
                    <input type="text" name="apbd_belanja_bajas" value="<?= $belanja->apbd_belanja_bajas ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBD - Belanja Modal</label>
									<div class="col-md-9">
                    <input type="text" name="apbd_belanja_modal" value="<?= $belanja->apbd_belanja_modal ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Total APBD</label>
									<div class="col-md-9">
                    <input type="text" name="apbd_total" value="<?= $belanja->apbd_total ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBN - Belanja Pegawai</label>
									<div class="col-md-9">
                    <input type="text" name="apbn_belanja_pegawai" value="<?= $belanja->apbn_belanja_pegawai ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBN - Belanja Barang & Jasa</label>
									<div class="col-md-9">
                    <input type="text" name="apbn_belanja_bajas" value="<?= $belanja->apbn_belanja_bajas ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBN - Belanja Modal</label>
									<div class="col-md-9">
                    <input type="text" name="apbn_belanja_modal" value="<?= $belanja->apbn_belanja_modal ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Belanja</label>
									<div class="col-md-9">
                    <input type="text" name="jumlah_belanja" value="<?= $belanja->jumlah_belanja ?>" class="form-control">
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
