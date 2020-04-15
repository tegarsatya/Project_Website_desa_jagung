
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Belanja</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Belanja</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Belanja
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Total APBD</th>
								<th>Jumlah Belanja</th>
								<th>Tahun Anggaran</th>
              <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
              <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($belanjas as $belanja):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $belanja->apbd_total ?></td>
								<td><?= $belanja->jumlah_belanja ?></td>
								<td><?= $belanja->tahun ?></td>
								<td>
                  <a href="<?= base_url('keu-belanja/'.$belanja->tahun) ?>" target="_blank" class="btn btn-primary pull-left" style="color:white;">Detail</a>
                  <?php if($this->session->has_userdata('admin')): ?>
									<a href="<?= base_url('belanja/edit/'.$belanja->id_keu_belanja) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
									<form action="<?= base_url('belanja/delete') ?>" method="post">
                    <input type="hidden" name="id_keu_belanja" value="<?= $belanja->id_keu_belanja ?>">
									  <button type="submit" class="btn btn-danger pull-left" style="color:white;">Hapus</button>
									</form>
								</td>
              <?php endif ?>
							</tr>
            <?php endforeach ?>
						</table>
					</div>
				</div>

        <?php if($this->session->has_userdata('admin')): ?>
				<div class="panel panel-default">
					<div class="panel-heading">
						Belanja
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('belanja/post') ?>" method="post">
              <?= validation_errors() ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $input->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBD - Belanja Pegawai</label>
									<div class="col-md-9">
                    <input type="text" name="apbd_belanja_pegawai" value="<?= $input->apbd_belanja_pegawai ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBD - Belanja Barang & Jasa</label>
									<div class="col-md-9">
                    <input type="text" name="apbd_belanja_bajas" value="<?= $input->apbd_belanja_bajas ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBD - Belanja Modal</label>
									<div class="col-md-9">
                    <input type="text" name="apbd_belanja_modal" value="<?= $input->apbd_belanja_modal ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Total APBD</label>
									<div class="col-md-9">
                    <input type="text" name="apbd_total" value="<?= $input->apbd_total ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBN - Belanja Pegawai</label>
									<div class="col-md-9">
                    <input type="text" name="apbn_belanja_pegawai" value="<?= $input->apbn_belanja_pegawai ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBN - Belanja Barang & Jasa</label>
									<div class="col-md-9">
                    <input type="text" name="apbn_belanja_bajas" value="<?= $input->apbn_belanja_bajas ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">APBN - Belanja Modal</label>
									<div class="col-md-9">
                    <input type="text" name="apbn_belanja_modal" value="<?= $input->apbn_belanja_modal ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Belanja</label>
									<div class="col-md-9">
                    <input type="text" name="jumlah_belanja" value="<?= $input->jumlah_belanja ?>" class="form-control">
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
