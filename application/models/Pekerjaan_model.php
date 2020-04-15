<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Pekerjaan_model extends CI_Model{

    public function getPekerjaan($id){
      return $this->db->select('*')->from('demo_pekerjaan')->join('tahun_anggaran','demo_pekerjaan.id_ta = tahun_anggaran.id_ta')->where('demo_pekerjaan.id_demo_pekerjaan', $id)->get()->row();
    }

    public function allPekerjaan(){
      return $this->db->select('*')->from('demo_pekerjaan')->join('tahun_anggaran','demo_pekerjaan.id_ta = tahun_anggaran.id_ta')->get()->result();
    }

    public function pekerjaanDefaultValues(){
      return [
        'id_ta' => '',
        'buruh_tani' => '',
        'buruh_harian_lepas' => '',
        'petani' => '',
        'peternak' => '',
        'pedagang' => '',
        'tukang_kayu' => '',
        'tukang_batu' => '',
        'penjahit' => '',
        'pns' => '',
        'pensiunan' => '',
        'tni_polri' => '',
        'perangkat_desa' => '',
        'montir' => '',
        'pengusaha' => '',
        'tukang_gunting' => '',
        'karyawan_swasta' => '',
        'karyawan_honorer' => '',
        'guru_honorer' => '',
        'nelayan' => '',
        'pedagang_keliling' => '',
        'bidan' => '',
        'pembantu_rt' => '',
        'dukun_kampung_terlatih' => '',
        'dosen_swasta' => '',
        'sopir' => '',
        'koki' => '',
        'pengemudi_bentor' => '',
        'konsultan' => '',
        'wiraswasta' => '',
        'penata_rias' => '',
        'total_pekerjaan' => ''
      ];
    }

    public function validationPekerjaan(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'id_ta',
          'label' => 'Tahun Anggaran',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'buruh_tani',
          'label' => 'Buruh Tani',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'buruh_harian_lepas',
          'label' => 'Buruh Harian Lepas',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'petani',
          'label' => 'Petani',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'peternak',
          'label' => 'Peternak',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pedagang',
          'label' => 'Pedagang',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'tukang_kayu',
          'label' => 'Tukang Kayu',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'tukang_batu',
          'label' => 'Tukang Batu',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'penjahit',
          'label' => 'Penjahit',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pns',
          'label' => 'PNS',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pensiunan',
          'label' => 'Pensiunan',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'tni_polri',
          'label' => 'TNI/POLRI',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'perangkat_desa',
          'label' => 'Perangkat Desa',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'montir',
          'label' => 'Montir',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pengusaha',
          'label' => 'Pengusaha',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'tukang_gunting',
          'label' => 'Tukang Gunting',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'karyawan_swasta',
          'label' => 'Karyawan Swasta',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'karyawan_honorer',
          'label' => 'Karyawan Honorer',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'guru_honorer',
          'label' => 'Guru Honorer',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'nelayan',
          'label' => 'Nelayan',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pedagang_keliling',
          'label' => 'Pedagang Keliling',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'bidan',
          'label' => 'Bidan',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pembantu_rt',
          'label' => 'Pembantu RT',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'dukun_kampung_terlatih',
          'label' => 'Dukun Kampung Terlatih',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pembantu_rt',
          'label' => 'Pembantu RT',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'dosen_swasta',
          'label' => 'Dosen Swasta',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'sopir',
          'label' => 'Sopir',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'koki',
          'label' => 'Koki',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'konsultan',
          'label' => 'Konsultan',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'wiraswasta',
          'label' => 'Wiraswasta',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'penata_rias',
          'label' => 'Penata Rias',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'total_pekerjaan',
          'label' => 'total Pekerjaan',
          'rules' => 'trim|required|numeric'
        ],
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function updatePekerjaan($id, $data){
      return $this->db->where('id_demo_pekerjaan', $id)->update('demo_pekerjaan', $data);
    }

    public function deletePekerjaan($id){
      return $this->db->where('id_demo_pekerjaan', $id)->delete('demo_pekerjaan');
    }

    public function insertPekerjaan($data){
      return $this->db->insert('demo_pekerjaan', $data);
    }

  }
