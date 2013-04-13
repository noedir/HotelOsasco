<?php
if($this->session->userdata('login') != 'sim'){
    redirect('login');
}

$this->load->view('includes/header');
$this->load->view('includes/topo');
$this->load->view('telas/'.$tela);
$this->load->view('includes/rodape');
?>