<div id="fxrodape">
    <div id="rodape">
        <h4>Fale com <?php echo $this->session->userdata('us_nome').' - '.$this->session->userdata('us_telefone').' / '.$this->session->userdata('us_celular').' - Creci: '.$this->session->userdata('us_creci'); ?></h4>
        <img src="<?php echo base_url(); ?>image/<?php echo $this->session->userdata('us_logotipo'); ?>">
    </div>
</div>

</body>
</html>