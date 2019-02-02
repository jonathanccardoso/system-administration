<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function getEmpresas(){
		$query = $this->db->get('empresa',100);
		return $query->result();
	}

	//update
	public function insert(){
		$data = array(
			'nome'=>$_POST['nome'],
			'cnpj'=>$_POST['cnpj'],
			'email'=>$_POST['email']
		);

		$this->db->insert('empresa', $data);
	}
	public function selecionar($where){
		$return = $this->db->get_where('empresa', $where);

		return $return->result();
	}
	public function salvar($where, $dados){
		$this->db->update('empresa', $dados, $where);
	}

	//delete
	public function delete($where){
		$this->db->delete('empresa', $where);
	}

}
