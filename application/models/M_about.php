<?php 

class M_about extends CI_Model {
	public function getAbout(){
		return $this->db->get('about')->result_array();
	}
	public function tambahAbout($data){
		$this->db->insert('about', $data);
	}
	public function getById($id_about){
		$query = $this->db->where('id_about', $id_about)->get('about');
		return $query->row_array();
	}
	public function editAbout($id_about, $data){
		$this->db->where('id_about', $id_about);
		return $this->db->update('about', $data);
	}
	public function AboutDelete($id_about){
		$this->db->where('id_about', $id_about);
		return $this->db->delete('about');
	}
}
