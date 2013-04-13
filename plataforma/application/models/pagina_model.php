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
class Pagina_model extends CI_Model{
    public function get_smenu(){
        return $this->db->get_where('paginas',array('pg_pai'=>'0'));
    }
    public function get_all($w=NULL){
        if($w != NULL){
            $this->db->where(array('pg_codigo'=>$w));
            $this->db->limit(1);
        }
        return $this->db->get('paginas');
    }

    public function excluir($id){
        return $this->db->delete('paginas',array('pg_codigo'=>$id));
    }
    
    public function set_status($st,$id){
        $dd = array('pg_ativo' => $st);
        $wh = array('pg_codigo' => $id);
        
        $this->db->update('paginas',$dd,$wh);
    }

    public function set_dados($dados=NULL){
        if($dados != NULL){
            $campos = array(
                'pg_menu' => $dados['titmenu'],
                'pg_slug' => $dados['slug'],
                'pg_titulo' => $dados['titulo'],
                'pg_texto' => $dados['descricao'],
                'pg_pai' => $dados['pai'],
            );
            
            $campos['pg_usuario'] = $this->session->userdata('us_codigo');
            
            if($dados['codigo'] == '0'){
                $this->db->insert('paginas',$campos);
            }else{
                $this->db->where(array('pg_codigo'=>$dados['codigo']));
                $this->db->update('paginas',$campos);
            }
        }
    }
}