<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('categoria_model','mod');
        $this->load->library('form_validation');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index(){
        $dados = array(
            'titulo'=>'zFilm Plataforma Administrativa',
            'tela' => 'categorias',
            'array_bd' => $this->mod->get_all()->result(),
        );
        $this->load->view('categoria_view',$dados);
    }

    public function excluir(){
        $id = $this->uri->segment(3);
        $c = $this->mod->get_filmes($id)->result();

        if(count($c) == 0){
            $this->mod->excluir($id);
            $this->session->set_flashdata('aviso','Excluido com sucesso');
        }else{
            $this->session->set_flashdata('aviso','Não foi possível excluir. Existem '.count($c).' filmes nessa categoria.');
        }
        redirect('categorias');
    }

    public function cadcategoria(){
        $this->form_validation->set_rules('categoria','CATEGORIA','trim|is_unique[categoria.categoria]|required');

        if($this->form_validation->run()){

            $input = elements(array('categoria','codigo'),$this->input->post());

            $input['slug'] = url_title(strtolower(convert_accented_characters($this->input->post('categoria'))));

            $this->mod->set_dados($input);
            redirect('categorias');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'zFilm Plataforma Administrativa',
            'tela' => 'cadcategoria',
        );

        $this->load->view('categoria_view',$dados);
    }

    public function editcategoria(){
        $this->form_validation->set_rules('categoria','CATEGORIA','trim|required');

        if($this->form_validation->run()){

            $input = elements(array('categoria','codigo'),$this->input->post());

            $input['slug'] = url_title(strtolower(convert_accented_characters($this->input->post('categoria'))));

            $this->mod->set_dados($input);
            redirect('categorias');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'zFilm Plataforma Administrativa',
            'tela' => 'editcategoria',
            'categoria' => $this->mod->get_all($this->uri->segment(3))->result(),
        );

        $this->load->view('categoria_view',$dados);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */