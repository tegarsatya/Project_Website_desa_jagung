
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Admin</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Admin
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Username</th>
								<th>Hak Akses</th>
								<th>Terakhir Login</th>
              <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
              <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($admins as $admin):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $admin->username ?></td>
								<td><?= $admin->hak_akses ?></td>
								<td><?= $admin->terakhir_login ?></td>
                <?php if($this->session->has_userdata('admin')): ?>
								<td>
									<form action="<?= base_url('admin-operator/delete') ?>" method="post">
                    <input type="hidden" name="id_admin" value="<?= $admin->id_admin ?>">
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
						Admin
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
            <form class="form-horizontal" action="<?= base_url('admin-operator/post') ?>" method="post">
              <?= validation_errors() ?>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Username</label>
									<div class="col-md-9">
                    <input type="text" name="username" value="<?= $input->username ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Password</label>
									<div class="col-md-9">
                    <input type="password" name="password" value="<?= $input->password ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hak Akses</label>
									<div class="col-md-9">
                    <select name="hak_akses" class="form-control">
                        <option value="admin">Admin</option>
                    </select>
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
