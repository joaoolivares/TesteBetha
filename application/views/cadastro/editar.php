<div class="container">
	<section class="cadastro">
		<h1>EDITAR CONTRIBUINTE</h1>
		<div class="row">
			<div class="col-md-12"> 
				<div class="cad-pessoal">
                                    <h1><img src="<?php echo base_url('public/images/etapa1.png') ?>"> SEUS DADOS PESSOAIS</h1>
                                        <div class="cad-med"> <span>CPF/CNPJ: *</span><input type="text" id="inp-cad" class="form-control"></div>
                                        <div class="cad-med"><span>NOME COMPLETO: *</span><input type="text" id="inp-cadg" class="form-control"></div>
                                        <div class="cad-med"><span>TELEFONE:</span><input type="text" id="inp-cad" class="form-control"> </div>
                                        <div class="cad-med"><span>CELULAR:</span><input type="text" id="inp-cad" class="form-control"></div>
                                        <div class="cad-med"><span>EMAIL: * </span><input type="text" id="inp-cad" class="form-control"></div>
                                        <div class="cad-med"><span>SENHA: *</span><input type="text" id="inp-cad" class="form-control"></div>
                                        <div class="cad-med"><span>CONFIRMAR SENHA: *</span><input type="text" id="inp-cad" class="form-control"></div>
				</div>
			</div>
			<div class="col-md-12"> 
				<div class="cad-endereco">
                                    <h1><img src="<?php echo base_url('public/images/etapa2.png') ?>"> INFORME SEU ENDEREÇO</h1>
                                        <div class="cad-med"> <span>CIDADE: </span><input type="text" id="inp-cad" class="form-control"></div>
                                        <div class="cad-med"> <span>LOGRADOURO:</span><input type="text" id="inp-cad" class="form-control"></div>
                                        <div class="cad-med"> <span>NUMERO:</span><input type="text" id="inp-cadp" class="form-control"></div>
                                        <div class="cad-med"> <span>NUMERO:</span><input type="text" id="inp-cadp" class="form-control"></div>
                                        <div class="cad-med"> <span>APARTAMENTO:</span><input type="text" id="inp-cadp" class="form-control"></div>
                                        <div class="cad-med"> <span>CEP:</span><input type="text" id="inp-cad" class="form-control"></div>
                                        <div class="cad-med"> <span>BAIRRO:</span><input type="text" id="inp-cad" class="form-control"></div>
                                        <div class="cad-med"> <span>DISTRITO:</span><input type="text" id="inp-cad" class="form-control"></div>   
				</div>
			</div>
			<div class="col-md-12"> 
                            <div class="cad-envio">
                                <h1><img src="<?php echo base_url('public/images/etapa3.png') ?>"> ENVIO DE COPIA DE DOCUMENTOS</h1>
                                <h3>Envie seu CPF/CNPJ, identidade, comprovante de residência em formato PDF.</h3>
                                
                                <?php echo form_open_multipart('cadenvio/save/'); ?>
                                <table class="table">
					<tr>
						<td>Documento</td>
						<td><?php echo form_upload('doc'); ?></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo form_submit('submit', 'ENVIAR ARQUIVO', 'class="btn btn-primary"'); ?></td>
					</tr>
				</table>
                            </div>
                            <div class="finalizar-cad"> <?php echo form_submit('submit', 'EDITAR CONTRIBUINTE', 'class="btn btn-primary"'); ?> </div>
			</div>
		</div>
	</section>
</div>