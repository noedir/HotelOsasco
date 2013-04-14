<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model','adm');
    }
    public function index(){
        $dados = array(
            'titulo'=>'Plataforma Administrativa',
            'tela' => 'adm',
            'acessos' => $this->adm->get_acessos()->result(),
            'fotos' => $this->adm->total('fotos'),
            'banner' => $this->adm->total('banner'),
        );
        if($this->session->userdata('logado') != 'sim'){
            redirect('login');
        }else{
            $this->load->view('adm_view',$dados);
        }
    }

    public function sair(){
        $this->session->sess_destroy();
        redirect('login');
    }
}