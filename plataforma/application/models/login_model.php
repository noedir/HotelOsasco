<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function acesso($dados){
        $data = array(
            'us_email'=>$dados['username'],
            'us_senha'=>$dados['senha'],
        );

        $this->db->where($data);

        return $this->db->get('usuario');
    }
}