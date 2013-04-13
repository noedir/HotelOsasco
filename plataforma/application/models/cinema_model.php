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
class Cinema_model extends CI_Model{

    public function get_all($w=NULL){
        if($w != NULL){
            $this->db->where(array('codigo'=>$w));
            $this->db->limit(1);
        }
        $this->db->where(array('tipo'=>'cinema'));
        $this->db->order_by('titulo');
        return $this->db->get('filmes');
    }

    public function get_categoria(){
        $this->db->order_by('categoria');
        return $this->db->get('categoria');
    }

    public function excluir($id){
        return $this->db->delete('filmes',array('codigo'=>$id));
    }

    public function set_dados($dados=NULL){
        if($dados != NULL){
            $campos = array(
                'categoria' => $dados['categoria'],
                'titulo' => $dados['titulo'],
                'descricao' => $dados['descricao'],
                'endereco' => $dados['endereco'],
                'slug' => $dados['slug'],
                'local' => $dados['local'],
                'tipo' => $dados['tipo'],
            );
            if($dados['codigo'] == '0'){
                $this->db->insert('filmes',$campos);
            }else{
                $this->db->where(array('codigo'=>$dados['codigo']));
                $this->db->update('filmes',$campos);
            }
        }
    }

    public function atv($dados=NULL){
        if($dados != NULL){
            $campos = array(
                'ativo' => $dados['at'],
            );
            $this->db->where(array('codigo'=>$dados['codigo']));
            $this->db->update('filmes',$campos);
        }
    }
}