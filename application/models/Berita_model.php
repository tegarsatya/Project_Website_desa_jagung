<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Berita_model extends CI_Model{

    public function getBerita($id){
      return $this->db->select('*')->from('berita')->join('admin','berita.id_admin = admin.id_admin')->where('berita.id_berita', $id)->get()->row();
    }

    public function beritaDefaultValues(){
      return [
        'id_admin' => '',
        'judul_berita' => '',
        'isi_berita' => ''
      ];
    }

    public function validationBerita(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'id_admin',
          'label' => 'ID Admin',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'isi_berita',
          'label' => 'Isi',
          'rules' => 'trim|required'
        ],
        [
          'field' => 'judul_berita',
          'label' => 'Judul',
          'rules' => 'trim|required'
        ],
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function allBerita(){
      return $this->db->select('*')->from('berita')->join('admin','berita.id_admin = admin.id_admin')->get()->result();
    }

    public function updateBerita($id, $data){
      return $this->db->where('id_berita', $id)->update('berita', $data);
    }

    public function deleteBerita($id){
      return $this->db->where('id_berita', $id)->delete('berita');
    }

    public function insertBerita($data){
      return $this->db->insert('berita', $data);
    }

  }
