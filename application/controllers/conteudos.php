<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conteudos extends MY_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model('conteudo_model');
		$this->load->library('form_validation');
		$this->load->helper(['url', 'form']);
	}

	public function index(){
		$data = [
			'title'=>[
				'menu' => 'Materias',
				'page' => 'Adicionar conteudo'
			],
			'url-back' => $_SERVER['HTTP_REFERER']
		];
		$this->load->view('conteudos/adicionarConteudo', $data);
	}

	public function adicionar(){
		$post = (object)$this->input->post();

		$data = [ 
			'nome' 			 => $post->nome,
			'revisar' 		 => $post->revisar,
			'data' 			 => strtotime($post->data .' '. date('H:i:s')),
			'dificuldade'    => $post->dificuldade,
			'conteudo' 		 => $post->conteudo,
			'data_inclusao'  => time(),
			'data_alteracao' => time()
		];

		$this->conteudo_model->insert($data);
		redirect('gerenciarMaterias');
	}

	// public function editar(){
	// 	if(!$this->input->post()){
	// 		$data = [
	// 			'title'=>[
	// 				'menu' => 'areaDeEstudo',
	// 				'page' => 'Editar'
	// 			],
	// 		];
	// 		$data['materia'] = $this->areaDeEstudo_model->get();
	// 		$this->load->view('areaDeEstudo/editar', $data);
	// 	}else{

	// 		$this->form_validation->set_rules('nome', 'Nome', 'required|trim', 
	// 										   ['required' => '|O campo %s é obrigatorio']
	// 										);
	// 		$this->form_validation->set_rules('prof', 'Professor', 'required|trim', ['required' => '|O campo %s é obrigatorio']);

	// 		if($this->form_validation->run()){
	// 			$post = (object)$this->input->post();

	// 			$data = [
	// 				'nome' => trim($post->nome),
	// 				'semestre' => $post->semestre,
	// 				'prof' => trim($post->prof),
	// 				'data_alteracao' => strtotime(date('Y-m-d H:i:s'))
	// 			];

	// 			// $this->session->set_flashdata('msg', 'success');
	// 			redirect('areaDeEstudo');
	// 		}else{
	// 			$erros = explode('|', validation_errors());
	// 			array_shift($erros);
	// 			$data = [
	// 				'title'=>[
	// 					'menu' => 'areaDeEstudo',
	// 					'page' => 'Editar'
	// 				],
	// 				'erros' => $erros
	// 			];
	//             $this->load->view('areaDeEstudo/editar', $data);
	// 		}
			
	// 	}
		
	// }

	public function excluir($id){
		$this->conteudo_model->delete($id);
		redirect('gerenciarMaterias');
	}
}
