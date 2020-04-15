<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="chocolate">
    <title>Desa Jagung</title>
    <meta name="description" content="Desa Jagung termasuk salah satu desa yang terletak di Jl. Bahurekso
    Km 04 Desa Jgung Kidul Kecamatan Kesesi Kabupaten Pekalongan">
    <meta name="keywords" content="Desa Jagung, SI-Desa Jagung, sidesa Jagung, Jagung indonesia,Jagung, desa Jagung">
    <meta name="author" content="Adnan Kasim">

    <!-- Bootstrap -->
  <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/jquery.bxslider.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/isotope.css') ?>" media="screen" />
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/js/fancybox/jquery.fancybox.css') ?>" type="text/css" media="screen" />
	<link href="<?= base_url('assets/css/prettyPhoto.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" />
  <link rel="icon" href="<?= base_url('assets/images/logo_kabupaten.png') ?>" type="image/x-icons">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
    .container2{
      width: 800px;
      margin: auto;
    }
    .coba{
  			width: 200px;
  			height: 200px;
  		}
      .tabel-web{
        color: black;
      }
      .table-web th{
        text-align: center;
      }
      .navbar-brand h1{
        color: chocolate;
        font-weight: bold;
      }
      @media (max-width: 768px) {
      .navbar-brand{
          margin-top: -20px;
      }
    }
    </style>
  </head>
  <body>
	<header>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="<?= base_url('') ?>">
                <h1> <img src="<?= base_url('assets/images/logo_kabupaten.png') ?>" style="width:45px;">
                  Desa <span></span>Jagung</h1>
              </a>
						</div>
					</div>

					<div class="navbar-collapse collapse">
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li><a href="<?= base_url('') ?>">Beranda</a></li>
								<li class="dropdown">
                					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang<span class="caret"></span></a>
                					<ul class="dropdown-menu">
					                  <li><a class="trigger right-caret">Profil</a>
					                      <ul class="dropdown-menu sub-menu">
					                        <li><a href="<?= base_url('visimisi') ?>">Visi & Misi</a></li>
					                        <li><a href="<?= base_url('sejarah') ?>">Sejarah</a></li>
					                      </ul>
					                  </li>
					                  <li><a href="<?= base_url('struktur-desa') ?>">Struktur</a></li>
					                  <li role="separator" class="divider"></li>
					                </ul>
              					</li>
                <li class="dropdown">
                					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data<span class="caret"></span></a>
                					<ul class="dropdown-menu">
					                  <li><a class="trigger right-caret">Demografis</a>
                              <ul class="dropdown-menu sub-menu">
                                <li><a href="<?= base_url('demo-penduduk') ?>">Penduduk & Kepala Keluarga</a></li>
                                <li><a href="<?= base_url('demo-pekerjaan') ?>">Pekerjaan</a></li>
                                <li><a href="<?= base_url('demo-kesejahteraan') ?>">Kesejahteraan</a></li>
                                <li><a href="<?= base_url('demo-agama') ?>">Agama</a></li>
                                <li><a href="<?= base_url('demo-pendidikan') ?>">Pendidikan</a></li>
                              </ul>
                            </li>
					                  <li><a class="trigger right-caret">Keuangan</a>
                              <ul class="dropdown-menu sub-menu">
                                <li><a href="<?= base_url('keu-pendapatan') ?>">Pendapatan</a></li>
                                <li><a href="<?= base_url('keu-belanja') ?>">Belanja</a></li>
                              </ul>
                            </li>
					                  <li role="separator" class="divider"></li>
					                </ul>
              	</li>
								<li class="dropdown">
                					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lembaga<span class="caret"></span></a>
                					<ul class="dropdown-menu">
					                  <li><a href="<?= base_url('bpd') ?>">BPD</a></li>
					                  <li><a href="<?= base_url('lpmd') ?>">LPMD</a></li>
					                  <li><a href="<?= base_url('karang-taruna') ?>">Karang Taruna</a></li>
					                  <li><a href="<?= base_url('rt-rw') ?>">RT & RW</a></li>
					                  <li role="separator" class="divider"></li>
					                </ul>
              					</li>
								<li><a href="<?= base_url('pelayanan') ?>">Pelayanan</a></li>
					      <li><a href="<?= base_url('berita') ?>">Berita</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
