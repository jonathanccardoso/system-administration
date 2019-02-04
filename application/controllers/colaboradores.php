<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()	{
		$this->load->model('colaboradores_model', 'colaboradores');
		$data_model['colaboradores'] = $this->index->getColaboradores();

		$dados['title'] = 'Home';
		$this->load->view('home', $dados, $data_model);
	}

	//visualizar
	public function visualizar($id){
		$this->load->model('Colaboradores_model');

		$where = array('id_colaborador'=>$id);

		$resultado = $this->Colaboradores_model->selecionar($where);

		$dados = array(
			'title' => 'Visualizar Colaborador',
			'id_colaborador' => $id,
			'table'=>$resultado
		);

		$this->load->view('colaborador/visualizar', $dados);
	}

	//INSERT
	public function cadastrar(){
		$this->load->model('Colaboradores_model');
		$this->Colaboradores_model->insert();

		redirect('/colaborador');
	}

	//UPDATE
	public function atualizar($id){
		$this->load->model('Colaboradores_model');

		$where = array('id_colaborador'=>$id);

		$resultado = $this->Colaboradores_model->selecionar($where);

		$dados = array(
			'title' => 'Editar Colaborador',
			'id_colaborador' => $id,
			'table'=>$resultado
		);

		$this->load->view('colaborador/edicao', $dados);
	}
	public function update(){
		$id_colaborador = $this->input->post('id_colaborador');
		$nome = $this->input->post('nome');
		$cpf = $this->input->post('cpf');
		$sexo = $this->input->post('sexo');
		$email = $this->input->post('email');
		$empresa_id = $this->input->post('empresa_id');

		$dados = array(
			'nome'=>$nome,
			'cpf'=>$cpf,
			'sexo'=>$sexo,
			'email'=>$email,
			'empresa_id'=>$empresa_id
		);

		$where = array(
			'id_colaborador'=>$id_colaborador
		);

		$this->load->model('Colaboradores_model');

		$this->Colaboradores_model->salvar($where, $dados);

		redirect('colaborador');
	}

	//DELETAR
	public function deletar($id){

		$this->load->model('Colaboradores_model');

		$where = array('id_colaborador'=>$id);

		$resultado = $this->Colaboradores_model->selecionar($where);

		$dados = array(
			'title' => 'Excluir Colaborador',
			'id_colaborador' => $id,
			'table'=>$resultado
		);

		$this->load->view('colaborador/excluir', $dados);
	}
	public function delete(){
		$id_colaborador = $this->input->post('id_colaborador');

		$where = array(
			'id_colaborador'=>$id_colaborador
		);

		$this->load->model('Colaboradores_model');

		$this->Colaboradores_model->delete($where);

		redirect('colaborador');
	}	

	//Relatorio PDF
	public function relatorio(){
		$this->load->model('Colaboradores_model');
	
		//$table = $this->Colaboradores_model->getColaboradores();
		$table = $this->Colaboradores_model->getColaboradoresSexo();

		$dados = array(
			'title' => 'Relatório Empresas', 
			'table' => $table
		);

		$this->load->view('colaborador/relatorio', $dados);
	}
	public function pdf(){
		$this->load->model('Colaboradores_model', 'colaboradores');
	
		$table = $this->colaboradores->getColaboradoresSexo();

		$data = array(
			'title' => 'Relatório Colaboradores',
			'table' => $table
		);

		$this->load->library('Pdf');
		$this->load->view('colaborador/pdf', $data);
	}
}
