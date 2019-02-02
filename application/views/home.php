<?php $this->load->view('header'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<h1 class="p-3">Administração</h1>
				<div class="row">
					<div class="col-md-6">
						<div class="jumbotron">
							<h2>Empresas</h2>
							<p>Veja lista de empresas cadastradas.</p>
							<p>
								<a class="btn btn-primary btn-large" href="<?php echo base_url('empresa'); ?>">Veja mais</a>
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="jumbotron">
							<h2>Colaboradores</h2>
							<p>Veja lista de colaboradores cadastraos.</p>
							<p>
								<a class="btn btn-primary btn-large" href="<?php echo base_url('colaborador'); ?>">Veja mais</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('footer'); ?>