<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Desa Jagung - Admin Dashboard</title>
	<link rel="icon" href="<?= base_url('assets/images/logo_kabupaten.png') ?>" type="image/x-icons">
	<link href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/admin/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/admin/css/datepicker3.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/admin/css/styles.css') ?>" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
        .home-admin-panel{
            padding: 25px;
            background-color: #009de3;
            color: white;
            border-radius:25px;
            text-transform: uppercase;
        }
        .nav{
            text-transform: uppercase;
        }
        .home-widget{
            background-color: #f1f5f5;
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Desa </span>Jagung</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?= base_url('assets/images/logo_kabupaten.png') ?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name" style="text-transform:uppercase"><?= $this->session->hak_akses ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="<?= base_url('admin') ?>"><em class="fa fa-dashboard">&nbsp;</em> Beranda</a></li>
			<li><a href="<?= base_url('tahun-anggaran') ?>"><em class="fa fa-calendar-o">&nbsp;</em> Tahun Anggaran</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-users">&nbsp;</em> Demografis <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?= base_url('penduduk-kk') ?>">
						<span class="fa fa-rocket">&nbsp;</span> Penduduk & KK
					</a></li>
					<li><a class="" href="<?= base_url('pekerjaan') ?>">
						<span class="fa fa-rocket">&nbsp;</span> Pekerjaan
					</a></li>
					<li><a class="" href="<?= base_url('kesejahteraan') ?>">
						<span class="fa fa-rocket">&nbsp;</span> Kesejahteraan
					</a></li>
					<li><a class="" href="<?= base_url('agama') ?>">
						<span class="fa fa-rocket">&nbsp;</span> Agama
					</a></li>
					<li><a class="" href="<?= base_url('pendidikan') ?>">
						<span class="fa fa-rocket">&nbsp;</span> Pendidikan
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-money">&nbsp;</em> Keuangan <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="<?= base_url('pendapatan') ?>">
						<span class="fa fa-rocket">&nbsp;</span> Pendapatan
					</a></li>
					<li><a class="" href="<?= base_url('belanja') ?>">
						<span class="fa fa-rocket">&nbsp;</span> Belanja
					</a></li>
				</ul>
			</li>
			<li><a href="<?= base_url('struktur-desa-admin') ?>"><em class="fa fa-gavel">&nbsp;</em> Struktur Desa</a></li>
			<li><a href="<?= base_url('berita-admin') ?>"><em class="fa fa-info-circle">&nbsp;</em> Berita</a></li>
			<li><a href="<?= base_url('admin-operator') ?>"><em class="fa fa-user-circle">&nbsp;</em> Admin</a></li>
			<li><a href="<?= base_url('logout') ?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
