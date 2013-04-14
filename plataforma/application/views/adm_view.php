<?php
$this->load->view('includes/header');
$this->load->view('includes/topo');
if(isset($tela) && $tela != ""){
    $this->load->view('telas/'.$tela);
}else{
    $this->load->view('telas/adm');
}
$this->load->view('includes/rodape');
?>