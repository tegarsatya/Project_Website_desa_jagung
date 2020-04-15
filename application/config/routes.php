<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['logout'] = 'login/logout';

$route['visimisi'] = 'home/visimisi';
$route['sejarah'] = 'home/sejarah';
$route['bpd'] = 'home/bpd';
$route['lpmd'] = 'home/lpmd';
$route['karang-taruna'] = 'home/karangtaruna';
$route['rt-rw'] = 'home/rtrw';
$route['pelayanan'] = 'home/pelayanan';
$route['berita'] = 'home/berita';
$route['berita/cari'] = 'home/searchberita';
$route['berita/(:any)'] = 'home/berita/$1';

$route['struktur-desa'] = 'home/strukturDesa';
$route['struktur-desa/(:num)'] = 'home/strukturDesa/$1';

$route['demo-penduduk'] = 'home/demoPenduduk';
$route['demo-penduduk/(:num)'] = 'home/demoPenduduk/$1';

$route['demo-pekerjaan'] = 'home/demoPekerjaan';
$route['demo-pekerjaan/(:num)'] = 'home/demoPekerjaan/$1';

$route['demo-kesejahteraan'] = 'home/demoKesejahteraan';
$route['demo-kesejahteraan/(:num)'] = 'home/demoKesejahteraan/$1';

$route['demo-agama'] = 'home/demoAgama';
$route['demo-agama/(:num)'] = 'home/demoAgama/$1';

$route['demo-pendidikan'] = 'home/demoPendidikan';
$route['demo-pendidikan/(:num)'] = 'home/demoPendidikan/$1';

$route['keu-pendapatan'] = 'home/keuPendapatan';
$route['keu-pendapatan/(:num)'] = 'home/keuPendapatan/$1';

$route['keu-belanja'] = 'home/keuBelanja';
$route['keu-belanja/(:num)'] = 'home/keuBelanja/$1';

// CRUD Tahun Anggaran
$route['tahun-anggaran'] = 'TahunAnggaran/index';
$route['tahun-anggaran/post'] = 'TahunAnggaran/store';
$route['tahun-anggaran/edit/(:num)'] = 'TahunAnggaran/edit/$1';
$route['tahun-anggaran/patch'] = 'TahunAnggaran/update';
$route['tahun-anggaran/delete'] = 'TahunAnggaran/destroy';

// CRUD Penduduk KK
$route['penduduk-kk'] = 'penduduk/index';
$route['penduduk-kk/post'] = 'penduduk/store';
$route['penduduk-kk/edit/(:num)'] = 'penduduk/edit/$1';
$route['penduduk-kk/patch'] = 'penduduk/update';
$route['penduduk-kk/delete'] = 'penduduk/destroy';

$route['pekerjaan'] = 'pekerjaan/index';
$route['pekerjaan/post'] = 'pekerjaan/store';
$route['pekerjaan/edit/(:num)'] = 'pekerjaan/edit/$1';
$route['pekerjaan/patch'] = 'pekerjaan/update';
$route['pekerjaan/delete'] = 'pekerjaan/destroy';

$route['kesejahteraan'] = 'kesejahteraan/index';
$route['kesejahteraan/post'] = 'kesejahteraan/store';
$route['kesejahteraan/edit/(:num)'] = 'kesejahteraan/edit/$1';
$route['kesejahteraan/patch'] = 'kesejahteraan/update';
$route['kesejahteraan/delete'] = 'kesejahteraan/destroy';

$route['agama'] = 'agama/index';
$route['agama/post'] = 'agama/store';
$route['agama/edit/(:num)'] = 'agama/edit/$1';
$route['agama/patch'] = 'agama/update';
$route['agama/delete'] = 'agama/destroy';

$route['pendidikan'] = 'pendidikan/index';
$route['pendidikan/post'] = 'pendidikan/store';
$route['pendidikan/edit/(:num)'] = 'pendidikan/edit/$1';
$route['pendidikan/patch'] = 'pendidikan/update';
$route['pendidikan/delete'] = 'pendidikan/destroy';

$route['pendapatan'] = 'pendapatan/index';
$route['pendapatan/post'] = 'pendapatan/store';
$route['pendapatan/edit/(:num)'] = 'pendapatan/edit/$1';
$route['pendapatan/patch'] = 'pendapatan/update';
$route['pendapatan/delete'] = 'pendapatan/destroy';

$route['belanja'] = 'belanja/index';
$route['belanja/post'] = 'belanja/store';
$route['belanja/edit/(:num)'] = 'belanja/edit/$1';
$route['belanja/patch'] = 'belanja/update';
$route['belanja/delete'] = 'belanja/destroy';

$route['struktur-desa-admin'] = 'StrukturDesa/index';
$route['struktur-desa-admin/post'] = 'StrukturDesa/store';
$route['struktur-desa-admin/edit/(:num)'] = 'StrukturDesa/edit/$1';
$route['struktur-desa-admin/patch'] = 'StrukturDesa/update';
$route['struktur-desa-admin/delete'] = 'StrukturDesa/destroy';

$route['berita-admin'] = 'berita/index';
$route['berita-admin/post'] = 'berita/store';
$route['berita-admin/edit/(:num)'] = 'berita/edit/$1';
$route['berita-admin/patch'] = 'berita/update';
$route['berita-admin/delete'] = 'berita/destroy';

$route['admin-operator'] = 'admin/adminOperator';
$route['admin-operator/post'] = 'admin/store';
$route['admin-operator/delete'] = 'admin/destroy';
