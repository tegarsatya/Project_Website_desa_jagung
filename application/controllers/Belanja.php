<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Belanja extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('Belanja_model', 'belanja', TRUE);
    }

    public function index(){
      $belanjas = $this->belanja->allBelanja();
      $input = (object) $this->belanja->belanjaDefaultValues();
      $main_view = 'admin/keu-belanja';
      $this->load->view('template-admin', compact('main_view', 'belanjas', 'input'));
    }

    public function store(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('belanja');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->belanja->validationBelanja()){
        $belanjas = $this->belanja->allBelanja();
        $main_view = "admin/keu-belanja";
        $this->load->view('template-admin', compact('main_view', 'belanjas', 'input'));
        return;
      }
      $belanja['id_ta'] = $input->id_ta;
      $belanja['apbd_belanja_pegawai'] = $input->apbd_belanja_pegawai;
      $belanja['apbd_belanja_bajas'] = $input->apbd_belanja_bajas;
      $belanja['apbd_belanja_modal'] = $input->apbd_belanja_modal;
      $belanja['apbd_total'] = $input->apbd_total;
      $belanja['apbn_belanja_pegawai'] = $input->apbn_belanja_pegawai;
      $belanja['apbn_belanja_bajas'] = $input->apbn_belanja_bajas;
      $belanja['apbn_belanja_modal'] = $input->apbn_belanja_modal;
      $belanja['jumlah_belanja'] = $input->jumlah_belanja;
      $this->belanja->insertBelanja($belanja);

      $this->session->set_flashdata('msg', 'Belanja Berhasil Di Tambahkan!');
      redirect('belanja');
    }

    public function edit($id){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      $belanja = $this->belanja->getBelanja($id);
      if(!$belanja) redirect('belanja');
      $main_view = 'admin/edit-keu-belanja';
      $this->load->view('template-admin', compact('main_view', 'belanja'));
    }

    public function update(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('belanja');
      $id_keu_belanja = $this->input->post('id_keu_belanja', TRUE);
      $belanja = $this->input->post(null, TRUE);
      $belanja['id_ta'] = $this->input->post('id_ta', TRUE);
      $belanja['apbd_belanja_pegawai'] = $this->input->post('apbd_belanja_pegawai', TRUE);
      $belanja['apbd_belanja_bajas'] = $this->input->post('apbd_belanja_bajas', TRUE);
      $belanja['apbd_belanja_modal'] = $this->input->post('apbd_belanja_modal', TRUE);
      $belanja['apbd_total'] = $this->input->post('apbd_total', TRUE);
      $belanja['apbn_belanja_pegawai'] = $this->input->post('apbn_belanja_pegawai', TRUE);
      $belanja['apbn_belanja_bajas'] = $this->input->post('apbn_belanja_bajas', TRUE);
      $belanja['apbn_belanja_modal'] = $this->input->post('apbn_belanja_modal', TRUE);
      $belanja['jumlah_belanja'] = $this->input->post('jumlah_belanja', TRUE);

      if(!$this->belanja->validationBelanja()){
        $belanja = (object) $belanja;
        $main_view = "admin/edit-keu-belanja";
        $this->load->view('template-admin', compact('main_view', 'belanja'));
        return;
      }

      $this->belanja->updateBelanja($id_keu_belanja, $belanja);
      $this->session->set_flashdata('msg', 'Belanja Berhasil Di Edit!');
      redirect('belanja');
    }

    public function destroy(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post('id_keu_belanja', TRUE)) redirect('belanja');
      $id_keu_belanja = $this->input->post('id_keu_belanja', TRUE);
      if($this->belanja->deleteBelanja($id_keu_belanja)){
        $this->session->set_flashdata('msg', 'Belanja Berhasil Di Hapus!');
        redirect('belanja');
      }
    }

  }
