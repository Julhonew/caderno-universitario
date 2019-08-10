<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends MY_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model('materias_model');
		$this->load->library('form_validation');
		$this->load->helper(['url', 'form']);
	}

	public function index(){
		// $msg = $this->session->flashdata('msg') ? true : false;
		$data = [
			'title'=>[
				'menu' => 'Materias',
				'page' => 'Listagem'
			],
			'materias' => $this->materias_model->get(),
			// 'success'  => $msg
		];
		$this->load->view('materias/materias', $data);
	}

	public function adicionar(){
		if(!$this->input->post()){
			$data = [
				'title'=>[
					'menu' => 'Materias',
					'page' => 'Adicionar'
				],
			];
			$this->load->view('materias/adicionar', $data);
		}else{
			$post = (object)$this->input->post();

			$data = [ 
				'nome' => $post->nome,
				'semestre' => $post->semestre,
				'prof' => $post->prof,
				'data_inclusao' => strtotime(date('Y-m-d H:i:s')),
				'data_alteracao' => strtotime(date('Y-m-d H:i:s'))
			];

			$this->materias_model->insert($data);
			redirect('materias');
		}
	}

	public function editar(){
		if(!$this->input->post()){
			$data = [
				'title'=>[
					'menu' => 'Materias',
					'page' => 'Editar'
				],
				'materia' => $this->materias_model->getById($this->uri->segment(3))
			];
			$this->load->view('materias/editar', $data);
		}else{

			$this->form_validation->set_rules('nome', 'Nome', 'required|trim', 
											   ['required' => '|O campo %s é obrigatorio']
											);
			$this->form_validation->set_rules('prof', 'Professor', 'required|trim', ['required' => '|O campo %s é obrigatorio']);
			$this->form_validation->set_rules('semestre', 'Semestre', 'required|trim', ['required' => '|O campo %s é obrigatorio']);

			if($this->form_validation->run()){
				$post = (object) $this->input->post();
				$semestre = explode(' ', $post->semestre);
				$data = [
					'nome' => trim($post->nome),
					'semestre' => $semestre[0],
					'prof' => trim($post->prof),
					'data_alteracao' => strtotime(date('Y-m-d H:i:s'))
				];

				$this->materias_model->update($post->id, $data);
				// $this->session->set_flashdata('msg', 'success');
				redirect('materias');
			}else{
				$erros = explode('|', validation_errors());
				array_shift($erros);
				$data = [
					'title'=>[
						'menu' => 'Materias',
						'page' => 'Editar'
					],
					'erros' => $erros
				];
	            $this->load->view('materias/editar', $data);
			}
			
		}
		
	}

	public function excluir($id){
		$this->materias_model->delete($id);
		redirect('materias');
	}

	public function gerenciarMateria(){
		$data = [
			'title'=>[
				'menu' => 'Materias',
				'page' => 'Gerenciar Materia'
			],
		];
		$this->load->view('materias/gerenciarMateria', $data);
	}

}
