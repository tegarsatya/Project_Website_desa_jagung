<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Pendidikan extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('Pendidikan_model', 'pendidikan', TRUE);
    }

    public function index(){
      $pendidikans = $this->pendidikan->allPendidikan();
      $input = (object) $this->pendidikan->pendidikanDefaultValues();
      $main_view = 'admin/demo-pendidikan';
      $this->load->view('template-admin', compact('main_view', 'pendidikans', 'input'));
    }

    public function store(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('pendidikan');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->pendidikan->validationPendidikan()){
        $pendidikans = $this->pendidikan->allPendidikan();
        $main_view = "admin/demo-pendidikan";
        $this->load->view('template-admin', compact('main_view', 'pendidikans', 'input'));
        return;
      }
      $pendidikan['id_ta'] = $input->id_ta;
      $pendidikan['belum_tamat_sd'] = $input->belum_tamat_sd;
      $pendidikan['sd'] = $input->sd;
      $pendidikan['sltp'] = $input->sltp;
      $pendidikan['slta'] = $input->slta;
      $pendidikan['diploma_sarjana'] = $input->diploma_sarjana;
      $pendidikan['total_pendidikan'] = $input->total_pendidikan;
      $this->pendidikan->insertPendidikan($pendidikan);

      $this->session->set_flashdata('msg', 'Pendidikan Berhasil Di Tambahkan!');
      redirect('pendidikan');
    }

    public function edit($id){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      $pendidikan = $this->pendidikan->getPendidikan($id);
      if(!$pendidikan) redirect('pendidikan');
      $main_view = 'admin/edit-demo-pendidikan';
      $this->load->view('template-admin', compact('main_view', 'pendidikan'));
    }

    public function update(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('pendidikan');
      $id_demo_pendidikan = $this->input->post('id_demo_pendidikan', TRUE);
      $pendidikan = $this->input->post(null, TRUE);
      $pendidikan['id_ta'] = $this->input->post('id_ta', TRUE);
      $pendidikan['total_pendidikan'] = $this->input->post('total_pendidikan', TRUE);
      $pendidikan['belum_tamat_sd'] = $this->input->post('belum_tamat_sd', TRUE);
      $pendidikan['sltp'] = $this->input->post('sltp', TRUE);
      $pendidikan['slta'] = $this->input->post('katolik', TRUE);
      $pendidikan['diploma_sarjana'] = $this->input->post('hindu', TRUE);
      $pendidikan['sd'] = $this->input->post('sd', TRUE);

      if(!$this->pendidikan->validationPendidikan()){
        $pendidikan = (object) $pendidikan;
        $main_view = "admin/edit-demo-pendidikan";
        $this->load->view('template-admin', compact('main_view', 'pendidikan'));
        return;
      }

      $this->pendidikan->updatePendidikan($id_demo_pendidikan, $pendidikan);
      $this->session->set_flashdata('msg', 'Pendidikan Berhasil Di Edit!');
      redirect('pendidikan');
    }

    public function destroy(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post('id_demo_pendidikan', TRUE)) redirect('pendidikan');
      $id_demo_pendidikan = $this->input->post('id_demo_pendidikan', TRUE);
      if($this->pendidikan->deletePendidikan($id_demo_pendidikan)){
        $this->session->set_flashdata('msg', 'Pendidikan Berhasil Di Hapus!');
        redirect('pendidikan');
      }
    }

  }
