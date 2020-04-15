<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Belanja_model extends CI_Model{

    public function getBelanja($id){
      return $this->db->select('*')->from('keu_belanja')->join('tahun_anggaran','keu_belanja.id_ta = tahun_anggaran.id_ta')->where('keu_belanja.id_keu_belanja', $id)->get()->row();
    }

    public function allBelanja(){
      return $this->db->select('*')->from('keu_belanja')->join('tahun_anggaran','keu_belanja.id_ta = tahun_anggaran.id_ta')->get()->result();
    }

    public function belanjaDefaultValues(){
      return [
        'id_ta' => '',
        'apbd_belanja_pegawai' => '',
        'apbd_belanja_bajas' => '',
        'apbd_belanja_modal' => '',
        'apbd_total' => '',
        'apbn_belanja_pegawai' => '',
        'apbn_belanja_bajas' => '',
        'apbn_belanja_modal' => '',
        'jumlah_belanja' => ''
      ];
    }

    public function validationBelanja(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'id_ta',
          'label' => 'Tahun Anggaran',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'apbd_belanja_pegawai',
          'label' => 'APBD - Belanja Pegawai',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'apbd_belanja_bajas',
          'label' => 'APBD - Belanja Barang & Jasa',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'apbd_belanja_modal',
          'label' => 'APBD - Belanja Modal',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'apbd_total',
          'label' => 'Total APBD',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'apbn_belanja_pegawai',
          'label' => 'APBN - Belanja Pegawai',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'apbn_belanja_bajas',
          'label' => 'APBN - Belanja Barang & Jasa',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'apbn_belanja_modal',
          'label' => 'APBN - Belanja Modal',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'jumlah_belanja',
          'label' => 'Jumlah Belanja',
          'rules' => 'trim|required|numeric'
        ]
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function updateBelanja($id, $data){
      return $this->db->where('id_keu_belanja', $id)->update('keu_belanja', $data);
    }

    public function deleteBelanja($id){
      return $this->db->where('id_keu_belanja', $id)->delete('keu_belanja');
    }

    public function insertBelanja($data){
      return $this->db->insert('keu_belanja', $data);
    }

  }
