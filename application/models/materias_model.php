<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class materias_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function get(){
		$query = $this->db->get('materias');
		return $query->result();
	}

	public function getById($id){
		$query = $this->db->where('id', $id) 
 						  ->get('materias');
		return $query->first_row();
	}

	public function getRealizados(){
		$results = $this->membros_model->selectAll();

		foreach ($results as $membro) {
			if(!$membro->dir_status){
				$membros[] = $membro;
			}
		}
		
		if(isset($membros))
			return $membros;
		else
			return true;	
	}

	public function verifDuplicidade($data){
		$query = $this->db->get_where('materias', ['nome' => $data['nome'],
												 'descricao' => $data['descricao'],
												 'data' => $data['data']]);
		if($query->num_rows() > 0){
			return false;	
		}
		
		return true;
	}

	public function insert($data){
		$this->db->insert('materias',$data);
	}

	public function update($id, $data){
		$this->db->where('id',$id)
	             ->update('materias', $data);
	}

	public function delete($id){
		$this->db->where('id', $id)
				 ->delete('materias');
	}

	public function verifStatus(){
		$eventos = $this->get();
		foreach ($eventos as $evento) {
			if($evento->data <= strtotime(date('Y-m-d H:i')))
				$this->update($evento->id, ['status' => 1]);
		}
	}

}
