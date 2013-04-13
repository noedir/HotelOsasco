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
						<h2><i class="icon-user"></i> Categorias</h2>
						<div class="box-icon">
                                                    <?php echo anchor('categorias/cadcategoria','<i class="icon-plus"></i>','class="btn btn-round" title="Cadastrar Novo Banner" data-rel="tooltip"'); ?>
						</div>
					</div>
					<div class="box-content">
                                            <?php if(isset($array_bd) && count($array_bd) > 0){ ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Categoria</th>
								  <th>Slug</th>
								  <th>Ações</th>
							  </tr>
						  </thead>
                                                  <?php foreach($array_bd as $linha){ ?>
						  <tbody>
							<tr>
								<td>#<?php echo $linha->codigo?></td>
								<td class="center"><?php echo $linha->categoria; ?></td>
                                                                <td class="center"><?php echo $linha->slug; ?></td>
								<td class="center">
                                                                    <?php echo anchor('categorias/editcategoria/'.$linha->codigo,'<i class="icon-edit icon-white"></i> Editar','class="btn btn-info"'); ?>
                                                                    <?php echo anchor('categorias/excluir/'.$linha->codigo,'<i class="icon-trash icon-white"></i> Excluir','class="exc btn btn-danger"'); ?>
								</td>
							</tr>
						  </tbody>
                                                  <?php } ?>
                                            </table>
                                            <?php }else{ ?>
                                            <h5 class="red">Nenhum banner localizado</h5>
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