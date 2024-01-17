<?php 

class Portofolio extends CI_CONTROLLER{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_portofolio');
		$this->load->model('M_contact');
	}
	public function index(){
		$data['judul'] = 'halaman Portofolio';

		$data['home'] = $this->M_portofolio->getHome();
		$data['ssmd'] = $this->M_portofolio->getSosmed();
		$data['abt'] = $this->M_portofolio->getAbout();
		$data['contact'] = $this->M_portofolio->getContact();
		$this->load->view('index', $data);
		}
		public function kirim(){
		$this->load->view('user_temp/header');
		$this->load->view('user/index');
		$this->load->view('user_temp/footer');
		}
		public function fungsi_tambah(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(base_url('portofolio/index'));
		}
		else
		{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		$ArrInsert = Array(
			'name'=> $name,
			'email'=> $email,
			'message'=> $message
		);
			$this->M_portofolio->tambah_contact($ArrInsert);
			$this->session->set_flashdata('ditambahkan',' <script>ditambahkan</script> ');
			redirect(base_url('portofolio/index'));
		}
		}
	}
