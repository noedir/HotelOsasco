<div id="fxpagina">
    <div id="pagina">
        <h2><?php echo $conteudo['pg_titulo']; ?></h2>
        
        <?php echo form_open(current_url(),'id="formcontato"'); ?>
            <p><label>Nome:<br><input type="text" name="nome"></label></p>
            <p><label>Email:<br><input type="text" name="email"></label></p>
            <p><label>Telefone:<br><input type="text" name="telefone"></label></p>
            <p><label>Mensagem:<br><textarea name="mensagem"></textarea></label></p>
            <p><button type="submit">Enviar</button></p>
        <?php echo form_close(); ?>
            
        <div id="contato">
            <h3>Se preferir contato direto: </h3>
            <p>Corretor: <?php echo $this->session->userdata('us_nome'); ?></p>
            <p>Creci: <?php echo $this->session->userdata('us_creci'); ?></p>
            <p>Telefone: <?php echo $this->session->userdata('us_telefone'); ?></p>
            <p>Celular: <?php echo $this->session->userdata('us_celular'); ?></p>
            <p>Email: <?php echo $this->session->userdata('us_email'); ?></p>
        </div>
    </div>
</div>