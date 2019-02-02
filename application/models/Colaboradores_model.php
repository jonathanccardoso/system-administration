<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getColaboradores(){
		$query = $this->db->get('colaborador',100);
		return $query->result();
	}

	//update
	public function insert(){
		$data = array(
			'nome'=>$_POST['nome'],
			'cpf'=>$_POST['cpf'],
			'email'=>$_POST['email'],
			'sexo'=>$_POST['sexo'],
			'empresa_id'=>$_POST['empresa_id'],
		);

		$this->db->insert('colaborador', $data);
	}
	public function selecionar($where){
		$return = $this->db->get_where('colaborador', $where);

		return $return->result();
	}
	public function salvar($where, $dados){
		$this->db->update('colaborador', $dados, $where);
	}

	//delete
	public function delete($where){
		$this->db->delete('colaborador', $where);
	}
}
