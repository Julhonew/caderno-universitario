<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	public function __construct(){
		parent::__construct();
    }

    public function get(){
		$query = $this->db->get($this->table);
		return $query->result();
	}
    
    public function insert($data){
		$this->db->insert($this->table,$data);
		return true;
	}

	public function update($id, $data){
		$this->db->where('id',$id)
	             ->update($this->table, $data);
	}

	public function delete($id){
		$this->db->where('id', $id)
				 ->delete($this->table);
	}

}