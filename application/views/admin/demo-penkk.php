
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Penduduk & Kepala Keluarga</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Penduduk & Kepala Keluarga</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Penduduk & Kepala Keluarga
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Laki-laki</th>
								<th>Perempuan</th>
								<th>Jumlah Penduduk</th>
								<th>Jumlah KK</th>
								<th>Tahun Anggaran</th>
              <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
              <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($penduduks as $penduduk):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $penduduk->laki_laki ?></td>
								<td><?= $penduduk->perempuan ?></td>
								<td><?= $penduduk->jum_pen ?></td>
								<td><?= $penduduk->jum_kk ?></td>
								<td><?= $penduduk->tahun ?></td>
								<td>
                  <a href="<?= base_url('demo-penduduk/'.$penduduk->tahun) ?>" target="_blank" class="btn btn-primary pull-left" style="color:white;" >Detail</a>
                  <?php if($this->session->has_userdata('admin')): ?>
									 <a href="<?= base_url('penduduk-kk/edit/'.$penduduk->id_demo_penkk) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
									<form action="<?= base_url('penduduk-kk/delete') ?>" method="post">
                    <input type="hidden" name="id_demo_penkk" value="<?= $penduduk->id_demo_penkk ?>">
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
						Penduduk & Kepala Keluarga
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('penduduk-kk/post') ?>" method="post">
              <?= validation_errors() ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $input->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Laki-laki</label>
									<div class="col-md-9">
                    <input type="text" name="laki_laki" value="<?= $input->laki_laki ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Laki-laki 0-15 Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="laki_015" value="<?= $input->laki_015 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Laki-laki 16-55 Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="laki_1655" value="<?= $input->laki_1655 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Laki-laki Diatas 55  Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="laki_diatas55" value="<?= $input->laki_diatas55 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Perempuan</label>
									<div class="col-md-9">
                    <input type="text" name="perempuan" value="<?= $input->perempuan ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Perempuan 0-15 Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="perem_015" value="<?= $input->perem_015 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Perempuan 16-55 Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="perem_1655" value="<?= $input->perem_1655 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Perempuan Diatas 55 Tahun</label>
									<div class="col-md-9">
                    <input type="text" name="perem_diatas55" value="<?= $input->perem_diatas55 ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Penduduk</label>
									<div class="col-md-9">
                    <input type="text" name="jum_pen" value="<?= $input->jum_pen ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Kepala Keluarga</label>
									<div class="col-md-9">
                    <input type="text" name="jum_kk" value="<?= $input->jum_kk ?>" class="form-control">
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
