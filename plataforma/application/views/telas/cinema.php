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
						<h2><i class="icon-user"></i> Cinema</h2>
						<div class="box-icon">
                                                    <?php echo anchor('cinema/cadcinema','<i class="icon-plus"></i>','class="btn btn-round" title="Cadastrar Novo Cinema" data-rel="tooltip"'); ?>
						</div>
					</div>
					<div class="box-content">
                                            <?php if(isset($array_bd) && count($array_bd) > 0){ ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Título</th>
								  <th>Endereço</th>
                                                                  <th>Local</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
                                                  <?php foreach($array_bd as $linhas){ ?>
						  <tbody>
							<tr>
								<td>#<?php echo $linhas->codigo?></td>
								<td class="center"><?php echo $linhas->titulo; ?></td>
								<td class="center"><?php echo $linhas->endereco; ?></td>
                                                                <td class="center"><?php echo ucfirst($linhas->local); ?></td>
								<td class="center">
                                                                    <?php echo anchor('http://www.zfilm.com.br/home/assistir/'.$linhas->slug,'<i class="icon-zoom-in icon-white"></i> Ver','class="btn btn-success" target="_blank"'); ?>
                                                                    <?php
                                                                    if($linhas->ativo == '0'){
                                                                        $btn = 'inverse';
                                                                    }else{
                                                                        $btn = 'primary';
                                                                    }
                                                                    echo anchor('cinema/ativo/'.$linhas->codigo,'<i class="icon-eye-open icon-white"></i> Ativo','class="btn btn-'.$btn.'"'); ?>
                                                                    <?php echo anchor('cinema/editcinema/'.$linhas->codigo,'<i class="icon-edit icon-white"></i> Editar','class="btn btn-info"'); ?>
                                                                    <?php echo anchor('cinema/excluir/'.$linhas->codigo,'<i class="icon-trash icon-white"></i> Excluir','class="exc btn btn-danger"'); ?>
								</td>
							</tr>
						  </tbody>
                                                  <?php } ?>
                                            </table>
                                            <?php }else{ ?>
                                            <h5 class="red">Nenhum cinema localizado</h5>
                                            <?php }?>
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