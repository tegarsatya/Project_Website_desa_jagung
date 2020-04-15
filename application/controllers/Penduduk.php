<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Penduduk extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('Penduduk_model', 'penduduk', TRUE);
    }

    public function index(){
      $penduduks = $this->penduduk->allPenduduk();
      $input = (object) $this->penduduk->pendudukDefaultValues();
      $main_view = 'admin/demo-penkk';
      $this->load->view('template-admin', compact('main_view', 'penduduks', 'input'));
    }

    public function store(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('penduduk-kk');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->penduduk->validationPenduduk()){
        $penduduks = $this->penduduk->allPenduduk();
        $main_view = "admin/demo-penkk";
        $this->load->view('template-admin', compact('main_view', 'penduduks', 'input'));
        return;
      }
      $penduduk['id_ta'] = $input->id_ta;
      $penduduk['laki_laki'] = $input->laki_laki;
      $penduduk['laki_015'] = $input->laki_015;
      $penduduk['laki_1655'] = $input->laki_1655;
      $penduduk['laki_diatas55'] = $input->laki_diatas55;
      $penduduk['perempuan'] = $input->perempuan;
      $penduduk['perem_015'] = $input->perem_015;
      $penduduk['perem_1655'] = $input->perem_1655;
      $penduduk['perem_diatas55'] = $input->perem_diatas55;
      $penduduk['jum_pen'] = $input->jum_pen;
      $penduduk['jum_kk'] = $input->jum_kk;
      $this->penduduk->insertPenduduk($penduduk);

      $this->session->set_flashdata('msg', 'Penduduk & KK Berhasil Di Tambahkan!');
      redirect('penduduk-kk');
    }

    public function edit($id){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      $penduduk = $this->penduduk->getPenduduk($id);
      if(!$penduduk) redirect('penduduk-kk');
      $main_view = 'admin/edit-demo-penkk';
      $this->load->view('template-admin', compact('main_view', 'penduduk'));
    }

    public function update(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('penduduk-kk');
      $id_demo_penkk = $this->input->post('id_demo_penkk', TRUE);
      $penduduk = $this->input->post(null, TRUE);
      $penduduk['id_ta'] = $this->input->post('id_ta', TRUE);
      $penduduk['laki_laki'] = $this->input->post('laki_laki', TRUE);
      $penduduk['laki_015'] = $this->input->post('laki_015', TRUE);
      $penduduk['laki_1655'] = $this->input->post('laki_1655', TRUE);
      $penduduk['laki_diatas55'] = $this->input->post('laki_diatas55', TRUE);
      $penduduk['perempuan'] = $this->input->post('perempuan', TRUE);
      $penduduk['perem_015'] = $this->input->post('perem_015', TRUE);
      $penduduk['perem_1655'] = $this->input->post('perem_1655', TRUE);
      $penduduk['perem_diatas55'] = $this->input->post('perem_diatas55', TRUE);
      $penduduk['jum_pen'] = $this->input->post('jum_pen', TRUE);
      $penduduk['jum_kk'] = $this->input->post('jum_kk', TRUE);

      if(!$this->penduduk->validationPenduduk()){
        $penduduk = (object) $penduduk;
        $main_view = "admin/edit-demo-penkk";
        $this->load->view('template-admin', compact('main_view', 'penduduk'));
        return;
      }

      $this->penduduk->updatePenduduk($id_demo_penkk, $penduduk);
      $this->session->set_flashdata('msg', 'Penduduk & KK Berhasil Di Edit!');
      redirect('penduduk-kk');
    }

    public function destroy(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post('id_demo_penkk', TRUE)) redirect('penduduk-kk');
      $id_demo_penkk = $this->input->post('id_demo_penkk', TRUE);
      if($this->penduduk->deletePenduduk($id_demo_penkk)){
        $this->session->set_flashdata('msg', 'Penduduk & KK Berhasil Di Hapus!');
        redirect('penduduk-kk');
      }
    }

  }
