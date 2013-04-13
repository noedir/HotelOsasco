<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paginas extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('file');
        $this->load->model('pagina_model','mod');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
    
    public function index(){
        $dados = array(
            'titulo'=>'Plataforma Administrativa',
            'tela' => 'paginas',
            'array_bd' => $this->mod->get_all()->result(),
        );
        $this->load->view('pagina_view',$dados);
    }
    
    public function status(){
        $tp = explode('-',$this->uri->segment(3));
        $cd = $tp[0];
        $st = $tp[1];
        
        if($st == 's'){
            $this->mod->set_status('n',$cd);
        }else{
            $this->mod->set_status('s',$cd);
        }
        
        redirect('paginas');
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
        redirect('paginas');
    }

    public function cadpagina(){
        $this->form_validation->set_rules('menu','MENU','is_unique[paginas.pg_menu]');
        $this->form_validation->set_rules('titmenu','TITULO DO MENU','trim|required');
        $this->form_validation->set_rules('titulo','TITULO','trim|required');
        $this->form_validation->set_rules('descricao','TEXTO','trim|required');

        if($this->form_validation->run()){

            $input = elements(array('pai','titmenu','titulo','descricao','codigo'),$this->input->post());
            
            $sl = explode('-',$input['menu']);
            
            if($sl[0] > 0){
                $input['slug'] = url_title(strtolower(convert_accented_characters($sl[1].'-'.$this->input->post('titmenu'))));
            }else{
                $input['slug'] = url_title(strtolower(convert_accented_characters($this->input->post('titmenu'))));
            }
            $input['pai'] = $sl[0];

            $this->mod->set_dados($input);
            redirect('paginas');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'Plataforma Administrativa',
            'tela' => 'cadpagina',
            'smenu' => $this->mod->get_smenu()->result_array(),
        );

        $this->load->view('pagina_view',$dados);
    }

    public function editpagina(){
        $this->form_validation->set_rules('titmenu','TITULO DO MENU','trim|required');
        $this->form_validation->set_rules('titulo','TITULO','trim|required');
        $this->form_validation->set_rules('descricao','TEXTO','trim|required');

        if($this->form_validation->run()){

            $input = elements(array('pai','titmenu','titulo','descricao','codigo'),$this->input->post());
            $sl = explode('-',$input['pai']);
            if($sl[0] > 0){
                $input['slug'] = url_title(strtolower(convert_accented_characters($sl[1].'-'.$this->input->post('titmenu'))));
            }else{
                $input['slug'] = url_title(strtolower(convert_accented_characters($this->input->post('titmenu'))));
            }
            $input['pai'] = $sl[0];
            
            $this->mod->set_dados($input);
            redirect('paginas');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'Plataforma Administrativa',
            'tela' => 'editpagina',
            'pag' => $this->mod->get_all($this->uri->segment(3))->result(),
            'smenu' => $this->mod->get_smenu()->result_array(),
        );

        $this->load->view('pagina_view',$dados);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */