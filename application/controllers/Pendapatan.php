<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Pendapatan extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('Pendapatan_model', 'pendapatan', TRUE);
    }

    public function index(){
      $pendapatans = $this->pendapatan->allPendapatan();
      $input = (object) $this->pendapatan->pendapatanDefaultValues();
      $main_view = 'admin/keu-pendapatan';
      $this->load->view('template-admin', compact('main_view', 'pendapatans', 'input'));
    }

    public function store(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('pendapatan');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->pendapatan->validationPendapatan()){
        $pendapatans = $this->pendapatan->allPendapatan();
        $main_view = "admin/keu-pendapatan";
        $this->load->view('template-admin', compact('main_view', 'pendapatans', 'input'));
        return;
      }
      $pendapatan['id_ta'] = $input->id_ta;
      $pendapatan['hasil_usaha_desa'] = $input->hasil_usaha_desa;
      $pendapatan['tanah_kas_desa'] = $input->tanah_kas_desa;
      $pendapatan['hasil_swamas'] = $input->hasil_swamas;
      $pendapatan['hasil_pargoro'] = $input->hasil_pargoro;
      $pendapatan['pungutan_desa'] = $input->pungutan_desa;
      $pendapatan['pendesah'] = $input->pendesah;
      $pendapatan['bahaspadar'] = $input->bahaspadar;
      $pendapatan['bapbn'] = $input->bapbn;
      $pendapatan['add_apbd'] = $input->add_apbd;
      $pendapatan['bkppus'] = $input->bkppus;
      $pendapatan['bkppro'] = $input->bkppro;
      $pendapatan['bkpk'] = $input->bkpk;
      $pendapatan['pos_hibah'] = $input->pos_hibah;
      $pendapatan['sumpiket'] = $input->sumpiket;
      $pendapatan['jum_pendapatan'] = $input->jum_pendapatan;
      $this->pendapatan->insertPendapatan($pendapatan);

      $this->session->set_flashdata('msg', 'Pendapatan Berhasil Di Tambahkan!');
      redirect('pendapatan');
    }

    public function edit($id){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      $pendapatan = $this->pendapatan->getPendapatan($id);
      if(!$pendapatan) redirect('pendapatan');
      $main_view = 'admin/edit-keu-pendapatan';
      $this->load->view('template-admin', compact('main_view', 'pendapatan'));
    }

    public function update(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('pendapatan');
      $id_keu_pendapatan = $this->input->post('id_keu_pendapatan', TRUE);
      $pendapatan = $this->input->post(null, TRUE);
      $pendapatan['id_ta'] = $this->input->post('id_ta', TRUE);
      $pendapatan['hasil_usaha_desa'] = $this->input->post('hasil_usaha_desa', TRUE);
      $pendapatan['tanah_kas_desa'] = $this->input->post('tanah_kas_desa', TRUE);
      $pendapatan['hasil_swamas'] = $this->input->post('hasil_swamas', TRUE);
      $pendapatan['hasil_pargoro'] = $this->input->post('hasil_pargoro', TRUE);
      $pendapatan['pungutan_desa'] = $this->input->post('pungutan_desa', TRUE);
      $pendapatan['pendesah'] = $this->input->post('pendesah', TRUE);
      $pendapatan['bahaspadar'] = $this->input->post('bahaspadar', TRUE);
      $pendapatan['bapbn'] = $this->input->post('bapbn', TRUE);
      $pendapatan['add_apbd'] = $this->input->post('add_apbd', TRUE);
      $pendapatan['bkppus'] = $this->input->post('bkppus', TRUE);
      $pendapatan['bkppro'] = $this->input->post('bkppro', TRUE);
      $pendapatan['bkpk'] = $this->input->post('bkpk', TRUE);
      $pendapatan['pos_hibah'] = $this->input->post('pos_hibah', TRUE);
      $pendapatan['sumpiket'] = $this->input->post('sumpiket', TRUE);
      $pendapatan['jum_pendapatan'] = $this->input->post('jum_pendapatan', TRUE);

      if(!$this->pendapatan->validationPendapatan()){
        $pendapatan = (object) $pendapatan;
        $main_view = "admin/edit-keu-pendapatan";
        $this->load->view('template-admin', compact('main_view', 'pendapatan'));
        return;
      }

      $this->pendapatan->updatePendapatan($id_keu_pendapatan, $pendapatan);
      $this->session->set_flashdata('msg', 'Pendapatan Berhasil Di Edit!');
      redirect('pendapatan');
    }

    public function destroy(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post('id_keu_pendapatan', TRUE)) redirect('pendapatan');
      $id_keu_pendapatan = $this->input->post('id_keu_pendapatan', TRUE);
      if($this->pendapatan->deletePendapatan($id_keu_pendapatan)){
        $this->session->set_flashdata('msg', 'Pendapatan Berhasil Di Hapus!');
        redirect('pendapatan');
      }
    }

  }
