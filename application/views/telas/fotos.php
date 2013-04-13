<div id="fxpagina">
    <div id="pagina">
        <h2><?php echo $conteudo['pg_titulo']; ?></h2>
        
        <?php if(count($fotos) > 0){ ?>
        <div id="fotos">
            <ul>
                <?php
                foreach($fotos as $ft){
                    echo '<li><a href="'.base_url().'/fotos/'.$ft['ft_imagem'].'" alt="Fotos" title="'.$ft['ft_titulo'].'" rel="prettyPhoto[fotos]"><img src="'.base_url().'/fotos/'.$ft['ft_imagem'].'"></a></li>';
                }
                ?>
                <li></li>
            </ul>
        </div>
        <?php }else{ ?>
        <p>Nenhuma foto cadastrada até o momento.</p>
        <?php }?>
    </div>
</div>