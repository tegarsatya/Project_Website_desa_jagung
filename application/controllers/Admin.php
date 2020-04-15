<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Admin extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!$this->session->has_userdata('login')) redirect('');
      $this->load->model('Admin_model', 'admin', TRUE);
    }

    public function index(){
      $main_view = 'admin/index';
      $this->load->view('template-admin', compact('main_view'));
    }

    public function adminOperator(){
      $admins = $this->admin->allAdmin();
      $input = (object) $this->admin->adminDefaultValues();
      $main_view = 'admin/admin';
      $this->load->view('template-admin', compact('main_view', 'admins', 'input'));
    }

    public function store(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post(null, TRUE)) redirect('admin-operator');
      $input = (object) $this->input->post(null, TRUE);
      if(!$this->admin->validationAdmin()){
        $admins = $this->admin->allAdmin();
        $main_view = "admin/admin";
        $this->load->view('template-admin', compact('main_view', 'admins', 'input'));
        return;
      }
      $admin['hak_akses'] = $input->hak_akses;
      $admin['username'] = $input->username;
      $admin['password'] = $input->password;
      $this->admin->insertAdmin($admin);

      $this->session->set_flashdata('msg', 'Admin Berhasil Di Tambahkan!');
      redirect('admin-operator');
    }

    public function destroy(){
      if(!$this->session->has_userdata('admin')) redirect('admin');
      if(!$this->input->post('id_admin', TRUE)) redirect('admin-operator');
      $id_admin = $this->input->post('id_admin', TRUE);
      if($this->admin->deleteAdmin($id_admin)){
        $this->session->set_flashdata('msg', 'Admin Berhasil Di Hapus!');
        redirect('admin-operator');
      }
    }

  }
