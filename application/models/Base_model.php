<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function salvar(){
		//teste
		echo 'executado metodo model';
	}
}
