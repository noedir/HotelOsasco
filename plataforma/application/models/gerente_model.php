<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gerente_model extends CI_Model{

    public function get_all($w=NULL){
        if($w != NULL){
            $this->db->where(array('us_codigo'=>$w));
            $this->db->limit(1);
        }
        return $this->db->get('usuario');
    }

    public function set_dados($dados=NULL){
        if($dados != NULL){
            $campos = array(
                'us_nome' => $dados['nome'],
                'us_email' => $dados['email'],
                'us_telefone' => $dados['telefone'],
                'us_celular' => $dados['celular'],
                'us_creci' => $dados['creci'],
            );
            if($dados['codigo'] == '0'){
                $snh = sha1(md5($dados['login']).':'.md5($dados['senha']));
                $campos['us_senha'] = $snh;
                $this->db->insert('usuario',$campos);
            }else{
                if($dados['senha'] == ''){
                    $snh = $dados['asenha'];
                }else{
                    $snh = sha1(md5($dados['login']).':'.md5($dados['senha']));
                }
                $campos['us_senha'] = $snh;
                $this->db->where(array('us_codigo'=>$dados['codigo']));
                $this->db->update('usuario',$campos);
            }
        }
    }
}