<?php $this->load->view('header'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<h1>Colaboradores</h1>
				<a href="<?php echo base_url("colaborador/cadastrar"); ?>" class="btn btn-sucess m-1" style="background-color: green;color: white;" role="button aria-pressed="true">Adicionar Colaborador</a>
				<table class="table table-bordered table-hover mt-4">
					<thead>
						<tr>
							<th>#ID</th>
							<th>#ID Empresa</th>
							<th>Nome</th>
							<th>Email</th>
							<th>CPF</th>
							<th>Sexo</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							//controller index
							foreach ($table as $line) {
								echo "<tr class='text-center'>".
										"<td>". $line->id_colaborador ."</td>".
										"<td>". $line->empresa_id ."</td>".
										"<td>". $line->nome ."</td>".
										"<td>". $line->email ."</td>".
										"<td>". $line->cpf ."</td>".
										"<td>". $line->sexo ."</td>".
										"<td>".	
											"<a href='colaborador/visualizar/". $line->id_colaborador ."' class='btn btn-primary m-1' role='button aria-pressed='true'>Visualizar</a>".
											"<a href='colaborador/editar/". $line->id_colaborador ."' class='btn btn-warning m-1' role='button aria-pressed='true'>Editar</a>".
											"<a href='colaborador/excluir/". $line->id_colaborador ."' class='btn btn-danger m-1' role='button aria-pressed='true'>Excluir</a>".
										"</td>".										
									"</tr>";
							}
						?> 
					</tbody>
			</table>
			</div>
		</div>
	</div>

<?php $this->load->view('footer'); ?>
