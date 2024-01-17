<?php

class  About extends CI_CONTROLLER{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_about');
	}
	public function index(){
		$data['judul'] = 'Halaman';

		$data['abt'] = $this->M_about->getAbout();
		$this->load->view('templates/header');
		$this->load->view('admin/about/index', $data);
		$this->load->view('templates/footer');
	}
	public function hal_tambah(){
		$this->load->view('templates/header');
		$this->load->view('Admin/about/tambah');
		$this->load->view('templates/footer');
	}
	public function fungsi_tambah(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('facebook', 'Facebook', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(base_url('about/hal_tambah'));
		}
		else
		{
		$id_about = $this->input->post('id_about');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$umur = $this->input->post('umur');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$thumbnail = $this->input->post('thumbnail');
		$ArrInsert = Array(
			'id_about'=> $id_about,
			'judul'=> $judul,
			'deskripsi'=> $deskripsi,
			'umur'=> $umur,
			'email'=> $email,
			'no_hp'=> $no_hp,
			'alamat'=> $alamat,
			'thumbnail'=> $thumbnail
		);
			$this->M_about->tambahAbout($ArrInsert);
			$this->session->set_flashdata('ditambahkan',' <script>ditambahkan</script> ');
			redirect(base_url('about/index'));
		}
	}
	public function hal_edit($id_about){
		$data['at'] = $this->M_about->getById($id_about);
		$this->load->view('templates/header');
		$this->load->view('Admin/about/edit', $data);
		$this->load->view('templates/footer');
	}
	public function fungsi_edit(){
		$id_about = $this->input->post('id_about');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$umur = $this->input->post('umur');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$thumbnail = $this->input->post('thumbnail');
		$ArrUpdate = Array(
			'judul'=> $judul,
			'deskripsi'=> $deskripsi,
			'umur'=> $umur,
			'email'=> $email,
			'no_hp'=> $no_hp,
			'alamat'=> $alamat,
			'thumbnail'=> $thumbnail
		);
		$this->M_about->editAbout($id_about, $ArrUpdate);
		$this->session->set_flashdata('diedit',' <script>diedit</script> ');
		redirect(base_url('about/hal_edit/' . $id_about));
		}
	public function Delete($id_about){
		$this->M_about->AboutDelete($id_about);
		$this->session->set_flashdata('flash','<script> data telah dihapus  </script>');
		redirect(base_url('home/index/'));
	}
}
