<div class="container-fluid">
        <div class="row-fluid">
            <?php $this->load->view('includes/menu'); ?>
            <div id="content" class="span10">
                <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Editar Foto</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                                            <?php if($this->session->flashdata('aviso')){ ?>
                                            <div class="alert alert-error">
                                                <button data-dismiss="alert" class="close" type="button">×</button>
                                                <?php echo validation_errors(); ?>
                                            </div>
                                            <?php } ?>
                                            <form class="form-horizontal" method="post" action="<?php echo current_url(); ?>" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="foto">Imagem </label>
							  <div class="controls">
								<div class="uploader" id="uniform-fileInput">
                                                                    <input type="file" name="foto" id="foto" class="input-file uniform_on" size="29" style="opacity: 0;">
                                                                    <input type="hidden" name="afoto" value="<?php echo $foto[0]->ft_imagem; ?>">
                                                                    <span class="filename" style="-moz-user-select: none;">Nenhum arquivo selecionado</span>
                                                                    <span class="action" style="-moz-user-select: none;">Escolher arquivo</span>
                                                                </div>
                                                              <p><small>Máximo 1Mb.</small></p>
                                                              <br>
                                                                <img src="../../../banner/<?php echo $foto[0]->ft_imagem; ?>">
							  </div>
							</div>
                                                        <div class="control-group">
							  <label for="titulo" class="control-label">Título </label>
							  <div class="controls">
								<input type="text" value="<?php echo $foto[0]->ft_titulo; ?>" id="titulo" class="span3 typeahead" name="titulo">
							  </div>
							</div>
                                                      <div class="control-group">
							  <label for="descricao" class="control-label">Descrição </label>
							  <div class="controls">
								<input type="text" value="<?php echo $foto[0]->ft_descricao; ?>" id="descricao" class="span3 typeahead" name="descricao">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Salvar</button>
                                                          <input type="hidden" name="codigo" value="<?php echo $foto[0]->ft_codigo; ?>">
							</div>
						  </fieldset>
						</form>
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