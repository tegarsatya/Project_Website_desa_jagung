<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Pekerjaan extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('Pekerjaan_model', 'pekerjaan', TRUE);
    }

    public function index(){
      $pekerjaans = $this->pekerjaan->allPekerjaan();
      $input = (object) $this->pekerjaan->pekerjaanDefaultValues();
      $main_view = 'admin/demo-pekerjaan';
      $this->load->view('template-admin', compact('main_view', 'pekerjaans', 'input'));
    }

    public function store(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('pekerjaan');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->pekerjaan->validationPekerjaan()){
        $pekerjaans = $this->pekerjaan->allPekerjaan();
        $main_view = "admin/demo-pekerjaan";
        $this->load->view('template-admin', compact('main_view', 'pekerjaans', 'input'));
        return;
      }
      $pekerjaan['id_ta'] = $input->id_ta;
      $pekerjaan['total_pekerjaan'] = $input->total_pekerjaan;
      $pekerjaan['penata_rias'] = $input->penata_rias;
      $pekerjaan['wiraswasta'] = $input->wiraswasta;
      $pekerjaan['konsultan'] = $input->konsultan;
      $pekerjaan['pengemudi_bentor'] = $input->pengemudi_bentor;
      $pekerjaan['koki'] = $input->koki;
      $pekerjaan['sopir'] = $input->sopir;
      $pekerjaan['dosen_swasta'] = $input->dosen_swasta;
      $pekerjaan['dukun_kampung_terlatih'] = $input->dukun_kampung_terlatih;
      $pekerjaan['pembantu_rt'] = $input->pembantu_rt;
      $pekerjaan['bidan'] = $input->bidan;
      $pekerjaan['pedagang_keliling'] = $input->pedagang_keliling;
      $pekerjaan['nelayan'] = $input->nelayan;
      $pekerjaan['guru_honorer'] = $input->guru_honorer;
      $pekerjaan['karyawan_honorer'] = $input->karyawan_honorer;
      $pekerjaan['karyawan_swasta'] = $input->karyawan_swasta;
      $pekerjaan['tukang_gunting'] = $input->tukang_gunting;
      $pekerjaan['pengusaha'] = $input->pengusaha;
      $pekerjaan['montir'] = $input->montir;
      $pekerjaan['perangkat_desa'] = $input->perangkat_desa;
      $pekerjaan['tni_polri'] = $input->tni_polri;
      $pekerjaan['pensiunan'] = $input->pensiunan;
      $pekerjaan['pns'] = $input->pns;
      $pekerjaan['penjahit'] = $input->penjahit;
      $pekerjaan['tukang_batu'] = $input->tukang_batu;
      $pekerjaan['tukang_kayu'] = $input->tukang_kayu;
      $pekerjaan['pedagang'] = $input->pedagang;
      $pekerjaan['peternak'] = $input->peternak;
      $pekerjaan['petani'] = $input->petani;
      $pekerjaan['buruh_harian_lepas'] = $input->buruh_harian_lepas;
      $pekerjaan['buruh_tani'] = $input->buruh_tani;
      $this->pekerjaan->insertPekerjaan($pekerjaan);

      $this->session->set_flashdata('msg', 'Pekerjaan Di Tambahkan!');
      redirect('pekerjaan');
    }

    public function edit($id){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      $pekerjaan = $this->pekerjaan->getPekerjaan($id);
      if(!$pekerjaan) redirect('pekerjaan');
      $main_view = 'admin/edit-demo-pekerjaan';
      $this->load->view('template-admin', compact('main_view', 'pekerjaan'));
    }

    public function update(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('pekerjaan');
      $id_demo_pekerjaan = $this->input->post('id_demo_pekerjaan', TRUE);
      $pekerjaan = $this->input->post(null, TRUE);
      $pekerjaan['id_ta'] = $this->input->post('id_ta', TRUE);
      $pekerjaan['buruh_tani'] = $this->input->post('buruh_tani', TRUE);
      $pekerjaan['buruh_harian_lepas'] = $this->input->post('buruh_harian_lepas', TRUE);
      $pekerjaan['petani'] = $this->input->post('petani', TRUE);
      $pekerjaan['peternak'] = $this->input->post('peternak', TRUE);
      $pekerjaan['pedagang'] = $this->input->post('pedagang', TRUE);
      $pekerjaan['tukang_kayu'] = $this->input->post('tukang_kayu', TRUE);
      $pekerjaan['tukang_batu'] = $this->input->post('tukang_batu', TRUE);
      $pekerjaan['pns'] = $this->input->post('pns', TRUE);
      $pekerjaan['pensiunan'] = $this->input->post('pensiunan', TRUE);
      $pekerjaan['tni_polri'] = $this->input->post('tni_polri', TRUE);
      $pekerjaan['perangkat_desa'] = $this->input->post('perangkat_desa', TRUE);
      $pekerjaan['montir'] = $this->input->post('montir', TRUE);
      $pekerjaan['pengusaha'] = $this->input->post('pengusaha', TRUE);
      $pekerjaan['tukang_gunting'] = $this->input->post('tukang_gunting', TRUE);
      $pekerjaan['karyawan_swasta'] = $this->input->post('karyawan_swasta', TRUE);
      $pekerjaan['karyawan_honorer'] = $this->input->post('karyawan_honorer', TRUE);
      $pekerjaan['guru_honorer'] = $this->input->post('guru_honorer', TRUE);
      $pekerjaan['nelayan'] = $this->input->post('nelayan', TRUE);
      $pekerjaan['pedagang_keliling'] = $this->input->post('pedagang_keliling', TRUE);
      $pekerjaan['bidan'] = $this->input->post('bidan', TRUE);
      $pekerjaan['pembantu_rt'] = $this->input->post('pembantu_rt', TRUE);
      $pekerjaan['dukun_kampung_terlatih'] = $this->input->post('dukun_kampung_terlatih', TRUE);
      $pekerjaan['dosen_swasta'] = $this->input->post('dosen_swasta', TRUE);
      $pekerjaan['sopir'] = $this->input->post('sopir', TRUE);
      $pekerjaan['koki'] = $this->input->post('koki', TRUE);
      $pekerjaan['pengemudi_bentor'] = $this->input->post('pengemudi_bentor', TRUE);
      $pekerjaan['konsultan'] = $this->input->post('konsultan', TRUE);
      $pekerjaan['wiraswasta'] = $this->input->post('wiraswasta', TRUE);
      $pekerjaan['penata_rias'] = $this->input->post('penata_rias', TRUE);
      $pekerjaan['total_pekerjaan'] = $this->input->post('total_pekerjaan', TRUE);

      if(!$this->pekerjaan->validationPekerjaan()){
        $pekerjaan = (object) $pekerjaan;
        $main_view = "admin/edit-demo-pekerjaan";
        $this->load->view('template-admin', compact('main_view', 'pekerjaan'));
        return;
      }

      $this->pekerjaan->updatePekerjaan($id_demo_pekerjaan, $pekerjaan);
      $this->session->set_flashdata('msg', 'Pekerjaan Berhasil Di Edit!');
      redirect('pekerjaan');
    }

    public function destroy(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post('id_demo_pekerjaan', TRUE)) redirect('pekerjaan');
      $id_demo_pekerjaan = $this->input->post('id_demo_pekerjaan', TRUE);
      if($this->pekerjaan->deletePekerjaan($id_demo_pekerjaan)){
        $this->session->set_flashdata('msg', 'Pekerjaan Berhasil Di Hapus!');
        redirect('pekerjaan');
      }
    }


  }
