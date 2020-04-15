
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Kesejateraan Keluarga</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kesejateraan Keluarga</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Kesejateraan Keluarga
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Pra-Sejahtera</th>
								<th>Sejahtera</th>
								<th>Kaya</th>
								<th>Sedang</th>
								<th>Miskin</th>
								<th>Total KK</th>
								<th>Tahun Anggaran</th>
                <?php if($this->session->has_userdata('admin')): ?>
                  <th>Action</th>
                <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($kesejahteraans as $kesejahteraan):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $kesejahteraan->pra_sejahtera ?></td>
								<td><?= $kesejahteraan->sejahtera ?></td>
								<td><?= $kesejahteraan->kaya ?></td>
								<td><?= $kesejahteraan->sedang ?></td>
								<td><?= $kesejahteraan->miskin ?></td>
								<td><?= $kesejahteraan->total_kk ?></td>
								<td><?= $kesejahteraan->tahun ?></td>
								<td>
                  <a href="<?= base_url('demo-kesejahteraan/'.$kesejahteraan->tahun) ?>" target="_blank" class="btn btn-primary pull-left" style="color:white;" >Detail</a>
                  <?php if($this->session->has_userdata('admin')): ?>
									 <a href="<?= base_url('kesejahteraan/edit/'.$kesejahteraan->id_demo_kesejahkk) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
									<form action="<?= base_url('kesejahteraan/delete') ?>" method="post">
                    <input type="hidden" name="id_demo_kesejahkk" value="<?= $kesejahteraan->id_demo_kesejahkk ?>">
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
						Kesejateraan Keluarga
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('kesejahteraan/post') ?>" method="post">
              <?= validation_errors() ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $input->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pra-Sejahtera</label>
									<div class="col-md-9">
                    <input type="text" name="pra_sejahtera" value="<?= $input->pra_sejahtera ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Sejahtera</label>
									<div class="col-md-9">
                    <input type="text" name="sejahtera" value="<?= $input->sejahtera ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Kaya</label>
									<div class="col-md-9">
                    <input type="text" name="kaya" value="<?= $input->kaya ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Sedang</label>
									<div class="col-md-9">
                    <input type="text" name="sedang" value="<?= $input->sedang ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Miskin</label>
									<div class="col-md-9">
                    <input type="text" name="miskin" value="<?= $input->miskin ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Total KK</label>
									<div class="col-md-9">
                    <input type="text" name="total_kk" value="<?= $input->total_kk ?>" class="form-control">
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
