<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model','access');
    }

    public function index(){
        $dados = array(
            'titulo'=>'Plataforma Administrativa',
            'tela' => 'login',
        );

        if($this->input->post('username') != ''){
            $input = elements(array('username','password'), $this->input->post());

            if(count($input) > 0){
                $input['senha'] = sha1(md5($input['username']).":".md5($input['password']));
                $ac = $this->access->acesso($input)->result();

                if($ac){
                    foreach($ac as $us => $va){
                        $this->session->set_userdata($va,$va);
                    }
                    $this->session->set_userdata('login','sim');
                    
                }else{
                    $this->session->set_userdata('erro','Login ou senha incorretos');
                    $this->session->set_userdata('css','error');
                    $dados['result'] = 'nao';
                }
            }
        }

        $this->load->view('login_view',$dados);
    }
}