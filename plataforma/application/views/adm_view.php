<?php
if($this->session->userdata('login') != 'sim'){
    redirect('login');
}
echo $this->load->view('includes/header');
echo $this->load->view('includes/topo');
if(isset($tela) && $tela != ""){
    echo $this->load->view('telas/'.$tela);
}else{
    echo $this->load->view('telas/adm');
}
echo $this->load->view('includes/rodape');
?>