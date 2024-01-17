<?php 

class Admin extends CI_CONTROLLER
{
	public function index(){
	$this->load->view('templates/header');
	$this->load->view('Admin/index');
	$this->load->view('templates/footer');
	}
}
