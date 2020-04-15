<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Kesejahteraan_model extends CI_Model{

    public function getKesejahteraan($id){
      return $this->db->select('*')->from('demo_kesejahkk')->join('tahun_anggaran','demo_kesejahkk.id_ta = tahun_anggaran.id_ta')->where('demo_kesejahkk.id_demo_kesejahkk', $id)->get()->row();
    }

    public function allKesejahteraan(){
      return $this->db->select('*')->from('demo_kesejahkk')->join('tahun_anggaran','demo_kesejahkk.id_ta = tahun_anggaran.id_ta')->get()->result();
    }

    public function kesejahteraanDefaultValues(){
      return [
        'id_ta' => '',
        'pra_sejahtera' => '',
        'sejahtera' => '',
        'kaya' => '',
        'sedang' => '',
        'miskin' => '',
        'total_kk' => '',
      ];
    }

    public function validationKesejahteraan(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'id_ta',
          'label' => 'Tahun Anggaran',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'total_kk',
          'label' => 'Total KK',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'miskin',
          'label' => 'Miskin',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'sedang',
          'label' => 'Sedang',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'kaya',
          'label' => 'Kaya',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'sejahtera',
          'label' => 'Sejahtera',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pra_sejahtera',
          'label' => 'Pra Sejahtera',
          'rules' => 'trim|required|numeric'
        ]
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function updateKesejahteraan($id, $data){
      return $this->db->where('id_demo_kesejahkk', $id)->update('demo_kesejahkk', $data);
    }

    public function deleteKesejahteraan($id){
      return $this->db->where('id_demo_kesejahkk', $id)->delete('demo_kesejahkk');
    }

    public function insertKesejahteraan($data){
      return $this->db->insert('demo_kesejahkk', $data);
    }

  }
