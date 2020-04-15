<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class TahunAnggaran extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('TahunAnggaran_model', 'tahan', TRUE);
    }

    public function index(){
      $tahans = $this->tahan->allTahan();
      $input = (object) $this->tahan->tahanDefaultValues();
      $main_view = 'admin/tahun-anggaran';
      $this->load->view('template-admin', compact('main_view', 'tahans', 'input'));
    }

    public function store(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('tahun-anggaran');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->tahan->validationTahan()){
        $tahans = $this->tahan->allTahan();
        $main_view = "admin/tahun-anggaran";
        $this->load->view('template-admin', compact('main_view', 'tahans', 'input'));
        return;
      }
      $tahan['tahun'] = $input->tahun;
      $this->tahan->insertTahan($tahan);

      $this->session->set_flashdata('msg', 'Tahun Anggaran Berhasil Di Tambahkan!');
      redirect('tahun-anggaran');
    }

    public function edit($id){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      $tahan = $this->tahan->getTahan($id);
      if(!$tahan) redirect('tahun-anggaran');
      $main_view = 'admin/edit-tahun-anggaran';
      $this->load->view('template-admin', compact('main_view', 'tahan'));
    }

    public function update(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('tahun-anggaran');
      $id_ta = $this->input->post('id_ta', TRUE);
      $tahan = $this->input->post(null, TRUE);
      $tahan['tahun'] = $this->input->post('tahun', TRUE);

      if(!$this->tahan->validationTahan()){
        $tahan = (object) $tahan;
        $main_view = "admin/edit-tahun-anggaran";
        $this->load->view('template-admin', compact('main_view', 'tahan'));
        return;
      }

      $this->tahan->updateTahan($id_ta, $tahan);
      $this->session->set_flashdata('msg', 'Tahun Anggaran Berhasil Di Edit!');
      redirect('tahun-anggaran');
    }

    public function destroy(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post('id_ta', TRUE)) redirect('tahun-anggaran');
      $id_ta = $this->input->post('id_ta', TRUE);
      if($this->tahan->deleteTahan($id_ta)){
        $this->session->set_flashdata('msg', 'Tahun Anggaran Berhasil Di Hapus!');
        redirect('tahun-anggaran');
      }
    }


  }
