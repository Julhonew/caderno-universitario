<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class atividades_model extends MY_Model {

	public $table = 'atividades';

	public function __construct(){
		parent::__construct();
	}

	public function getById($id){
		$query = $this->db->where('id', $id) 
 						  ->get('atividades');
		return $query->first_row();
	}

	public function getByMat($id){
		$query = $this->db->where('mat_id', $id) 
 						  ->get('atividades');
		return $query->result();
	}

	public function verifDuplicidade($data){
		$query = $this->db->get_where('atividades', ['nome' => $data['nome'],
												 'descricao' => $data['descricao'],
												 'data' => $data['data']]);
		if($query->num_rows() > 0){
			return false;	
		}
		
		return true;
	}

	public function verifStatus(){
		$eventos = $this->get();
		foreach ($eventos as $evento) {
			if($evento->data <= strtotime(date('Y-m-d H:i')))
				$this->update($evento->id, ['status' => 1]);
		}
	}

}
