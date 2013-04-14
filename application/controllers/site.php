<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('site_model','sdb');
        
        if($this->session->userdata('us_codigo') == ''){
            $cnf = $this->sdb->get_conf()->result_array();
            foreach($cnf[0] as $k => $v){
                $this->session->set_userdata($k,$v);
            }
            $this->sdb->set_acesso();
        }
    }
    private function menu(){
        $query = $this->sdb->get_menu()->result_array();
        foreach($query as $k => $v){
            $men[$v['pg_menu']] = $v;
            $qy = $this->sdb->get_submenu($v['pg_codigo'])->result_array();
            if(count($qy) > 0){
                foreach($qy as $s){
                    $men[$v['pg_menu']]['sb'][] = $s;
                }
            }
        }
        return $men;
    }
    private function banner(){
        $query = $this->sdb->get_banner()->result_array();
        foreach($query as $k){
            $banner[] = $k;
        }
        
        return $banner;
    }
    private function paginas($slug='home'){
        $query = $this->sdb->get_pagina($slug)->result_array();
        return $query[0];
    }
    public function index(){
        $saida = array(
            'title' => 'Lançamento',
            'tela' => 'home',
            'menu' => $this->menu(),
            'banner' => $this->banner(),
            'conteudo' => $this->paginas(),
        );
        $this->load->view('site_view',$saida);
    }
    public function redir(){
        $id = $this->uri->segment(3);
        if($id != ''){
            $query = $this->sdb->up_banner($id)->result_array();
            redirect($query[0]['ba_link']);
        }
    }
    
    public function fotos(){
        header("content-type: application/json");
        $query = $this->sdb->get_foto($this->session->userdata('us_codigo'))->result_array();
        
        $saida['foto'] = $query[0]['ft_imagem'];
        $saida['titulo'] = $query[0]['ft_titulo'];
        
        echo json_encode($saida);
    }
    
    public function pagina(){
        $slug = $this->uri->segment(3);
        
        if($slug == 'contato'){
            $this->load->helper('form');
        }
        
        $saida = array(
            'title' => 'Lançamento',
            'tela' => 'home',
            'menu' => $this->menu(),
            'banner' => $this->banner(),
            'conteudo' => $this->paginas($slug),
        );
        
        switch($slug){
            case 'contato':
                $saida['tela'] = 'contato';
                break;
            case 'localizacao':
                $saida['tela'] = 'mapa';
                break;
            case 'fotos':
                $saida['tela'] = 'fotos';
                break;
            default:
                $saida['tela'] = 'home';
                break;
        }
        
        $saida['fotos'] = $this->sdb->get_fotos($this->session->userdata('us_codigo'))->result_array();
        
        $this->load->view('site_view', $saida);
    }
}