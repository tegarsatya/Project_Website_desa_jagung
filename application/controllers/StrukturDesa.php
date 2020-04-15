<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class StrukturDesa extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('StrukturDesa_model', 'strukdes', TRUE);
    }

    public function index(){
      $strukdess = $this->strukdes->allStrukdes();
      $input = (object) $this->strukdes->strukdesDefaultValues();
      $main_view = 'admin/struktur-desa';
      $this->load->view('template-admin', compact('main_view', 'strukdess', 'input'));
    }

    public function store(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('struktur-desa-admin');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->strukdes->validationStrukdes()){
        $strukdess = $this->strukdes->allStrukdes();
        $main_view = "admin/struktur-desa";
        $this->load->view('template-admin', compact('main_view', 'strukdess', 'input'));
        return;
      }
      $config = [
          'upload_path' => './assets/images/struktur',
          'allowed_types' => 'jpg|png|gif',
          'max_size' => '5000'
        ];
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar_struktur_desa')){
          $this->session->set_flashdata('msg', 'Upload wajib diisi <br> Hanya boleh mengupload JPG, PNG, GIF <br> Ukuran File max 4MB');
          $strukdess = $this->strukdes->allStrukdes();
          $errors = $this->upload->display_errors();
          $main_view = "admin/struktur-desa";
          $this->load->view('template-admin', compact('main_view', 'strukdess', 'errors', 'input'));
          return;
        }
          $strukdes['gambar_struktur_desa'] = $this->upload->data('file_name');
          $strukdes['id_ta'] = $this->input->post('id_ta', true);
          $this->strukdes->insertStrukdes($strukdes);

          $this->session->set_flashdata('msg', 'Struktur Desa Berhasil Di Tambahkan!');
          redirect('struktur-desa-admin');
  }

    public function edit($id){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      $strukdes = $this->strukdes->getStrukdes($id);
      if(!$strukdes) redirect('struktur-desa-admin');
      $main_view = 'admin/edit-struktur-desa';
      $this->load->view('template-admin', compact('main_view', 'strukdes'));
    }

    public function update(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('struktur-desa-admin');
      $id_struktur_desa = $this->input->post('id_struktur_desa', TRUE);
      $file_lama = $this->input->post('gambar_struktur_desa', TRUE);
      $strukdes = $this->input->post(null, TRUE);
      $strukdes['id_ta'] = $this->input->post('id_ta', TRUE);
      if(!$this->strukdes->validationStrukdes()){
        $strukdes = (object) $strukdes;
        $main_view = "admin/edit-struktur-desa";
        $this->load->view('template-admin', compact('main_view', 'strukdes'));
        return;
      }
      $config = [
          'upload_path' => './assets/images/struktur',
          'allowed_types' => 'jpg|gif|png',
          'max_size' => '5000'
      ];
      $this->load->library('upload', $config);
      if($this->upload->do_upload('gambar_struktur_desa')){
        unlink('assets/images/struktur/'.$file_lama);
        $strukdes['gambar_struktur_desa'] = $this->upload->data('file_name');
      }

      $this->strukdes->updateStrukdes($id_struktur_desa, $strukdes);
      $this->session->set_flashdata('msg', 'Struktur Desa Berhasil Di Edit!');
      redirect('struktur-desa-admin');
    }

    public function destroy(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post('id_struktur_desa', TRUE)) redirect('struktur-desa-admin');
      $id_struktur_desa = $this->input->post('id_struktur_desa', TRUE);
      $file_lama = $this->input->post('gambar_struktur_desa', TRUE);
      if($this->strukdes->deleteStrukdes($id_struktur_desa)){
        unlink('assets/images/struktur/'.$file_lama);
        $this->session->set_flashdata('msg', 'Struktur Desa Berhasil Di Hapus!');
        redirect('struktur-desa-admin');
      }
    }

  }
