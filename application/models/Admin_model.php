<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Admin_model extends CI_Model{

    public function allAdmin(){
      return $this->db->get('admin')->result();
    }

    public function adminDefaultValues(){
      return [
        'hak_akses' => '',
        'username' => '',
        'password' => ''
      ];
    }

    public function validationAdmin(){
      $this->load->library('form_validation');
      $rules = [
        [
          'field' => 'username',
          'label' => 'Username',
          'rules' => 'trim|required'
        ],
        [
          'field' => 'password',
          'label' => 'Password',
          'rules' => 'trim|required'
        ],
        [
          'field' => 'hak_akses',
          'label' => 'Hak Akses',
          'rules' => 'trim|required'
        ]
      ];
      $this->form_validation->set_rules($rules);
      $this->form_validation->set_error_delimiters('<div class="text-center mb-3" style="color:red; border:1px solid red; padding:5px; margin:5px; border-radius:25px">', '</div>');
      return $this->form_validation->run();
    }

    public function deleteAdmin($id){
      return $this->db->where('id_admin', $id)->delete('admin');
    }

    public function insertAdmin($data){
      return $this->db->insert('admin', $data);
    }

  }
