<?php 

class Contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_contact');
	}
	public function index(){
		$data['contact'] = $this->M_contact->getContact();
		$this->load->view('templates/header');
		$this->load->view('Admin/contact/index', $data);
		$this->load->view('templates/footer');
	}
	public function hal_tambah(){
		$this->load->view('templates/header');
		$this->load->view('Admin/contact/tambah');
		$this->load->view('templates/footer');
	}
	public function fungsi_tambah(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(base_url('contact/hal_tambah'));
		}
		else
		{
		$id_contact = $this->input->post('id_contact');
		$deskripsi = $this->input->post('deskripsi');
		$paragraf = $this->input->post('paragraf');
		$ArrInsert = Array(
			'id_contact' => $id_contact,
			'deskripsi' => $deskripsi,
			'paragraf' => $paragraf
		);
		$this->M_contact->tambahContact($ArrInsert);
		$this->session->set_flashdata('ditambahkan',' <script>data sukses ditambahkan</script> ');
		redirect(base_url('contact/hal_tambah/'));
	}
	}
	public function hal_edit($id_contact){
		$data['cont'] = $this->M_contact->getByid($id_contact);
		$this->load->view('templates/header');
		$this->load->view('Admin/contact/edit', $data);
		$this->load->view('templates/footer');
	}
	public function fungsi_edit(){
		$id_contact = $this->input->post('id_contact');
		$deskripsi = $this->input->post('deskripsi');
		$paragraf = $this->input->post('paragraf');
		$ArrUpdate = Array(
			'deskripsi' => $deskripsi,
			'paragraf' => $paragraf
		);
		$this->M_contact->editContact($id_contact , $ArrUpdate);
		$this->session->set_flashdata('diedit',' <script>data sukses diedit</script> ');
		redirect(base_url('contact/hal_edit/' . $id_contact));
	}
	public function deleteContact($id_contact){
		$this->M_contact->deletecont($id_contact);
		$this->session->set_flashdata('dihapus',' <script>data telah dihapus</script> ');
		redirect(base_url('contact/index/'));
	}
}
