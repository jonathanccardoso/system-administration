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
		$dados['title'] = 'Empresas';
		$this->load->view('empresa/listar', $dados);
	}
	public function colaborador() {
		$dados['title'] = 'Colaboradores';
		$this->load->view('colaborador/listar', $dados);
	}
	public function empresa_cadastrar() {
		$dados['title'] = 'Cadastrar Empresa';
		$this->load->view('empresa/cadastrar', $dados);
	}
	public function colaborador_cadastrar() {
		$dados['title'] = 'Cadastrar Colaborador';
		$this->load->view('colaborador/cadastrar', $dados);
	}
}



