<?php
$this->load->view('includes/header');
if(isset($tela) && $tela != ""){
    $this->load->view('telas/'.$tela);
}else{
    $this->load->view('telas/login');
}
$this->load->view('includes/rodape');
?>