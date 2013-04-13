<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Banner_model = Classe para gerenciamento da base de dados banner
 *
 * @get_all = Método para pegar todos dados
 * @get_all => $w = ID para retornar somente um registro
 *
 * @excluir = Exclui um registro
 *
 * @set_dados = Cadastra ou atualiza as informações
 * @campos = array = campos que serão cadastrados ou atualizados
 * @snh = string = Campo com a senha. Deve ser utilizado o formato sha1(md5(login).":".md5(senha)) para mais segurança na senha
 */
class Categoria_model extends CI_Model{

    public function get_all($w=NULL){
        if($w != NULL){
            $this->db->where(array('codigo'=>$w));
        }
        return $this->db->get('categoria');
    }

    public function get_filmes($c){
        $this->db->where(array('categoria'=>$c));
        return $this->db->get('filmes');
    }

    public function excluir($id){
        return $this->db->delete('categoria',array('codigo'=>$id));
    }

    public function set_dados($dados=NULL){
        if($dados != NULL){
            $campos = array(
                'categoria' => $dados['categoria'],
                'slug' => $dados['slug'],
            );
            if($dados['codigo'] == '0'){
                $this->db->insert('categoria',$campos);
            }else{
                $this->db->where(array('codigo'=>$dados['codigo']));
                $this->db->update('categoria',$campos);
            }
        }
    }
}