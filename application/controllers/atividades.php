<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atividades extends MY_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model('atividades_model');
	}

	public function adicionar(){
		$post = (object)$this->input->post();

		$dataAtual = strtotime(date('d/m/Y'));
		$dataPost = strtotime($post->data);

		$data = [ 
			'mat_id' 		 => $this->uri->segment(3),
			'nome' 			 => $post->nome,
			'status' 		 => $dataAtual < $dataPost ? 12 : 13,
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
		
	}

	public function excluir($id,$mat_id){
		$this->atividades_model->delete($id);
		$this->session->set_userdata(['notification' => ['tipo'   => 'success',
														 'msg'    => 'Excluido com sucesso!']]);
		redirect('gerenciarMaterias/dashboard/'.$mat_id);
	}
}
