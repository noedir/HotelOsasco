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
class Banner_model extends CI_Model{

    public function get_all($w=NULL){
        if($w != NULL){
            $this->db->where(array('ba_codigo'=>$w));
            $this->db->limit(1);
        }
        return $this->db->get('banner');
    }

    public function excluir($id){
        return $this->db->delete('banner',array('ba_codigo'=>$id));
    }

    public function set_dados($dados=NULL){
        if($dados != NULL){
            $campos = array(
                'ba_imagem' => $dados['foto'],
                'ba_link' => $dados['link'],
                'ba_alvo' => $dados['alvo'],
            );
            if($dados['codigo'] == '0'){
                $this->db->insert('banner',$campos);
            }else{
                $this->db->where(array('ba_codigo'=>$dados['codigo']));
                $this->db->update('banner',$campos);
            }
        }
    }
}