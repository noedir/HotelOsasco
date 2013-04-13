<!-- Topo do site -->
<div id="fxtopo">
    <div id="topo">
        <?php echo anchor(index_page(),'<img id="logo" src="'.base_url().'image/'.$this->session->userdata('us_logotipo').'">'); ?>
        <div id="social">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style ">
                <a class="addthis_button_preferred_1"></a>
                <a class="addthis_button_preferred_2"></a>
                <a class="addthis_button_preferred_3"></a>
                <a class="addthis_button_preferred_4"></a>
                <a class="addthis_button_compact"></a>
                <a class="addthis_counter addthis_bubble_style"></a>
            </div>
            <!-- AddThis Button END -->
        </div>
        <ul class="menu">
                <?php foreach($menu as $mn => $v){
                    echo '<li>'.anchor('site/pagina/'.$v['pg_slug'],$v['pg_menu']);
                    if(isset($v['sb'])){
                        echo '<ul>';
                        foreach($v['sb'] as $k){
                            echo '<li>'.anchor('site/pagina/'.$k['pg_slug'],$k['pg_menu']).'</li>';
                        }
                        echo '</ul>';
                    }
                    echo '</li>';
                } ?>
        </ul>
    </div>
</div>

<!-- Área do banner -->
<div id="fxbanner">
    <div id="container">
        <div id="content">
            <div id="banner">
                <ul>
                    <?php
                    foreach($banner as $ban){
                        if($ban['ba_link'] != ""){
                            echo '<li>';
                            echo anchor('site/redir/'.$ban['ba_codigo'],"<img src=\"".base_url()."banner/".$ban['ba_imagem']."\">",'target="'.$ban['ba_alvo'].'"');
                            echo "</li>\n\t\t\t";
                        }else{
                            echo "<li><img src=\"".base_url()."banner/".$ban['ba_imagem']."\"></li>\n\t\t\t";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>