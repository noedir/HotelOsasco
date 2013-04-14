<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banners extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('file');
        $this->load->model('banner_model','mod');
        $this->load->library('form_validation');
        $this->load->library('upload');
        
        if($this->session->userdata('logado') != 'sim'){
            redirect('login');
        }
    }
    
    public function index(){
        $dados = array(
            'titulo'=>'Plataforma Administrativa',
            'tela' => 'banners',
            'array_bd' => $this->mod->get_all()->result(),
        );
        $this->load->view('banner_view',$dados);
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
        redirect('banners');
    }

    public function cadbanner(){
        $this->form_validation->set_rules('link','LINK','trim|required');

        if($this->form_validation->run()){

            $input = elements(array('link','alvo','codigo'),$this->input->post());

            $file = 'foto';
            $this->upload->do_upload($file);
            $ft = $this->upload->data();

            $input['foto'] = $ft['file_name'];

            $this->mod->set_dados($input);
            redirect('banners');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'Plataforma Administrativa',
            'tela' => 'cadbanner',
        );

        $this->load->view('banner_view',$dados);
    }

    public function editbanner(){
        $this->form_validation->set_rules('link','LINK','trim|required');

        if($this->form_validation->run()){

            $input = elements(array('link','alvo','codigo'),$this->input->post());

            if($_FILES['foto']['name'] != ''){
                $file = 'foto';
                $this->upload->do_upload($file);
                $ft = $this->upload->data();
                $input['foto'] = $ft['file_name'];
            }else{
                $input['foto'] = $this->input->post('afoto');
            }

            $this->mod->set_dados($input);
            redirect('banners');
        }else{
            $this->session->set_flashdata('aviso_erro','&nbsp;');
        }
        $dados = array(
            'titulo' => 'Plataforma Administrativa',
            'tela' => 'editbanner',
            'banner' => $this->mod->get_all($this->uri->segment(3))->result(),
        );

        $this->load->view('banner_view',$dados);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */