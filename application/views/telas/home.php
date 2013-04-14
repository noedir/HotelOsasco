<div id="fxpagina">
    <div id="pagina">
        <h2><?php echo $conteudo['pg_titulo']; ?></h2>
        <?php if($conteudo['pg_slug'] !== 'fotos'){ ?>
        <div class="box-left">
            <?php echo $conteudo['pg_texto']; ?>
        </div>
        <div class="box-right">
            <div id="fotosh"></div>
        </div>
        <?php }else{
            echo $conteudo['pg_texto'];
        } ?>
    </div>
</div>