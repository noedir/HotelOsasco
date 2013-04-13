<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{

    public function total($tbl){
        return $this->db->count_all($tbl);
    }

    public function get_acessos(){
        return $this->db->get('acesso');
    }
}