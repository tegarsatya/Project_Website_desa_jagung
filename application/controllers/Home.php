<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Home_model', 'home', true);

  }

  public function index(){
    $beritas = $this->home->beritaHome();
    $main_view = 'home/index';
    $this->load->view('template', compact('main_view', 'beritas'));
  }

  public function visimisi(){
    $main_view = 'home/visimisi';
    $this->load->view('template', compact('main_view'));
  }

  public function sejarah(){
    $main_view = 'home/sejarah';
    $this->load->view('template', compact('main_view'));
  }

  public function bpd(){
    $main_view = 'home/bpd';
    $this->load->view('template', compact('main_view'));
  }

  public function lpmd(){
    $main_view = 'home/lpmd';
    $this->load->view('template', compact('main_view'));
  }

  public function karangtaruna(){
    $main_view = 'home/karangtaruna';
    $this->load->view('template', compact('main_view'));
  }

  public function rtrw(){
    $main_view = 'home/rtrw';
    $this->load->view('template', compact('main_view'));
  }

  public function pelayanan(){
    $main_view = 'home/pelayanan';
    $this->load->view('template', compact('main_view'));
  }

  public function demoPenduduk($tahun = null){
    if($tahun === null){
      $thn_anggarans = $this->home->allTahunAnggaran();
      $main_view = 'home/demo-penduduk';
      $this->load->view('template', compact('main_view', 'thn_anggarans'));
    }else{
      $demopenduduk = $this->home->getDemoPenduduk($tahun);
      if(!$demopenduduk){
        redirect('demo-penduduk');
        return;
      }
      $main_view = 'home/demo-penduduk-tabel';
      $this->load->view('template', compact('main_view', 'demopenduduk'));
    }
  }

  public function demoPekerjaan($tahun = null){
    if($tahun === null){
      $thn_anggarans = $this->home->allTahunAnggaran();
      $main_view = 'home/demo-pekerjaan';
      $this->load->view('template', compact('main_view', 'thn_anggarans'));
    }else{
      $demopekerjaan = $this->home->getDemoPekerjaan($tahun);
      if(!$demopekerjaan){
        redirect('demo-pekerjaan');
        return;
      }
      $main_view = 'home/demo-pekerjaan-tabel';
      $this->load->view('template', compact('main_view', 'demopekerjaan'));
    }
  }

  public function demoKesejahteraan($tahun = null){
    if($tahun === null){
      $thn_anggarans = $this->home->allTahunAnggaran();
      $main_view = 'home/demo-kesejahteraan';
      $this->load->view('template', compact('main_view', 'thn_anggarans'));
    }else{
      $demokesejahteraan = $this->home->getDemoKesejahteraan($tahun);
      if(!$demokesejahteraan){
        redirect('demo-kesejahteraan');
        return;
      }
      $main_view = 'home/demo-kesejahteraan-tabel';
      $this->load->view('template', compact('main_view', 'demokesejahteraan'));
    }
  }

  public function demoAgama($tahun = null){
    if($tahun === null){
      $thn_anggarans = $this->home->allTahunAnggaran();
      $main_view = 'home/demo-agama';
      $this->load->view('template', compact('main_view', 'thn_anggarans'));
    }else{
      $demoagama = $this->home->getDemoAgama($tahun);
      if(!$demoagama){
        redirect('demo-agama');
        return;
      }
      $main_view = 'home/demo-agama-tabel';
      $this->load->view('template', compact('main_view', 'demoagama'));
    }
  }

  public function demoPendidikan($tahun = null){
    if($tahun === null){
      $thn_anggarans = $this->home->allTahunAnggaran();
      $main_view = 'home/demo-pendidikan';
      $this->load->view('template', compact('main_view', 'thn_anggarans'));
    }else{
      $demopendidikan = $this->home->getDemoPendidikan($tahun);
      if(!$demopendidikan){
        redirect('demo-pendidikan');
        return;
      }
      $main_view = 'home/demo-pendidikan-tabel';
      $this->load->view('template', compact('main_view', 'demopendidikan'));
    }
  }

  public function keuPendapatan($tahun = null){
    if($tahun === null){
      $thn_anggarans = $this->home->allTahunAnggaran();
      $main_view = 'home/keu-pendapatan';
      $this->load->view('template', compact('main_view', 'thn_anggarans'));
    }else{
      $keupendapatan = $this->home->getPendapatan($tahun);
      if(!$keupendapatan){
        redirect('keu-pendapatan');
        return;
      }
      $main_view = 'home/keu-pendapatan-tabel';
      $this->load->view('template', compact('main_view', 'keupendapatan'));
    }
  }

  public function keuBelanja($tahun = null){
    if($tahun === null){
      $thn_anggarans = $this->home->allTahunAnggaran();
      $main_view = 'home/keu-belanja';
      $this->load->view('template', compact('main_view', 'thn_anggarans'));
    }else{
      $keubelanja = $this->home->getBelanja($tahun);
      if(!$keubelanja){
        redirect('keu-belanja');
        return;
      }
      $main_view = 'home/keu-belanja-tabel';
      $this->load->view('template', compact('main_view', 'keubelanja'));
    }
  }

  public function strukturDesa($tahun = null){
    if($tahun === null){
      $thn_anggarans = $this->home->allTahunAnggaran();
      $main_view = 'home/struktur-desa';
      $this->load->view('template', compact('main_view', 'thn_anggarans'));
    }else{
      $strukdes = $this->home->getStrukdes($tahun);
      if(!$strukdes){
        redirect('struktur-desa');
        return;
      }
      $main_view = 'home/struktur-desa-detail';
      $this->load->view('template', compact('main_view', 'strukdes'));
    }
  }

  public function berita($slug = null){
    if($slug === null){
      $beritas = $this->home->allBerita();
      $main_view = 'home/berita';
      $this->load->view('template', compact('main_view', 'beritas'));
    }else{
      $berita = $this->home->getBerita($slug);
      if($berita){
        $main_view = 'home/berita-halaman';
        $this->load->view('template', compact('main_view', 'berita'));
      }else{
        redirect('berita');
        return;
      }
    }
  }

  public function searchberita(){
    $cari = $this->input->get('cariberita', true);
    $beritas = $this->home->searchBerita($cari);
    $main_view = 'home/berita-cari';
    $this->load->view('template', compact('main_view', 'beritas', 'cari'));
  }



}
