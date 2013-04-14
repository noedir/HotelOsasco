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
                                                      <?php if(!in_array($pag[0]->pg_slug,$ignore)){ ?>
							<div class="control-group">
                                                            <label for="selectError3" class="control-label">Menu / Submenu</label>
                                                            <div class="controls">
                                                              <select id="selectError3" name="pai">
                                                                  <option value="0-p">Principal</option>
                                                                  <?php
                                                                  if(count($smenu) > 0){
                                                                    foreach($smenu as $sm){
                                                                        if($sm['pg_codigo'] == $pag[0]->pg_pai){
                                                                            $check = 'selected="selected"';
                                                                        }else{
                                                                            $check = '';
                                                                        }
                                                                        echo '<option value="'.$sm['pg_codigo'].'-'.$sm['pg_menu'].'" '.$check.'>'.$sm['pg_menu'].'</option>';
                                                                    }
                                                                  }
                                                                  ?>
                                                              </select>
                                                            </div>
							</div>
                                                      <?php }else{ ?>
                                                      <input type="hidden" value="<?php echo $pag[0]->pg_codigo.'-'.$pag[0]->pg_menu; ?>" name="pai">
                                                      <?php } ?>
                                                      <div class="control-group">
							  <label for="titmenu" class="control-label">Título Menu </label>
							  <div class="controls">
								<input type="text" value="<?php echo $pag[0]->pg_menu; ?>" id="titmenu" class="span3 typeahead" name="titmenu">
							  </div>
							</div>
                                                        <div class="control-group">
							  <label for="titulo" class="control-label">Título </label>
							  <div class="controls">
								<input type="text" value="<?php echo $pag[0]->pg_titulo; ?>" id="titulo" class="span3 typeahead" name="titulo">
							  </div>
							</div>
                                                      <div class="control-group">
                                                            <label class="control-label" for="textarea2">Texto</label>
                                                            <div class="controls">
                                                                <textarea class="cleditor" name="descricao" id="textarea2" rows="3"><?php echo $pag[0]->pg_texto; ?></textarea>
                                                            </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Salvar</button>
                                                          <input type="hidden" name="codigo" value="<?php echo $pag[0]->pg_codigo; ?>">
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