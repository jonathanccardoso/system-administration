<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()	{
		$this->load->model('empresas_model', 'empresas');
		$data_model['empresas'] = $this->index->getEmpresas();		

		$dados['title'] = 'Home';
		$this->load->view('home', $dados, $data_model);
	}
	public function empresa() {
		$dados['title'] = 'Empresas';
		$this->load->view('empresa/listar', $dados);
	}

	//visualizar - estrutura semelhante ao atualizar
	public function visualizar($id){
		$this->load->model('Empresas_model');

		$where = array('id_empresa'=>$id);

		$resultado = $this->Empresas_model->selecionar($where);

		$dados = array(
			'title' => 'Visualizar Empresa',
			'id_empresa' => $id,
			'table'=>$resultado
		);

		$this->load->view('empresa/visualizar', $dados);
	}

	public function cadastrar(){
		//model
		$this->load->model('Empresas_model');
		$this->Empresas_model->insert();

		redirect('/empresa');//possivel através do helper url
	}

	//UPDATE
	public function atualizar($id){
		$this->load->model('Empresas_model');

		$where = array('id_empresa'=>$id);

		$resultado = $this->Empresas_model->selecionar($where);

		$dados = array(
			'title' => 'Editar Empresa',
			'id_empresa' => $id,
			'table'=>$resultado
		);

		$this->load->view('empresa/edicao', $dados);
	}
	public function update(){
		$id_empresa = $this->input->post('id_empresa');
		$nome = $this->input->post('nome');
		$cnpj = $this->input->post('cnpj');
		$email = $this->input->post('email');

		$dados = array(
			'nome'=>$nome,
			'cnpj'=>$cnpj,
			'email'=>$email
		);

		$where = array(
			'id_empresa'=>$id_empresa
		);

		$this->load->model('Empresas_model');

		$this->Empresas_model->salvar($where, $dados);

		redirect('empresa');
	}

	//DELETAR
	public function deletar($id){

		$this->load->model('Empresas_model');

		$where = array('id_empresa'=>$id);

		$resultado = $this->Empresas_model->selecionar($where);

		$dados = array(
			'title' => 'Excluir Empresa',
			'id_empresa' => $id,
			'table'=>$resultado
		);

		$this->load->view('empresa/excluir', $dados);
	}
	public function delete(){
		$id_empresa = $this->input->post('id_empresa');

		$where = array(
			'id_empresa'=>$id_empresa
		);

		$this->load->model('Empresas_model');

		$this->Empresas_model->delete($where);

		redirect('empresa');
	}	

	//relatorio PDF
	public function relatorio(){
		$this->load->model('Empresas_model');
	
		$table = $this->Empresas_model->getEmpresas();

		$dados = array(
			'title' => 'Relatório Empresas', 
			'table' => $table
		);

		$this->load->view('empresa/relatorio', $dados);	
	}
	public function pdf(){
		
		/*if($this->uri->segment(3)){
		   $customer_id = $this->uri->segment(3);
		   $html_content = '<h3 align="center">Convert HTML to PDF in CodeIgniter using Dompdf</h3>';
		   $html_content .= $this->htmltopdf_model->fetch_single_details($customer_id);
		   $this->pdf->loadHtml($html_content);
		   $this->pdf->render();
		   $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
		}*/

		//redirect('empresa/relatorio');
	}
}
