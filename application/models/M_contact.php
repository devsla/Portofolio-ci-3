<?php

class M_contact extends CI_Model
{
	public function getContact(){
		return $this->db->get('contact')->result_array();
	}
	public function tambahContact($data){
		$this->db->insert('contact', $data);
	}
	public function getByid($id_contact){
		$query = $this->db->where('id_contact', $id_contact)->get('contact');
		return $query->row_array();

	}
	public function editContact($id_contact, $data){
		$this->db->where('id_contact', $id_contact);
		return $this->db->update('contact', $data);
	}
	public function deletecont($id_contact){
		$this->db->where('id_contact', $id_contact);
		return $this->db->delete('contact');
	}
}
