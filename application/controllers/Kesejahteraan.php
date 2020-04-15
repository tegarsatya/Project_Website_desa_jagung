<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Kesejahteraan extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('Kesejahteraan_model', 'kesejahteraan', TRUE);
    }

    public function index(){
      $kesejahteraans = $this->kesejahteraan->allKesejahteraan();
      $input = (object) $this->kesejahteraan->kesejahteraanDefaultValues();
      $main_view = 'admin/demo-kesejahkk';
      $this->load->view('template-admin', compact('main_view', 'kesejahteraans', 'input'));
    }

    public function store(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('kesejahteraan');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->kesejahteraan->validationKesejahteraan()){
        $kesejahteraans = $this->kesejahteraan->allKesejahteraan();
        $main_view = "admin/demo-kesejahkk";
        $this->load->view('template-admin', compact('main_view', 'kesejahteraans', 'input'));
        return;
      }
      $kesejahteraan['id_ta'] = $input->id_ta;
      $kesejahteraan['pra_sejahtera'] = $input->pra_sejahtera;
      $kesejahteraan['sejahtera'] = $input->sejahtera;
      $kesejahteraan['kaya'] = $input->kaya;
      $kesejahteraan['sedang'] = $input->sedang;
      $kesejahteraan['miskin'] = $input->miskin;
      $kesejahteraan['total_kk'] = $input->total_kk;
      $this->kesejahteraan->insertKesejahteraan($kesejahteraan);

      $this->session->set_flashdata('msg', 'Kesejateraan Berhasil Di Tambahkan!');
      redirect('kesejahteraan');
    }

    public function edit($id){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      $kesejahteraan = $this->kesejahteraan->getKesejahteraan($id);
      if(!$kesejahteraan) redirect('kesejahteraan');
      $main_view = 'admin/edit-demo-kesejahkk';
      $this->load->view('template-admin', compact('main_view', 'kesejahteraan'));
    }

    public function update(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('kesejahteraan');
      $id_demo_kesejahkk = $this->input->post('id_demo_kesejahkk', TRUE);
      $kesejahteraan = $this->input->post(null, TRUE);
      $kesejahteraan['id_ta'] = $this->input->post('id_ta', TRUE);
      $kesejahteraan['total_kk'] = $this->input->post('total_kk', TRUE);
      $kesejahteraan['miskin'] = $this->input->post('miskin', TRUE);
      $kesejahteraan['sedang'] = $this->input->post('sedang', TRUE);
      $kesejahteraan['kaya'] = $this->input->post('kaya', TRUE);
      $kesejahteraan['sejahtera'] = $this->input->post('sejahtera', TRUE);
      $kesejahteraan['pra_sejahtera'] = $this->input->post('pra_sejahtera', TRUE);

      if(!$this->kesejahteraan->validationKesejahteraan()){
        $kesejahteraan = (object) $kesejahteraan;
        $main_view = "admin/edit-demo-kesejahkk";
        $this->load->view('template-admin', compact('main_view', 'kesejahteraan'));
        return;
      }

      $this->kesejahteraan->updateKesejahteraan($id_demo_kesejahkk, $kesejahteraan);
      $this->session->set_flashdata('msg', 'Kesejahteraan Berhasil Di Edit!');
      redirect('kesejahteraan');
    }

    public function destroy(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post('id_demo_kesejahkk', TRUE)) redirect('kesejahteraan');
      $id_demo_kesejahkk = $this->input->post('id_demo_kesejahkk', TRUE);
      if($this->kesejahteraan->deleteKesejahteraan($id_demo_kesejahkk)){
        $this->session->set_flashdata('msg', 'Kesejahteraan Berhasil Di Hapus!');
        redirect('kesejahteraan');
      }
    }

  }
