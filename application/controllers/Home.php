<?php 

class Home extends CI_CONTROLLER{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
	}
	public function index(){
		$data['judul'] = 'Halaman';

		$data['Home'] = $this->M_home->getHome();
		$this->load->view('templates/header', $data);
		$this->load->view('Admin/home/index', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_home(){
		$this->load->view('templates/header');
		$this->load->view('Admin/home/tambah');
		$this->load->view('templates/footer');
	}
	public function tambahhome_fungsi(){
		$id_home = $this->input->post('id_home');
		$tagline = $this->input->post('tagline');
		$judul = $this->input->post('judul');
		$paragraf = $this->input->post('paragraf');
		$Base64Gambar = $_FILES["gambar"]["Tmp_name"];

		$path = "assets/bootstrap_user/images/illustrations/";
		$ImagePath = $path . $id_home. "hello.svg";
		Move_uploaded_file($Base64Gambar, $ImagePath);
	

			$ArrInsert = Array(
				'id_home'=> $id_home,
				'tagline'=> $tagline,
				'judul'=> $judul,
				'gambar' => $ImagePath,
				'paragraf'=> $paragraf
			);
		$this->M_home->tambahHome($ArrInsert);
		$this->session->set_flashdata('flash','<script>ditambahkan</script>');
		Redirect(base_url('home/tambah_home'));
	}
	public function edit_home($id_home){

		$data ['judul'] = 'halaman edit';
		$queryHome = $this->M_home->getById($id_home);
		$data = Array('queryHome' => $queryHome);
		$this->load->view('templates/header', $data);
		$this->load->view('Admin/home/edit', $data);
		$this->load->view('templates/footer');
	}
	public function fungsi_edithome(){
		$id_home = $this->input->post('id_home');
		$tagline = $this->input->post('tagline');
		$judul = $this->input->post('judul');
		$paragraf = $this->input->post('paragraf');
		$gambar = $this->input->post('gambar');
			$ArrEdit = Array(
				'tagline' => $tagline,
				'judul' => $judul,
				'paragraf' => $paragraf,
				'gambar' => $gambar
			);
			$this->M_home->Home_edit($id_home, $ArrEdit);
			$this->session->set_flashdata('flash','<script> data telah doedit  </script>');
			Redirect(base_url('home/edit_home/' . $id_home));
	}
	public function delete_home($id_home){
		$this->M_home->HomeDelete($id_home);
		$this->session->set_flashdata('flash','<script> data telah dihapus  </script>');
		redirect(base_url('home/index/'));
	}
}
