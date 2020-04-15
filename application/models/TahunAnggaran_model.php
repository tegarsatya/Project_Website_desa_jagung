<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class TahunAnggaran_model extends CI_Model{

    public function getTahan($id){
      return $this->db->where('id_ta', $id)->get('tahun_anggaran')->row();
    }

    public function allTahan(){
      return $this->db->get('tahun_anggaran')->result();
    }

    public function tahanDefaultValues(){
      return [
        'tahun' => ''
      ];
    }

    public function updateTahan($id, $data){
      return $this->db->where('id_ta', $id)->update('tahun_anggaran', $data);
    }

    public function deleteTahan($id){
      return $this->db->where('id_ta', $id)->delete('tahun_anggaran');
    }

    public function validationTahan(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'tahun',
          'label' => 'Tahun',
          'rules' => 'trim|required|numeric'
        ]
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function insertTahan($data){
      return $this->db->insert('tahun_anggaran', $data);
    }


  }
