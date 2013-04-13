<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cinema extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('cinema_model','mod');
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
            'tela' => 'cinema',
            'array_bd' => $this->mod->get_all()->result(),
        );
        $this->load->view('cinema_view',$dados);
    }

    public function excluir(){
        $id = $this->uri->segment(3);

        $this->mod->excluir($id);
        $this->session->set_flashdata('aviso','Excluido com sucesso');

        redirect('cinema');
    }

    public function cadcinema(){
        $this->form_validation->set_rules('titulo','TÍTULO','trim|is_unique[filmes.titulo]|required');
        $this->form_validation->set_rules('endereco','ENDERECO','trim|required|is_unique[filmes.endereco]');

        if($this->form_validation->run()){
            $input = elements(array('codigo','categoria','titulo','descricao','endereco','local','tipo'),$this->input->post());
            $input['slug'] = url_title(strtolower(convert_accented_characters($this->input->post('titulo'))));
            $this->mod->set_dados($input);
            redirect('cinema');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'zFilm Plataforma Administrativa',
            'tela' => 'cadcinema',
            'categ' => $this->mod->get_categoria()->result(),
        );

        $this->load->view('cinema_view',$dados);
    }

    public function editcinema(){
        $this->form_validation->set_rules('titulo','TÍTULO','trim|required');
        $this->form_validation->set_rules('endereco','ENDERECO','trim|required');

        if($this->form_validation->run()){
            $input = elements(array('codigo','categoria','titulo','descricao','endereco','local','tipo'),$this->input->post());
            $input['slug'] = url_title(strtolower(convert_accented_characters($this->input->post('titulo'))));
            $this->mod->set_dados($input);
            redirect('cinema');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'zFilm Plataforma Administrativa',
            'tela' => 'editcinema',
            'categ' => $this->mod->get_categoria()->result(),
            'film' => $this->mod->get_all($this->uri->segment(3))->result(),
        );

        $this->load->view('cinema_view',$dados);
    }

    public function ativo(){
        $id = $this->uri->segment(3);
        $at = $this->mod->get_all($id)->result();
        if($at[0]->ativo == '0'){
            $a = '1';
        }else{
            $a = '0';
        }
        $dados = array(
            'at' => $a,
            'codigo' => $id,
        );
        $this->mod->atv($dados);
        redirect('cinema');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */