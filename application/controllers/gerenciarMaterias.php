<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GerenciarMaterias extends MY_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model(['conteudos_model', 
							 'listaPresenca_model',
							 'atividades_model',
							 'notas_model']);
		$this->load->library('form_validation');
		$this->load->helper(['url', 'form']);
	}

	public function dashboard() {
		$mat_id = is_numeric($this->uri->segment(3)) ? $this->uri->segment(3) : redirect('materias') ;
		$conteudos = $this->conteudos_model->getByMat($mat_id);

		// echo "<pre>";
		// var_dump(is_numeric(2));
		// exit;

		$data = [
			'modulos' => [
				'materia_id'=> $mat_id,
				'conteudos' 	=> $conteudos,
				// 'listaPresenca' => $this->listaPresenca_model->getByMat($mat_id),
				'atividades' 	=> $this->atividades_model->getByMat($mat_id),
				// 'notas' 		=> $this->notas_model->getByMat($mat_id),
			],
			'title'=>[
				'menu' => 'Materias',
				'page' => 'Gerenciar materia',
				'urlBack' => base_url('materias')
			],
			'count' =>[
				'conteudos' 	=> count($conteudos),
				'revisar' 		=> $this->count($conteudos, true),
				'faltas'		=> '2',
				'atividades'	=> '2/2'
			],
		];
		
			
		// echo "<pre>";
		// var_dump($data);
		// exit;

		$this->load->view('gerenciarMaterias/gerenciarMaterias', $data);
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

	public function count($arrResults = [], $divisor = false) {
		$count = $revisados = $revisar = 0;

		foreach($arrResults as $result){
			if($divisor){
				if($result->revisar == 1){
					$revisar++; 
				}else if ($result->revisar == 3){
					$revisados++;
				}
				$count = "$revisados/$revisar";
			}else{
				$count++; 
			}
		}

		return $count;

	}
}
