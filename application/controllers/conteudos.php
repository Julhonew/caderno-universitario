<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conteudos extends MY_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model('conteudos_model');
		$this->load->library('form_validation');
		$this->load->helper(['url', 'form']);
	}

	public function adicionar(){
		if(!$this->input->post()){
			$data = [
				'title'=>[
					'menu' => 'Materias',
					'page' => 'Adicionar conteudo',
					'urlBack' => $_SERVER['HTTP_REFERER']	
				],
				'mat_id'   => $this->uri->segment(3),
			];
			$this->load->view('conteudos/adicionarConteudo', $data);
		}else{
			$post = (object)$this->input->post();

			$data = [ 
				'mat_id' 		 => $post->mat_id,
				'nome' 			 => $post->nome,
				'status' 		 => $post->revisar,
				'data' 			 => strtotime($post->data .' '. date('H:i:s')),
				'dificuldade'    => $post->dificuldade,
				'conteudo' 		 => $post->conteudo,
				'data_inclusao'  => time(),
				'data_alteracao' => time()
			];

			$this->conteudos_model->insert($data);

			redirect('gerenciarMaterias/dashboard/'.$post->mat_id);
		}
	}

	public function editar(){
		if(!$this->input->post()){
			$data = [
				'title'=>[
					'menu' 	  => 'areaDeEstudo',
					'page' 	  => 'Editar',
					'urlBack' => $_SERVER['HTTP_REFERER']
				],
				'mat_id' 	=> $this->uri->segment(4),
				'id'	   	=> $this->uri->segment(3),
				'conteudo' 	=> $this->conteudos_model->getById($this->uri->segment(3)) 
			];
			$this->load->view('conteudos/editarConteudo', $data);
		}else{

			$post = (object) $this->input->post();

			$data = [
				'id' 		     => $post->id,
				'nome' 			 => $post->nome,
				'status' 		 => trim($post->revisar),
				'dificuldade'	 =>	$post->dificuldade,
				'conteudo'	     => $post->conteudo,
				'data' 			 => strtotime($post->data .' '. date('H:i:s')),
				'data_alteracao' => strtotime(date('Y-m-d H:i:s'))
			];

			// echo "<pre>";
			// var_dump($data);
			// exit;

			$this->conteudos_model->update($data['id'], $data);			
			redirect('gerenciarMaterias/dashboard/'.$post->mat_id);
		}
		
	}

	public function excluir($id){
		$this->conteudos_model->delete($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
