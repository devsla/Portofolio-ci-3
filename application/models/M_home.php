<?php 

class M_home extends CI_Model {
	public function getHome(){
		return $this->db->get('home')->result_array();
	}
	public function tambahHome($data){
		$this->db->insert('home', $data);
	}
	public function getById($id_home){
		$query = $this->db->where('id_home', $id_home)->get('home');
		return $query->row_array();
	}
	public function Home_edit($id_home, $data){
		$this->db->where('id_home', $id_home);
		return $this->db->update('home', $data);

	}
	public function HomeDelete($id_home){
		$this->db->where('id_home', $id_home);
		$this->db->delete('home');
	
	}
}
