<?php $this->load->view('header'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<h1>Colaboradores</h1>
				<a href="<?php echo base_url("colaborador/relatorio/pdf"); ?>" class="btn btn-sucess m-1" style="background-color: green;color: white;" role="button aria-pressed="true">Gerar PDF</a>

					<table class="table table-bordered table-hover mt-4">
						<thead>
							<tr>
								<th>Colaborador</th>
								<th>Email</th>
								<th>CPF</th>
								<th>Sexo</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($table as $line) {
									echo "<tr class='text-center'>".
										"<td>". $line->nome ."</td>".
										"<td>". $line->email ."</td>".
										"<td>". $line->cpf ."</td>".
										"<td>". $line->sexo ."</td>".
									"</tr>";
								}
							?> 
						</tbody>
					</table>

			</div>
		</div>
	</div>

<?php $this->load->view('footer'); ?>
