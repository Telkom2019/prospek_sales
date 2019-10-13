<?php 
class C_mhs extends CI_Controller{

	public function index ()
	{
		$data['mahasiswa'] = $this->m_mhs->tampil_data()->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_mhs', $data);
		$this->load->view('templates/footer');
	}
}

  