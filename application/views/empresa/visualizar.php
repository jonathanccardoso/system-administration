<?php $this->load->view('header'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<h1>Visualizar Empresa</h1>

				 	<input type="hidden" name="id_empresa" value="<?php echo $table[0]->id_empresa; ?>"><!-- id-empresa -->

				 	<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" value="<?php echo $table[0]->nome ?>" disabled/>
					</div>
					<div class="form-group">
						<label for="nome">CNPJ</label>
						<input type="text" class="form-control" id="cnpj" name="cnpj" value="<?php echo $table[0]->cnpj ?>" disabled/>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" value="<?php echo $table[0]->email ?>" disabled/>
					</div>

			</div>
		</div>
	</div>

<?php $this->load->view('footer'); ?>