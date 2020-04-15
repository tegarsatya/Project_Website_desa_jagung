<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class StrukturDesa_model extends CI_Model{

    public function getStrukdes($id){
      return $this->db->select('*')->from('struktur_desa')->join('tahun_anggaran','struktur_desa.id_ta = tahun_anggaran.id_ta')->where('struktur_desa.id_struktur_desa', $id)->get()->row();
    }

    public function strukdesDefaultValues(){
      return [
        'id_ta' => ''
      ];
    }

    public function validationStrukdes(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'id_ta',
          'label' => 'Tahun Anggaran',
          'rules' => 'trim|required|numeric'
        ]
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function allStrukdes(){
      return $this->db->select('*')->from('struktur_desa')->join('tahun_anggaran','struktur_desa.id_ta = tahun_anggaran.id_ta')->get()->result();
    }

    public function updateStrukdes($id, $data){
      return $this->db->where('id_struktur_desa', $id)->update('struktur_desa', $data);
    }

    public function deleteStrukdes($id){
      return $this->db->where('id_struktur_desa', $id)->delete('struktur_desa');
    }

    public function insertStrukdes($data){
      return $this->db->insert('struktur_desa', $data);
    }

  }
