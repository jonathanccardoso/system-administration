<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Base_model');
	}

	public function index()	{
		//metodo padrão do controller
		//teria que chamar o view()

		//passar parametros
		
		//$dados['titulo']  = 'o ovo';
		//$dados['conteudo']  = 'o ovo ovinhho';

		//$this->load->view('exemplo1', $dados);
	}

	public function login()	{
		//id da url
		//echo $this->uri->segment(3);

		//metodo salvar do model
		//$this->Base_model->salvar();
		//Base_controller/login
	}
}



