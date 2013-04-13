<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gerentes extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('gerente_model','mod');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $dados = array(
            'titulo'=>'Plataforma Administrativa',
            'tela' => 'gerentes',
            'array_bd' => $this->mod->get_all()->result(),
        );
        $this->load->view('gerente_view',$dados);
    }

    public function excluir(){
        $id = $this->uri->segment(3);
        $c = $this->mod->get_all()->result();

        if(count($c) > 1){
            $this->mod->excluir($id);
            $this->session->set_flashdata('aviso','Excluido com sucesso');
        }else{
            $this->session->set_flashdata('aviso','Não foi possível excluir. Você só tem UM gerente');
        }
        redirect('gerentes');
    }

    public function cadgerente(){
        $this->form_validation->set_rules('login','LOGIN','trim|is_unique[admin.ad_login]|required|valid_email');
        $this->form_validation->set_rules('senha','SENHA','trim|required');

        if($this->form_validation->run()){
            $input = elements(array('nome','login','senha','codigo'),$this->input->post());
            $this->mod->set_dados($input);
            redirect('gerentes');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'zFilm Plataforma Administrativa',
            'tela' => 'cadgerente',
        );

        $this->load->view('gerente_view',$dados);
    }

    public function editgerente(){
        $this->form_validation->set_rules('email','LOGIN','trim|required|valid_email');

        if($this->form_validation->run()){
            $input = elements(array('nome','email','telefone','celular','creci','senha','asenha','codigo'),$this->input->post());
            $this->mod->set_dados($input);
            redirect('gerentes');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'zFilm Plataforma Administrativa',
            'tela' => 'editgerente',
            'gerente' => $this->mod->get_all($this->uri->segment(3))->result(),
        );

        $this->load->view('gerente_view',$dados);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */