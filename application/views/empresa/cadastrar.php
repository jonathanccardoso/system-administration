<?php $this->load->view('header'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-6">
				<h1>Cadastrar empresa</h1>

				<!-- helper form -->
				<?php echo form_open('empresas/cadastrar'); ?> <!-- <form role="form"> -->

					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" required/>
					</div>
					<div class="form-group">
						<label for="nome">CNPJ</label>
						<input type="text" class="form-control" id="cnpj" name="cnpj" required/>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" required/>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>

			</div>
		</div>
	</div>

<?php $this->load->view('footer'); ?>