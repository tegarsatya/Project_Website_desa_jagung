<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Login_model extends CI_Model{

    // Pengecekan username & password admin
    public function checkAdmin($username, $password){
      return $this->db->where('username', $username)->where('password', $password)->get('admin')->row();
    }

    // Nilai bawaan form login
    public function loginDefaultValues(){
      return [
        'username' => '',
        'password' => ''
      ];
    }

    // Set login terakhir admin
    public function loginTerakhirAdmin($id){
      $sql = "update admin set terakhir_login = NOW() where id_admin = '$id'";
      return $this->db->query($sql);
    }

  }
