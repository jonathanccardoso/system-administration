<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()	{
		$dados['title'] = 'Home';
		$this->load->view('home', $dados);
	}
	public function empresa() {
		$this->load->model('empresas_model', 'empresas');
	
		$table = $this->empresas->getEmpresas();

		$dados = array(
			'title' => 'Empresas', 
			'table' => $table 
		);

		$this->load->view('empresa/listar', $dados);
	}
	public function colaborador() {
		//list datas table
		$this->load->model('colaboradores_model', 'colaboradores');
	
		$table = $this->colaboradores->getColaboradores();

		$dados = array(
			'title' => 'Colaboradores', 
			'table' => $table 
		);

		$this->load->view('colaborador/listar', $dados);
	}
	public function empresa_cadastrar() {
		$this->load->model('empresas_model', 'empresas');
		
		$table = $this->empresas->getEmpresas();

		$dados = array(
			'title' => 'Empresas'
		);
		
		$this->load->view('empresa/cadastrar', $dados);
	}
	public function empresa_editar() {
		$dados['title'] = 'Editar Empresa';
		$this->load->view('empresa/', $dados);
	}

	public function colaborador_cadastrar() {
		$dados['title'] = 'Cadastrar Colaborador';
		$this->load->view('colaborador/cadastrar', $dados);
	}
}



