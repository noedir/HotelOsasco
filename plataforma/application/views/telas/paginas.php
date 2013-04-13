<div class="container-fluid">
        <div class="row-fluid">
            <?php echo $this->load->view('includes/menu'); ?>
            <div id="content" class="span10">
                <?php if($this->session->flashdata('aviso') != ''){ ?>
                    <div class="alert alert-error">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <strong><?php echo $this->session->flashdata('aviso'); ?></strong>
                    </div>
                    <?php } ?>
                <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Páginas</h2>
						<div class="box-icon">
                                                    <?php echo anchor('paginas/cadpagina','<i class="icon-plus"></i>','class="btn btn-round" title="Cadastrar Nova Página" data-rel="tooltip"'); ?>
						</div>
					</div>
					<div class="box-content">
                                            <?php if(isset($array_bd) && count($array_bd) > 0){ ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Menu</th>
								  <th>Slug</th>
                                                                  <th>Título</th>
                                                                  <th>Ações</th>
							  </tr>
						  </thead>
                                                  <?php foreach($array_bd as $linha){ ?>
						  <tbody>
							<tr>
								<td>#<?php echo $linha->pg_codigo?></td>
								<td class="center"><?php echo $linha->pg_menu; ?></td>
                                                                <td class="center"><?php echo $linha->pg_slug; ?></td>
                                                                <td class="center"><?php echo $linha->pg_titulo; ?></td>
                                                                <td class="center">
                                                                    <?php echo anchor('paginas/editpagina/'.$linha->pg_codigo,'<i class="icon-edit icon-white"></i> Editar','class="btn btn-info"'); ?>
                                                                    <?php
                                                                    if($linha->pg_ativo == 's'){
                                                                        $bt = 'success';
                                                                    }else{
                                                                        $bt = 'inverse';
                                                                    }
                                                                    if($linha->pg_slug == 'lancamento' || $linha->pg_slug == 'localizacao' || $linha->pg_slug == 'contato' || $linha->pg_slug == 'fotos' || $linha->pg_slug == 'home'){
                                                                        
                                                                    }else{
                                                                    echo anchor('paginas/status/'.$linha->pg_codigo.'-'.$linha->pg_ativo,'<i class="icon-flag icon-white"></i> Ativo','class="btn btn-'.$bt.'"'); ?>
                                                                    <?php echo anchor('paginas/excluir/'.$linha->pg_codigo,'<i class="icon-trash icon-white"></i> Excluir','class="exc btn btn-danger"'); } ?>
								</td>
							</tr>
						  </tbody>
                                                  <?php } ?>
                                            </table>
                                            <?php }else{ ?>
                                            <h5 class="red">Nenhuma página localizada</h5>
                                            <?php
                                            }
                                            ?>
					</div>
				</div><!--/span-->

			</div><!--/row-->
            </div>
        </div><!--/fluid-row-->

        <hr>

        <footer>
            <p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
            <p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
        </footer>

</div><!--/.fluid-container-->