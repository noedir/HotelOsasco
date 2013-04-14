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
                $ac = $this->access->acesso($input)->result_array();

                if(count($ac) > 0){
                    foreach($ac as $us){
                        $this->session->set_userdata('us_codigo',$us['us_codigo']);
                        $this->session->set_userdata('us_nome',$us['us_nome']);
                        $this->session->set_userdata('us_email',$us['us_email']);
                        $this->session->set_userdata('us_senha',$us['us_senha']);
                        $this->session->set_userdata('us_telefone',$us['us_telefone']);
                        $this->session->set_userdata('us_creci',$us['us_creci']);
                        $this->session->set_userdata('us_celular',$us['us_celular']);
                        $this->session->set_userdata('us_endereco',$us['us_endereco']);
                    }
                    $this->session->set_userdata('logado','sim');
                    redirect('admin');
                }else{
                    $this->session->set_userdata('erro','Login ou senha incorretos');
                    $this->session->set_userdata('css','error');
                    $dados['result'] = 'nao';
                    $this->session->set_userdata('logado','nao');
                }
            }
        }

        $this->load->view('login_view',$dados);
    }
}