<?php

class M_portofolio extends CI_Model{
	public function getHome(){
		return $this->db->get('home')->result_array();
	}
	public function getSosmed(){
		return $this->db->get('sosmed')->result_array();
	}
	public function getAbout(){
		return $this->db->get('about')->result_array();
	}
	public function getContact(){
		return $this->db->get('contact')->result_array();
	}
	public function tambah_contact($data){
		$this->db->insert('contact', $data);
	}
}
