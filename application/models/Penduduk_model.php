<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Penduduk_model extends CI_Model{

    public function getPenduduk($id){
      return $this->db->select('*')->from('demo_penkk')->join('tahun_anggaran','demo_penkk.id_ta = tahun_anggaran.id_ta')->where('demo_penkk.id_demo_penkk', $id)->get()->row();
    }

    public function allPenduduk(){
      return $this->db->select('*')->from('demo_penkk')->join('tahun_anggaran','demo_penkk.id_ta = tahun_anggaran.id_ta')->get()->result();
    }

    public function pendudukDefaultValues(){
      return [
        'id_ta' => '',
        'laki_laki' => '',
        'laki_015' => '',
        'laki_1655' => '',
        'laki_diatas55' => '',
        'perempuan' => '',
        'perem_015' => '',
        'perem_1655' => '',
        'perem_diatas55' => '',
        'jum_pen' => '',
        'jum_kk' => ''
      ];
    }

    public function validationPenduduk(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'id_ta',
          'label' => 'Tahun Anggaran',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'laki_laki',
          'label' => 'Laki-laki',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'laki_015',
          'label' => 'Laki-laki 0-15 Tahun',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'laki_1655',
          'label' => 'Laki-laki 16-55 Tahun',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'laki_diatas55',
          'label' => 'Laki-laki Diatas 55 Tahun',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'perempuan',
          'label' => 'Perempuan',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'perem_015',
          'label' => 'Perempuan 0-15 Tahun',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'perem_1655',
          'label' => 'Perempuan 16-55 Tahun',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'perem_diatas55',
          'label' => 'Perempuan Diatas 55 Tahun',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'jum_pen',
          'label' => 'Jumlah Penduduk',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'jum_kk',
          'label' => 'Jumlah Kepala Keluarga',
          'rules' => 'trim|required|numeric'
        ]
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function updatePenduduk($id, $data){
      return $this->db->where('id_demo_penkk', $id)->update('demo_penkk', $data);
    }

    public function deletePenduduk($id){
      return $this->db->where('id_demo_penkk', $id)->delete('demo_penkk');
    }

    public function insertPenduduk($data){
      return $this->db->insert('demo_penkk', $data);
    }

  }
