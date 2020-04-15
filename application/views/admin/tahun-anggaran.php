
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tahun Anggaran</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tahun Anggaran</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Tahun Anggaran
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Tahun Anggaran</th>
              <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
              <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($tahans as $tahan):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $tahan->tahun ?></td>
                <?php if($this->session->has_userdata('admin')): ?>
								<td>
									<a href="<?= base_url('tahun-anggaran/edit/'.$tahan->id_ta) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
                  <form action="<?= base_url('tahun-anggaran/delete') ?>" method="post">
                    <input type="hidden" name="id_ta" value="<?= $tahan->id_ta ?>">
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
						Tambah Tahun Anggaran
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('tahun-anggaran/post') ?>" method="post">
              <?= validation_errors() ?>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tahun Anggaran</label>
									<div class="col-md-9">
                    <input type="text" name="tahun" value="<?= $input->tahun ?>" class="form-control">
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
