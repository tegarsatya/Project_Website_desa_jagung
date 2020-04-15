

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Berita</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Berita</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Berita
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Waktu</th>
								<th>User</th>
								<th>Action</th>
							</tr>
              <?php
                $i = 1;
                foreach($beritas as $berita):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $berita->judul_berita ?></td>
								<td><?= $berita->waktu_berita ?></td>
								<td><?= $berita->username ?></td>
								<td>
                  <a href="<?= base_url('berita/'.$berita->slug_berita) ?>" target="_blank" class="btn btn-primary pull-left" style="color:white;">Detail</a>
									<a href="<?= base_url('berita-admin/edit/'.$berita->id_berita) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
									<form action="<?= base_url('berita-admin/delete') ?>" method="post">
                    <input type="hidden" name="id_berita" value="<?= $berita->id_berita ?>">
                    <input type="hidden" name="gambar_berita" value="<?= $berita->gambar_berita ?>">
									   <button type="submit" class="btn btn-danger pull-left" style="color:white;">Hapus</button>
									</form>
								</td>
							</tr>
            <?php endforeach ?>
						</table>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Berita
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?= base_url('berita-admin/post') ?>" method="post">
              <?= validation_errors() ?>
              <input type="hidden" name="id_admin" value="<?= $this->session->userdata('id_admin') ?>">

                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Judul</label>
									<div class="col-md-9">
                    <input type="text" name="judul_berita" value="<?= $input->judul_berita ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Isi</label>
									<div class="col-md-9">
                    <textarea name="isi_berita" rows="8" cols="80" class="form-control"><?= $input->isi_berita ?></textarea>
									</div>
								</div>

                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Gambar</label>
									<div class="col-md-9">
                    <input type="file" class="form-control-file" name="gambar_berita">
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
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
