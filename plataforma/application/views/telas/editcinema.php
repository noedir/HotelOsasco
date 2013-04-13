<div class="container-fluid">
        <div class="row-fluid">
            <?php $this->load->view('includes/menu'); ?>
            <div id="content" class="span10">
                <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Editar Cinema</h2>
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
                                            <form class="form-horizontal" method="post" action="<?php echo current_url(); ?>">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="titulo">Título </label>
							  <div class="controls">
                                                              <div class="input-prepend">
								<input type="text" name="titulo" id="titulo" value="<?php echo $film[0]->titulo; ?>">
                                                              </div>
							  </div>
							</div>
                                                        <div class="control-group">
							  <label class="control-label" for="descricao">Descrição </label>
							  <div class="controls">
                                                              <div class="input-prepend">
								  <input type="text" name="descricao" size="12" id="descricao" value="<?php echo $film[0]->descricao; ?>">
                                                              </div>
                                                          </div>
							</div>
                                                        <div class="control-group">
							  <label class="control-label" for="endereco">Endereço </label>
							  <div class="controls">
                                                              <div class="input-prepend">
                                                                  <input type="text" name="endereco" id="endereco" value="<?php echo $film[0]->endereco; ?>">
                                                              </div>
							  </div>
							</div>
                                                        <div class="control-group">
								<label for="categoria" class="control-label">Categoria</label>
								<div class="controls">
								  <select id="categoria" name="categoria">
                                                                      <?php foreach ($categ as $cat){ ?>
                                                                      <option value="<?php echo $cat->codigo; ?>" <?php print($cat->codigo == $film[0]->categoria  ? 'selected="selected"' : ''); ?>><?php echo $cat->categoria; ?></option>
                                                                      <?php }?>
								  </select>
								</div>
							</div>
                                                        <div class="control-group">
								<label for="local" class="control-label">Local</label>
								<div class="controls">
								  <select id="local" name="local">
									<option value="youtube" <?php print($film[0]->local == "youtube" ? 'selected="selected"' : ''); ?>>Youtube</option>
									<option value="vimeo"<?php print($film[0]->local == "vimeo" ? 'selected="selected"' : ''); ?>>Vimeo</option>
								  </select>
								</div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Salvar</button>
                                                          <input type="hidden" name="codigo" value="<?php echo $film[0]->codigo; ?>">
                                                          <input type="hidden" name="tipo" value="cinema">
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