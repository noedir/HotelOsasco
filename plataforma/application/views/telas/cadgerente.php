<div class="container-fluid">
        <div class="row-fluid">
            <?php $this->load->view('includes/menu'); ?>
            <div id="content" class="span10">
                <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Cadastrar Novo Gerente</h2>
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
							  <label class="control-label" for="nome">Nome </label>
							  <div class="controls">
                                                              <div class="input-prepend">
                                                                  <span class="add-on">&</span>
								<input type="text" name="nome" id="nome">
                                                              </div>
							  </div>
							</div>
                                                        <div class="control-group">
							  <label class="control-label" for="login">Login </label>
							  <div class="controls">
                                                              <div class="input-prepend">
                                                                  <span class="add-on">@</span>
								  <input type="text" name="login" id="login">
                                                              </div>
                                                          </div>
							</div>
                                                        <div class="control-group">
							  <label class="control-label" for="senha">Senha </label>
							  <div class="controls">
                                                              <div class="input-prepend">
                                                                  <span class="add-on">*</span>
                                                                  <input type="password" name="senha" id="senha">
                                                              </div>
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