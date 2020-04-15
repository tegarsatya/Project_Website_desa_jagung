<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Agama_model extends CI_Model{

    public function getAgama($id){
      return $this->db->select('*')->from('demo_agama')->join('tahun_anggaran','demo_agama.id_ta = tahun_anggaran.id_ta')->where('demo_agama.id_demo_agama', $id)->get()->row();
    }

    public function allAgama(){
      return $this->db->select('*')->from('demo_agama')->join('tahun_anggaran','demo_agama.id_ta = tahun_anggaran.id_ta')->get()->result();
    }

    public function agamaDefaultValues(){
      return [
        'id_ta' => '',
        'islam' => '',
        'kristen_protestan' => '',
        'budha' => '',
        'hindu' => '',
        'katolik' => '',
        'total_agama' => '',
      ];
    }

    public function validationAgama(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'id_ta',
          'label' => 'Tahun Anggaran',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'total_agama',
          'label' => 'Total Agama',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'katolik',
          'label' => 'Katolik',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'hindu',
          'label' => 'Hindu',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'budha',
          'label' => 'Budha',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'kristen_protestan',
          'label' => 'Kristen Protestan',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'islam',
          'label' => 'Islam',
          'rules' => 'trim|required|numeric'
        ]
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function updateAgama($id, $data){
      return $this->db->where('id_demo_agama', $id)->update('demo_agama', $data);
    }

    public function deleteAgama($id){
      return $this->db->where('id_demo_agama', $id)->delete('demo_agama');
    }

    public function insertAgama($data){
      return $this->db->insert('demo_agama', $data);
    }

  }
