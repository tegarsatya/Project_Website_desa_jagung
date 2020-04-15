
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Struktur Desa</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Struktur Desa</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Struktur Desa
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Gambar Struktur</th>
								<th>Tahun Anggaran</th>
              <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
              <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($strukdess as $strukdes):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $strukdes->gambar_struktur_desa ?></td>
								<td><?= $strukdes->tahun ?></td>
								<td>
                  <a href="<?= base_url('struktur-desa/'.$strukdes->tahun) ?>" target="_blank" class="btn btn-primary pull-left" style="color:white;">Detail</a>
                  <?php if($this->session->has_userdata('admin')): ?>
									<a href="<?= base_url('struktur-desa-admin/edit/'.$strukdes->id_struktur_desa) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
									<form action="<?= base_url('struktur-desa-admin/delete') ?>" method="post">
                    <input type="hidden" name="id_struktur_desa" value="<?= $strukdes->id_struktur_desa ?>">
                    <input type="hidden" name="gambar_struktur_desa" value="<?= $strukdes->gambar_struktur_desa ?>">
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
						Struktur Desa
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <?= form_open_multipart('struktur-desa-admin/post', ['class' => 'form-horizontal']) ?>
              <?= validation_errors() ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <?= form_dropdown('id_ta', getDropDownList('tahun_anggaran', ['id_ta', 'tahun']), $input->id_ta, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Gambar Struktur Desa</label>
									<div class="col-md-9">
                    <input type="file" name="gambar_struktur_desa" class="form-control-file">
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
