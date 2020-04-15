<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Login extends CI_Controller{

    public function __construct(){
      parent::__construct();
      $this->load->model('Login_model', 'login', TRUE);
    }

    public function index(){
      if(!$this->input->post(null, TRUE)){
        $input = (object) $this->login->loginDefaultValues();
        $this->load->view('home/login', compact('input'));

        if($this->session->has_userdata('login')) redirect('admin');
      }else{
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $admin = $this->login->checkAdmin($username, $password);

        if(count($admin)){
          if ($admin->hak_akses === 'admin') {
            $data = [
              'login' => TRUE,
              'id_admin' => $admin->id_admin,
              'username' => $admin->username,
              'hak_akses' => $admin->hak_akses,
              'admin' => TRUE
            ];
          }elseif ($admin->hak_akses === 'operator') {
            $data = [
              'login' => TRUE,
              'id_admin' => $admin->id_admin,
              'username' => $admin->username,
              'hak_akses' => $admin->hak_akses,
              'operator' => TRUE
            ];
          }

          $this->session->set_userdata($data);
          $this->login->loginTerakhirAdmin($this->session->userdata('id_admin'));
          if($this->session->has_userdata('login')) redirect('admin');
        }else{
          $this->session->set_flashdata('error_msg', 'Username and password salah');
          $input = (object) $this->input->post(null, TRUE);
          $this->load->view('home/login', compact('input'));
        }
      }
    }

    public function logout(){
      $this->session->sess_destroy();
      redirect('');
    }


  }
