

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Pendidikan</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pendidikan</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Pendidikan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Belum Tamat SD</th>
								<th>SD</th>
								<th>SLTP</th>
								<th>SLTA</th>
								<th>Diploma / Sarjana</th>
								<th>Total Pendidikan</th>
								<th>Tahun Anggaran</th>
              <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
              <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($pendidikans as $pendidikan):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $pendidikan->belum_tamat_sd ?></td>
								<td><?= $pendidikan->sd ?></td>
								<td><?= $pendidikan->sltp ?></td>
								<td><?= $pendidikan->slta ?></td>
								<td><?= $pendidikan->diploma_sarjana ?></td>
								<td><?= $pendidikan->total_pendidikan ?></td>
								<td><?= $pendidikan->tahun ?></td>
								<td>
                  <?php if($this->session->has_userdata('admin')): ?>
									<a href="<?= base_url('pendidikan/edit/'.$pendidikan->id_demo_pendidikan) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
									<form action="<?= base_url('pendidikan/delete') ?>" method="post">
                    <input type="hidden" name="id_demo_pendidikan" value="<?= $pendidikan->id_demo_pendidikan ?>">
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
						Pendidikan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('pendidikan/post') ?>" method="post">
              <?= validation_errors() ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $input->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Belum Tamat SD</label>
									<div class="col-md-9">
                    <input type="text" name="belum_tamat_sd" value="<?= $input->belum_tamat_sd ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">SD</label>
									<div class="col-md-9">
                    <input type="text" name="sd" value="<?= $input->sd ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">SLTP</label>
									<div class="col-md-9">
                    <input type="text" name="sltp" value="<?= $input->sltp ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">SLTA</label>
									<div class="col-md-9">
                    <input type="text" name="slta" value="<?= $input->slta ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Diploma/Sarjana</label>
									<div class="col-md-9">
                    <input type="text" name="diploma_sarjana" value="<?= $input->diploma_sarjana ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Total Pendidikan</label>
									<div class="col-md-9">
                    <input type="text" name="total_pendidikan" value="<?= $input->total_pendidikan ?>" class="form-control">
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
