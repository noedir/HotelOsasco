<div class="container-fluid">
        <div class="row-fluid">
            <?php $this->load->view('includes/menu'); ?>
            <div id="content" class="span10">
                <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Cadastrar Nova Foto</h2>
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
                                                                    <span class="filename" style="-moz-user-select: none;">Nenhum arquivo selecionado</span>
                                                                    <span class="action" style="-moz-user-select: none;">Escolher arquivo</span></div>
                                                              <p><small>Máximo 1Mb.</small></p>
							  </div>
							</div>
                                                        <div class="control-group">
							  <label for="titulo" class="control-label">Título </label>
							  <div class="controls">
								<input type="text" id="titulo" class="span3 typeahead" name="titulo">
							  </div>
							</div>
                                                      <div class="control-group">
							  <label for="descricao" class="control-label">Descrição </label>
							  <div class="controls">
								<input type="descricao" id="link" class="span3 typeahead" name="descricao">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Salvar</button>
                                                          <input type="hidden" name="codigo" value="0">
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