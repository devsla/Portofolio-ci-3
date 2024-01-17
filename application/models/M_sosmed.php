<?php

class M_sosmed extends CI_Model{
	public function getSosmed(){
		return $this->db->get('sosmed')->result_array();
	}
	public function tambahSosmed($data){
		$this->db->insert('sosmed', $data);
	}
	public function getByIdSosmed($id_sosmed){
		$query = $this->db->where('id_sosmed', $id_sosmed)->get('sosmed');
		return $query->row_array();
	}
	public function editSosmed($id_sosmed, $data){
		$this->db->where('id_sosmed', $id_sosmed);
		return $this->db->update('sosmed', $data);

	}
	public function DeleteSosmed($id_sosmed){
		$this->db->where('id_sosmed', $id_sosmed);
		$this->db->delete('sosmed');
	
	}
}
