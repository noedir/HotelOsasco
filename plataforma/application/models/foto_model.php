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
class Foto_model extends CI_Model{

    public function get_all($w=NULL){
        if($w != NULL){
            $this->db->where(array('ft_codigo'=>$w));
            $this->db->limit(1);
        }
        return $this->db->get('fotos');
    }

    public function excluir($id){
        return $this->db->delete('fotos',array('ft_codigo'=>$id));
    }
    
    public function set_status($st,$id){
        $dd = array('ft_ativo' => $st);
        $wh = array('ft_codigo' => $id);
        
        $this->db->update('fotos',$dd,$wh);
    }

    public function set_dados($dados=NULL){
        if($dados != NULL){
            $campos = array(
                'ft_imagem' => $dados['foto'],
                'ft_titulo' => $dados['titulo'],
                'ft_descricao' => $dados['descricao'],
            );
            if($dados['codigo'] == '0'){
                $this->db->insert('fotos',$campos);
            }else{
                $this->db->where(array('ft_codigo'=>$dados['codigo']));
                $this->db->update('fotos',$campos);
            }
        }
    }
}