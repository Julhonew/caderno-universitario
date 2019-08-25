<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atividades extends MY_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model('atividades_model');
		$this->load->library(['form_validation']);
		$this->load->helper(['url', 'form']);
	}

	public function adicionar(){
		$post = (object)$this->input->post();

		$data = [ 
			'mat_id' 		 => $this->uri->segment(3),
			'nome' 			 => $post->nome,
			'status' 		 => 0,
			'data'			 => strtotime($post->data .' '. date('H:i:s')),
			'nota'			 => isset($post->nota) ? $post->nota : '-',
			'data_inclusao'  => time(),
			'data_alteracao' => time()
		];

		$this->atividades_model->insert($data);
		$this->session->set_userdata(['notification' => ['tipo'   => 'success',
														 'msg'    => 'Dados de atividades salvos com sucesso!']]);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function editar(){
		if(!$this->input->post()){
			$data = [
				'title'=>[
					'menu' 	  => 'areaDeEstudo',
					'page' 	  => 'Editar',
					'urlBack' => $_SERVER['HTTP_REFERER']
				],
				'conteudo' 	  => $this->conteudos_model->getById($this->uri->segment(3)) 
			];
			$this->load->view('conteudos/editarConteudo', $data);
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
						'menu' 	  => 'areaDeEstudo',
						'page' 	  => 'Editar',
						'urlBack' => $_SERVER['HTTP_REFERER']
					],
					'erros' => $erros
				];
	            $this->load->view('areaDeEstudo/editar', $data);
			}
			
		}
		
	}

	public function excluir($id){
		$this->conteudos_model->delete($id);
		redirect('gerenciarMaterias/dashboard/'.$id);
	}
}
