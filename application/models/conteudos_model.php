<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class conteudos_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function get(){
		$query = $this->db->get('conteudos');
		return $query->result();
	}

	public function getById($id){
		$query = $this->db->where('id', $id) 
 						  ->get('conteudos');
		return $query->first_row();
	}

	public function getByMat($id){
		$query = $this->db->where('mat_id', $id) 
 						  ->get('conteudos');
		return $query->result();
	}

	public function verifDuplicidade($data){
		$query = $this->db->get_where('conteudos', ['nome' => $data['nome'],
												 'descricao' => $data['descricao'],
												 'data' => $data['data']]);
		if($query->num_rows() > 0){
			return false;	
		}
		
		return true;
	}

	public function insert($data){
		$this->db->insert('conteudos',$data);
		return true;
	}

	public function update($id, $data){
		$this->db->where('id',$id)
	             ->update('conteudos', $data);
	}

	public function delete($id){
		$this->db->where('id', $id)
				 ->delete('conteudos');
	}

	public function verifStatus(){
		$eventos = $this->get();
		foreach ($eventos as $evento) {
			if($evento->data <= strtotime(date('Y-m-d H:i')))
				$this->update($evento->id, ['status' => 1]);
		}
	}

}
