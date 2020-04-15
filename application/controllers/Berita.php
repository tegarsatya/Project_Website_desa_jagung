<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Berita extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('Berita_model', 'berita', TRUE);
    }

    public function index(){
      $beritas = $this->berita->allBerita();
      $input = (object) $this->berita->beritaDefaultValues();
      $main_view = 'admin/berita';
      $this->load->view('template-admin', compact('main_view', 'beritas', 'input'));
    }

    public function store(){
      if(!$this->input->post(null, TRUE)) redirect('berita-admin');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->berita->validationBerita()){
        $beritas = $this->berita->allBerita();
        $main_view = "admin/berita";
        $this->load->view('template-admin', compact('main_view', 'beritas', 'input'));
        return;
      }
      $config = [
          'upload_path' => './assets/images/berita',
          'allowed_types' => 'jpg|png|gif',
          'max_size' => '5000'
        ];
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar_berita')){
          $this->session->set_flashdata('msg', 'Upload wajib diisi <br> Hanya boleh mengupload JPG, PNG, GIF <br> Ukuran File max 4MB');
          $beritas = $this->berita->allBerita();
          $errors = $this->upload->display_errors();
          $main_view = "admin/berita";
          $this->load->view('template-admin', compact('main_view', 'beritas', 'errors', 'input'));
          return;
        }
          $berita['gambar_berita'] = $this->upload->data('file_name');
          $berita['id_admin'] = $input->id_admin;
          $berita['isi_berita'] = $input->isi_berita;
          $berita['judul_berita'] = $input->judul_berita;
          $berita['slug_berita'] = url_title($input->judul_berita, '-', true);
          $this->berita->insertBerita($berita);

          $this->session->set_flashdata('msg', 'Berita Berhasil Di Tambahkan!');
          redirect('berita-admin');
  }

    public function edit($id){
      $berita = $this->berita->getBerita($id);
      if(!$berita) redirect('berita-admin');
      $main_view = 'admin/edit-berita';
      $this->load->view('template-admin', compact('main_view', 'berita'));
    }

    public function update(){
      if(!$this->input->post(null, TRUE)) redirect('berita-admin');
      $id_berita = $this->input->post('id_berita', TRUE);
      $berita = $this->input->post(null, TRUE);
      $berita['id_admin'] = $this->input->post('id_admin', TRUE);
      $berita['judul_berita'] = $this->input->post('judul_berita', TRUE);
      $berita['isi_berita'] = $this->input->post('isi_berita', TRUE);
      $berita['slug_berita'] = url_title($berita['judul_berita'], '-', true);
      $config = [
          'upload_path' => './assets/images/berita',
          'allowed_types' => 'jpg|gif|png',
          'max_size' => '5000'
      ];
      $this->load->library('upload', $config);
      if($this->upload->do_upload('gambar_berita')){
        $berita['gambar_berita'] = $this->upload->data('file_name');
      }
      if(!$this->berita->validationBerita()){
        $berita = (object) $berita;
        $main_view = "admin/edit-berita";
        $this->load->view('template-admin', compact('main_view', 'berita'));
        return;
      }

      $this->berita->updateBerita($id_berita, $berita);
      $this->session->set_flashdata('msg', 'Berita Berhasil Di Edit!');
      redirect('berita-admin');
    }

    public function destroy(){
      if(!$this->input->post('id_berita', TRUE)) redirect('berita-admin');
      $id_berita = $this->input->post('id_berita', TRUE);
      $file_lama = $this->input->post('gambar_berita', TRUE);
      if($this->berita->deleteBerita($id_berita)){
        unlink('assets/images/berita/'.$file_lama);
        $this->session->set_flashdata('msg', 'Berita Berhasil Di Hapus!');
        redirect('berita-admin');
      }
    }

  }
