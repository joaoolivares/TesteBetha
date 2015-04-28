<div class="container">
	<section class="privado">
		<h1>TELA DE ACESSO EXCLUSIVO PARA FUNCIONÁRIOS DA SECRETARIA</h1>
		<div class="form_login">
	   	<?php echo validation_errors(); ?>
	  	<?php echo form_open('verificalogin'); ?>
	   	<h2>DIGITE E-MAIL E SENHA DE ACESSO:</h2>
			<div class="log-mail"><span>E-mail:</span><input type="text" size="20" id="inp-cad" class="form-control" /></div> 
			<div class="log-senha"><span>Senha:</span><input type="password" size="20" id="inp-cad" class="form-control" /></div> 
			<a href="/consulta" class="btn btn-primary" id="entrar-btn">ENTRAR</a>
		</div>

		<h3>Caso ainda não possua acesso favor enviar e-mail para <a href="#">acessoiptu@betha.com.br</a></h3>
	</section>
</div>