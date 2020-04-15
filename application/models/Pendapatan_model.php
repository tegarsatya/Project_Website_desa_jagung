<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Pendapatan_model extends CI_Model{

    public function getPendapatan($id){
      return $this->db->select('*')->from('keu_pendapatan')->join('tahun_anggaran','keu_pendapatan.id_ta = tahun_anggaran.id_ta')->where('keu_pendapatan.id_keu_pendapatan', $id)->get()->row();
    }

    public function allPendapatan(){
      return $this->db->select('*')->from('keu_pendapatan')->join('tahun_anggaran','keu_pendapatan.id_ta = tahun_anggaran.id_ta')->get()->result();
    }

    public function pendapatanDefaultValues(){
      return [
        'id_ta' => '',
        'hasil_usaha_desa' => '',
        'tanah_kas_desa' => '',
        'hasil_swamas' => '',
        'hasil_pargoro' => '',
        'pungutan_desa' => '',
        'pendesah' => '',
        'bahaspadar' => '',
        'bapbn' => '',
        'add_apbd' => '',
        'bkppus' => '',
        'bkppro' => '',
        'bkpk' => '',
        'pos_hibah' => '',
        'sumpiket' => '',
        'jum_pendapatan' => ''
      ];
    }

    public function validationPendapatan(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'id_ta',
          'label' => 'Tahun Anggaran',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'jum_pendapatan',
          'label' => 'Jumlah Pendapatan',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'sumpiket',
          'label' => 'Sumbangan Pihak Ketiga',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pos_hibah',
          'label' => 'Pos Hibah',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'bkpk',
          'label' => 'Bantuan Keuangan Pemerintah Kabupaten',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'bkppro',
          'label' => 'Bantuan Keuangan Pemerintah Provinsi',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'bkppus',
          'label' => 'Bantuan Keuangan Pemerintah Pusat',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'add_apbd',
          'label' => 'Alokasi Dana Desa (ADD) APBD',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'bapbn',
          'label' => 'Bagian  Alokasi Dana Desa Pemerintah Pusat (APBN)',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'bahaspadar',
          'label' => 'Bagi Hasil Pajak Daerah dan Retribusi',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pendesah',
          'label' => 'Lain-lain Pendapatan Asli Desa yang Sah',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'pungutan_desa',
          'label' => 'Pungutan Desa',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'hasil_pargoro',
          'label' => 'Hasil Partisipasi dan Gotong Royong',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'hasil_swamas',
          'label' => 'Hasil Swadaya Masyarakat',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'tanah_kas_desa',
          'label' => 'Tanah Kas Desa',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'hasil_usaha_desa',
          'label' => 'Hasil Usaha Desa',
          'rules' => 'trim|required|numeric'
        ],
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function updatePendapatan($id, $data){
      return $this->db->where('id_keu_pendapatan', $id)->update('keu_pendapatan', $data);
    }

    public function deletePendapatan($id){
      return $this->db->where('id_keu_pendapatan', $id)->delete('keu_pendapatan');
    }

    public function insertPendapatan($data){
      return $this->db->insert('keu_pendapatan', $data);
    }

  }
