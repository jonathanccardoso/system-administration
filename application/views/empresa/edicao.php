<?php $this->load->view('header'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<h1>Editar Empresa</h1>

				<?php 
					echo form_open('empresas/update');
				 ?>
				 	
				 	<input type="hidden" name="id_empresa" value="<?php echo $table[0]->id_empresa; ?>"><!-- id-empresa -->

				 	<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" value="<?php echo $table[0]->nome ?>"required/>
					</div>
					<div class="form-group">
						<label for="nome">CNPJ</label>
						<input type="text" class="form-control" id="cnpj" name="cnpj" value="<?php echo $table[0]->cnpj ?>" required/>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" value="<?php echo $table[0]->email ?>" required/>
					</div>
					<button type="submit" class="btn btn-primary">Editar</button>
				</form>

			</div>
		</div>
	</div>

<?php $this->load->view('footer'); ?>