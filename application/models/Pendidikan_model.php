<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Pendidikan_model extends CI_Model{

    public function getPendidikan($id){
      return $this->db->select('*')->from('demo_pendidikan')->join('tahun_anggaran','demo_pendidikan.id_ta = tahun_anggaran.id_ta')->where('demo_pendidikan.id_demo_pendidikan', $id)->get()->row();
    }

    public function allPendidikan(){
      return $this->db->select('*')->from('demo_pendidikan')->join('tahun_anggaran','demo_pendidikan.id_ta = tahun_anggaran.id_ta')->get()->result();
    }

    public function pendidikanDefaultValues(){
      return [
        'id_ta' => '',
        'belum_tamat_sd' => '',
        'sd' => '',
        'sltp' => '',
        'slta' => '',
        'diploma_sarjana' => '',
        'total_pendidikan' => '',
      ];
    }

    public function validationPendidikan(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'id_ta',
          'label' => 'Tahun Anggaran',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'total_pendidikan',
          'label' => 'Total Pendidikan',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'belum_tamat_sd',
          'label' => 'Belum Tamat SD',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'sd',
          'label' => 'SD',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'sltp',
          'label' => 'SLTP',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'slta',
          'label' => 'SLTA',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'diploma_sarjana',
          'label' => 'Diploma/Sarjana',
          'rules' => 'trim|required|numeric'
        ]
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function updatePendidikan($id, $data){
      return $this->db->where('id_demo_pendidikan', $id)->update('demo_pendidikan', $data);
    }

    public function deletePendidikan($id){
      return $this->db->where('id_demo_pendidikan', $id)->delete('demo_pendidikan');
    }

    public function insertPendidikan($data){
      return $this->db->insert('demo_pendidikan', $data);
    }

  }
