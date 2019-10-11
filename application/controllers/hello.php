<?php 
class Hello extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id')!='2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
  <strong>Anda belum Login !!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('auth/login');
		}
	}
	public function index (){
		$this->load->model('m_mhs');
		$data['mahasiswa']=$this->m_mhs->get_data();

		$this->load->view('v_mhs', $data);
	}
}

 ?>