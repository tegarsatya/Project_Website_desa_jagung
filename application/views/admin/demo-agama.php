
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Agama</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Agama</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Agama
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Islam</th>
								<th>Kristen Protestan</th>
								<th>Budha</th>
								<th>Hindu</th>
								<th>Katolik</th>
								<th>Total Agama</th>
								<th>Tahun Anggaran</th>
              <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
              <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($agamas as $agama):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $agama->islam ?></td>
								<td><?= $agama->kristen_protestan ?></td>
								<td><?= $agama->budha ?></td>
								<td><?= $agama->hindu ?></td>
								<td><?= $agama->katolik ?></td>
								<td><?= $agama->total_agama ?></td>
								<td><?= $agama->tahun ?></td>
								<td>
                  <?php if($this->session->has_userdata('admin')): ?>
									<a href="<?= base_url('agama/edit/'.$agama->id_demo_agama) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
									<form action="<?= base_url('agama/delete') ?>" method="post">
                    <input type="hidden" name="id_demo_agama" value="<?= $agama->id_demo_agama ?>">
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
						Agama
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('agama/post') ?>" method="post">
              <?= validation_errors() ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $input->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Islam</label>
									<div class="col-md-9">
                    <input type="text" name="islam" value="<?= $input->islam ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Kristen Protestan</label>
									<div class="col-md-9">
                    <input type="text" name="kristen_protestan" value="<?= $input->kristen_protestan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Budha</label>
									<div class="col-md-9">
                    <input type="text" name="budha" value="<?= $input->budha ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hindu</label>
									<div class="col-md-9">
                    <input type="text" name="hindu" value="<?= $input->hindu ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Katolik</label>
									<div class="col-md-9">
                    <input type="text" name="katolik" value="<?= $input->katolik ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Total Agama</label>
									<div class="col-md-9">
                    <input type="text" name="total_agama" value="<?= $input->total_agama ?>" class="form-control">
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
