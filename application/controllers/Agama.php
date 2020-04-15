<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Agama extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('Agama_model', 'agama', TRUE);
    }

    public function index(){
      $agamas = $this->agama->allAgama();
      $input = (object) $this->agama->agamaDefaultValues();
      $main_view = 'admin/demo-agama';
      $this->load->view('template-admin', compact('main_view', 'agamas', 'input'));
    }

    public function store(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('agama');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->agama->validationAgama()){
        $agamas = $this->agama->allAgama();
        $main_view = "admin/demo-agama";
        $this->load->view('template-admin', compact('main_view', 'agamas', 'input'));
        return;
      }
      $agama['id_ta'] = $input->id_ta;
      $agama['islam'] = $input->islam;
      $agama['kristen_protestan'] = $input->kristen_protestan;
      $agama['hindu'] = $input->hindu;
      $agama['katolik'] = $input->katolik;
      $agama['budha'] = $input->budha;
      $agama['total_agama'] = $input->total_agama;
      $this->agama->insertAgama($agama);

      $this->session->set_flashdata('msg', 'Agama Berhasil Di Tambahkan!');
      redirect('agama');
    }

    public function edit($id){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      $agama = $this->agama->getAgama($id);
      if(!$agama) redirect('agama');
      $main_view = 'admin/edit-demo-agama';
      $this->load->view('template-admin', compact('main_view', 'agama'));
    }

    public function update(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('agama');
      $id_demo_agama = $this->input->post('id_demo_agama', TRUE);
      $agama = $this->input->post(null, TRUE);
      $agama['id_ta'] = $this->input->post('id_ta', TRUE);
      $agama['total_agama'] = $this->input->post('total_agama', TRUE);
      $agama['islam'] = $this->input->post('islam', TRUE);
      $agama['kristen_protestan'] = $this->input->post('kristen_protestan', TRUE);
      $agama['katolik'] = $this->input->post('katolik', TRUE);
      $agama['hindu'] = $this->input->post('hindu', TRUE);
      $agama['budha'] = $this->input->post('budha', TRUE);

      if(!$this->agama->validationAgama()){
        $agama = (object) $agama;
        $main_view = "admin/edit-demo-agama";
        $this->load->view('template-admin', compact('main_view', 'agama'));
        return;
      }

      $this->agama->updateAgama($id_demo_agama, $agama);
      $this->session->set_flashdata('msg', 'Agama Berhasil Di Edit!');
      redirect('agama');
    }

    public function destroy(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post('id_demo_agama', TRUE)) redirect('agama');
      $id_demo_agama = $this->input->post('id_demo_agama', TRUE);
      if($this->agama->deleteAgama($id_demo_agama)){
        $this->session->set_flashdata('msg', 'Agama Berhasil Di Hapus!');
        redirect('agama');
      }
    }

  }
