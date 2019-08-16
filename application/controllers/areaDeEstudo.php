<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AreaDeEstudo extends MY_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model('areaDeEstudo_model');
		$this->load->library('form_validation');
		$this->load->helper(['url', 'form']);
	}

	public function index(){
		$data = [
			'title'=>[
				'menu' => 'areaDeEstudo',
				'page' => 'Area de estudo'
			],
			'areaDeEstudo' => $this->areaDeEstudo_model->get()
		];
		$this->load->view('areaDeEstudo/areaDeEstudo', $data);
	}

	public function adicionar(){
		if(!$this->input->post()){
			$data = [
				'title'=>[
					'menu' => 'areaDeEstudo',
					'page' => 'Adicionar',
					'urlBack' => $_SERVER['HTTP_REFERER']
				],
			];
			$this->load->view('areaDeEstudo/adicionar', $data);
		}else{
			$post = (object)$this->input->post();

			$data = [ 
				'nome' => $post->nome,
				'semestre' => $post->semestre,
				'prof' => $post->prof,
				'data_inclusao' => strtotime(date('Y-m-d H:i:s')),
				'data_alteracao' => strtotime(date('Y-m-d H:i:s'))
			];

			$this->areaDeEstudo_model->insert($data);
			redirect('areaDeEstudo');
		}
	}

	public function editar(){
		if(!$this->input->post()){
			$data = [
				'title'=>[
					'menu' => 'areaDeEstudo',
					'page' => 'Editar',
					'urlBack' => $_SERVER['HTTP_REFERER']
				],
			];
			$data['materia'] = $this->areaDeEstudo_model->get();
			$this->load->view('areaDeEstudo/editar', $data);
		}else{

			$this->form_validation->set_rules('nome', 'Nome', 'required|trim', 
											   ['required' => '|O campo %s é obrigatorio']
											);
			$this->form_validation->set_rules('prof', 'Professor', 'required|trim', ['required' => '|O campo %s é obrigatorio']);

			if($this->form_validation->run()){
				$post = (object)$this->input->post();

				$data = [
					'nome' => trim($post->nome),
					'semestre' => $post->semestre,
					'prof' => trim($post->prof),
					'data_alteracao' => strtotime(date('Y-m-d H:i:s'))
				];

				// $this->session->set_flashdata('msg', 'success');
				redirect('areaDeEstudo');
			}else{
				$erros = explode('|', validation_errors());
				array_shift($erros);
				$data = [
					'title'=>[
						'menu' => 'areaDeEstudo',
						'page' => 'Editar',
						'urlBack' => $_SERVER['HTTP_REFERER']
					],
					'erros' => $erros
				];
	            $this->load->view('areaDeEstudo/editar', $data);
			}
			
		}
		
	}

	public function excluir($id){
		$this->areaDeEstudo_model->delete($id);
		redirect('areaDeEstudo');
	}
}
