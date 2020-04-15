<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

  public function beritaHome(){
    return $this->db->select('*')->from('berita')->join('admin','berita.id_admin = admin.id_admin')->limit('4')->get()->result();
  }

  public function allBerita(){
    return $this->db->select('*')->from('berita')->join('admin','berita.id_admin = admin.id_admin')->get()->result();
  }

  public function getBerita($slug){
    return $this->db->select('*')->from('berita')->join('admin','berita.id_admin = admin.id_admin')->where('slug_berita', $slug)->get()->row();
  }

  public function searchBerita($search){
    return $this->db->select('*')->from('berita')->join('admin','berita.id_admin = admin.id_admin')->like('judul_berita', $search)->get()->result();
  }

  public function allTahunAnggaran(){
    return $this->db->get('tahun_anggaran')->result();
  }

  public function getDemoPenduduk($tahun){
    return $this->db->select('*')->from('tahun_anggaran')->join('demo_penkk','tahun_anggaran.id_ta = demo_penkk.id_ta')->where('tahun', $tahun)->get()->row();
  }

  public function getDemoPekerjaan($tahun){
    return $this->db->select('*')->from('tahun_anggaran')->join('demo_pekerjaan','tahun_anggaran.id_ta = demo_pekerjaan.id_ta')->where('tahun', $tahun)->get()->row();
  }

  public function getDemoKesejahteraan($tahun){
    return $this->db->select('*')->from('tahun_anggaran')->join('demo_kesejahkk','tahun_anggaran.id_ta = demo_kesejahkk.id_ta')->where('tahun', $tahun)->get()->row();
  }

  public function getDemoAgama($tahun){
    return $this->db->select('*')->from('tahun_anggaran')->join('demo_agama','tahun_anggaran.id_ta = demo_agama.id_ta')->where('tahun', $tahun)->get()->row();
  }

  public function getDemoPendidikan($tahun){
    return $this->db->select('*')->from('tahun_anggaran')->join('demo_pendidikan','tahun_anggaran.id_ta = demo_pendidikan.id_ta')->where('tahun', $tahun)->get()->row();
  }

  public function getPendapatan($tahun){
    return $this->db->select('*')->from('tahun_anggaran')->join('keu_pendapatan','tahun_anggaran.id_ta = keu_pendapatan.id_ta')->where('tahun', $tahun)->get()->row();
  }

  public function getBelanja($tahun){
    return $this->db->select('*')->from('tahun_anggaran')->join('keu_belanja','tahun_anggaran.id_ta = keu_belanja.id_ta')->where('tahun', $tahun)->get()->row();
  }

  public function getStrukdes($tahun){
    return $this->db->select('*')->from('tahun_anggaran')->join('struktur_desa','tahun_anggaran.id_ta = struktur_desa.id_ta')->where('tahun', $tahun)->get()->row();
  }

}
