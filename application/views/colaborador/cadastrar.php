<?php $this->load->view('header'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-6">
				<h1>Cadastrar colaborador</h1>

				<?php echo form_open('colaboradores/cadastrar'); ?>
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" required/>
					</div>
					<div class="form-group">
						<label for="nome">CPF</label>
						<input type="text" class="form-control" id="cpf" name="cpf" required/>
					</div>
					<div class="form-group">
						<label for="nome">Sexo</label>
						<select class="form-control" id="sexo" name="sexo" required>
					        <option>M</option>
					        <option>F</option>
					     </select>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" required/>
					</div>
					<div class="form-group">
						<label for="nome">ID Empresa</label>
						<input type="text" class="form-control" id="empresa_id" name="empresa_id" required/>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>

			</div>
		</div>
	</div>

<?php $this->load->view('footer'); ?>