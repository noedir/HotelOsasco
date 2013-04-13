<?php
$this->load->view('includes/header');
$this->load->view('includes/topo');
if(isset($tela) && $tela != ''){
    $this->load->view('telas/'.$tela);
}else{
    $this->load->view('tela/home');
}
$this->load->view('includes/rodape');