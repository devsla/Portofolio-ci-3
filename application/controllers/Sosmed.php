<?php

class  Sosmed extends CI_CONTROLLER{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_sosmed');
	}
	public function index(){
		$data['judul'] = 'Halaman';

		$data['sosmed'] = $this->M_sosmed->getSosmed();
		$this->load->view('templates/header');
		$this->load->view('admin/sosmed/index', $data);
		$this->load->view('templates/footer');
	}
	public function hal_tambah(){
		$this->load->view('templates/header');
		$this->load->view('Admin/sosmed/tambah');
		$this->load->view('templates/footer');
	}
	public function fungsi_tambah(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('facebook', 'Facebook', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(base_url('Sosmed/hal_tambah'));
		}
		else
		{
		$id_sosmed = $this->input->post('id_sosmed');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');
		$github = $this->input->post('github');
		$linkedln = $this->input->post('linkedln');
		$twitter = $this->input->post('twitter');
		$ArrInsert = Array(
			'id_sosmed'=> $id_sosmed,
			'facebook'=> $facebook,
			'instagram'=> $instagram,
			'github'=> $github,
			'linkedln'=> $linkedln,
			'twitter'=> $twitter
		);
			$this->M_sosmed->tambahSosmed($ArrInsert);
			$this->session->set_flashdata('ditambahkan',' <script>ditambahkan</script> ');
			redirect(base_url('Sosmed/hal_tambah'));
		}
	}
	public function hal_editsosmed($id_sosmed){
		$data['Ssmed'] = $this->M_sosmed->getByIdSosmed($id_sosmed);
		$this->load->view('templates/header');
		$this->load->view('Admin/sosmed/edit', $data);
		$this->load->view('templates/footer');
	}
	public function fungsi_edit(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('facebook', 'Facebook', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(base_url('Sosmed/index/'));
		}
		else
		{
		$id_sosmed = $this->input->post('id_sosmed');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');
		$github = $this->input->post('github');
		$linkedln = $this->input->post('linkedln');
		$twitter = $this->input->post('twitter');
		$ArrUpdate = Array(
			'facebook'=> $facebook,
			'instagram'=> $instagram,
			'github'=> $github,
			'linkedln'=> $linkedln,
			'twitter'=> $twitter
		);
			$this->M_sosmed->editSosmed($id_sosmed, $ArrUpdate);
			$this->session->set_flashdata('diedit',' <script>diedit</script> ');
			redirect(base_url('Sosmed/hal_editsosmed/' . $id_sosmed));
		}
	}
	public function hapusSosmed($id_sosmed){
		$this->M_sosmed->DeleteSosmed($id_sosmed);
		$this->session->set_flashdata('flash','<script> data telah dihapus  </script>');
		Redirect(base_url('Sosmed/index/'));
	}
}
