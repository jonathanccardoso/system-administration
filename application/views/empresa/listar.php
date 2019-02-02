<?php $this->load->view('header'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<h1>Empresas</h1>
				<a href="<?php echo base_url("empresa/cadastrar"); ?>" class="btn btn-sucess m-1" style="background-color: green;color: white;" role="button aria-pressed="true">Adicionar Empresa</a>
				<table class="table table-bordered table-hover mt-4">
					<thead>
						<tr>
							<th>#ID</th>
							<th>Empresa</th>
							<th>CNPJ</th>
							<th>Email</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($table as $line) {
								echo "<tr class='text-center'>".
										"<td>". $line->id_empresa ."</td>".
										"<td>". $line->nome ."</td>".
										"<td>". $line->cnpj ."</td>".
										"<td>". $line->email ."</td>".
										"<td>".
											"<a href='empresa/visualizar/". $line->id_empresa ."' class='btn btn-primary m-1' role='button aria-pressed='true'>Visualizar</a>".
											"<a href='empresa/editar/". $line->id_empresa ."' class='btn btn-warning m-1' role='button aria-pressed='true'>Editar</a>".
											"<a href='empresa/excluir/". $line->id_empresa ."' class='btn btn-danger m-1' role='button aria-pressed='true'>Excluir</a>".
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
