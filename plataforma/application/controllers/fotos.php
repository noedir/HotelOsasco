<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fotos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('file');
        $this->load->model('foto_model','mod');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
    
    public function index(){
        $dados = array(
            'titulo'=>'Plataforma Administrativa',
            'tela' => 'fotos',
            'array_bd' => $this->mod->get_all()->result(),
        );
        $this->load->view('foto_view',$dados);
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
        
        redirect('fotos');
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
        redirect('fotos');
    }

    public function cadfoto(){
        $this->form_validation->set_rules('titulo','TITULO','trim|required');

        if($this->form_validation->run()){

            $input = elements(array('titulo','descricao','codigo'),$this->input->post());

            $file = 'foto';
            $this->upload->do_upload($file);
            $ft = $this->upload->data();

            $input['foto'] = $ft['file_name'];

            $this->mod->set_dados($input);
            redirect('fotos');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'Plataforma Administrativa',
            'tela' => 'cadfoto',
        );

        $this->load->view('foto_view',$dados);
    }

    public function editfoto(){
        $this->form_validation->set_rules('titulo','LINK','trim|required');

        if($this->form_validation->run()){

            $input = elements(array('titulo','descricao','codigo'),$this->input->post());

            if($_FILES['foto']['name'] != ''){
                $file = 'foto';
                $this->upload->do_upload($file);
                $ft = $this->upload->data();
                $input['foto'] = $ft['file_name'];
            }else{
                $input['foto'] = $this->input->post('afoto');
            }

            $this->mod->set_dados($input);
            redirect('fotos');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'Plataforma Administrativa',
            'tela' => 'editfoto',
            'foto' => $this->mod->get_all($this->uri->segment(3))->result(),
        );

        $this->load->view('foto_view',$dados);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */