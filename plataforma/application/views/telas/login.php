<?php
if($this->session->userdata('login') == 'sim'){
    redirect('admin');
}
?>
<div class="container-fluid">
		<div class="row-fluid">

			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2><?php echo $titulo; ?></h2>
				</div><!--/span-->
			</div><!--/row-->

			<div class="row-fluid">
				<div class="well span5 center login-box">
                                        <?php if(!isset($result)){ ?>
					<div class="alert alert-info">
						Entre com seu Email e Senha.
					</div>
                                    <?php }else{ ?>
                                        <div class="alert alert-<?php echo $this->session->userdata('css');?>">
						<?php echo $this->session->userdata('erro'); ?>
					</div>
                                    <?php } ?>
                                    <form class="form-horizontal" action="<?php echo current_url(); ?>" method="post">
						<fieldset>
							<div class="input-prepend" title="Usuário" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" placeholder="email" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Senha" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" placeholder="senha" />
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Logar</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->

	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->