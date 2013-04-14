<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_model extends CI_Model {
    public function get_menu(){
        return $this->db->get_where('paginas',array('pg_pai'=>'0','pg_ativo'=>'s'));
    }
    public function get_submenu($id){
        return $this->db->get_where('paginas',array('pg_pai'=>$id,'pg_ativo'=>'s'));
    }
    public function get_conf(){
        return $this->db->get('usuario');
    }
    public function get_banner(){
        return $this->db->get_where('banner',array('ba_ativo'=>'s'));
    }
    public function set_acesso(){
        $this->db->set('ac_visitas','ac_visitas + 1', FALSE);
        $this->db->where('ac_codigo','1');
        $this->db->update('acesso');
    }
    public function up_banner($id=NULL){
        if($id != NULL){
            $this->db->set('ba_clicks','ba_clicks + 1', FALSE);
            $this->db->where('ba_codigo',$id);
            $this->db->update('banner');
            
            return $this->db->get_where('banner',array('ba_codigo'=>$id));
        }
    }
    public function get_pagina($slug='home'){
        return $this->db->get_where('paginas',array('pg_slug'=>$slug,'pg_ativo'=>'s'));
    }
    public function get_fotos($id){
        return $this->db->get_where('fotos',array('ft_usuario'=>$id,'ft_ativo'=>'s'));
    }
    public function get_foto(){
        return $this->db->query("SELECT * FROM fotos WHERE ft_ativo = 's' ORDER BY RAND() LIMIT 1");
    }
}