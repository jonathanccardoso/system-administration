<?php $this->load->view('header'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<h1>Deletar Colaborador</h1>

				<?php 
					echo form_open('colaboradores/delete');
				 ?>
				 	
				 	<input type="hidden" name="id_colaborador" value="<?php echo $table[0]->id_colaborador; ?>">

				 	<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" value="<?php echo $table[0]->nome ?>" required/>
					</div>
					<div class="form-group">
						<label for="nome">CPF</label>
						<input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $table[0]->cpf ?>" required/>
					</div>
					<div class="form-group">
						<label for="nome">Sexo</label> <b>F / M</b>
						<input type="text" style="text-transform: uppercase;" class="form-control" id="sexo" name="sexo" value="<?php echo $table[0]->sexo ?>" required/>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" value="<?php echo $table[0]->email ?>" required/>
					</div>
					<div class="form-group">
						<label for="nome">ID Empresa</label>
						<input type="text" class="form-control" id="empresa_id" name="empresa_id" value="<?php echo $table[0]->empresa_id ?>" required/>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>

			</div>
		</div>
	</div>

<?php $this->load->view('footer'); ?>