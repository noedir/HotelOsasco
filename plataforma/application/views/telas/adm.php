		<div class="container-fluid">
		<div class="row-fluid">

			<?php echo $this->load->view('includes/menu'); ?>

			<div id="content" class="span10">
			<!-- content starts -->

                        <div class="row-fluid">
				<div class="box span12">
					<div class="box-content">
						<h1 align="center"><?php echo strtoupper($titulo); ?></h1>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="sortable row-fluid">
                            <a data-rel="tooltip" title="Total de Filmes: <?php echo $fotos; ?>" class="well span4 top-block" href="admin/filmes.html">
					<span class="icon32 icon-green icon-video"></span>
					<div>Total de Fotos</div>
					<div><?php echo $fotos; ?></div>
				</a>

				<a data-rel="tooltip" title="Total de Trailers: <?php echo $banner; ?>" class="well span4 top-block" href="admin/trailers.html">
					<span class="icon32 icon-red icon-triangle-e"></span>
					<div>Total de Banners</div>
					<div><?php echo $banner; ?></div>
				</a>

				<a data-rel="tooltip" title="Acessos no site: <?php echo $acessos[0]->ac_visitas; ?>" class="well span4 top-block" href="#">
					<span class="icon32 icon-blue icon-users"></span>
					<div>Acessos no site</div>
					<div><?php echo $acessos[0]->ac_visitas; ?></div>
				</a>
			</div>
				</div><!--/span-->
			</div><!--/row-->




					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->

		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Noedir C. Filho</a> 2013</p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
		</footer>

	</div><!--/.fluid-container-->