<?php 
class C_indi_server extends CI_Controller{


	public function __construct(){
			parent::__construct();
			$this->load->model('m_indi_server');

	// 		if($this->session->userdata('role_id')!='1'){
	// 			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
	//   <strong>Anda belum Login !!!</strong>
	//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	//     <span aria-hidden="true">&times;</span>
	//   </button>
	// </div>');
	// 			redirect('auth/login');
	// 		}
		}
	public function index (){
		

		$this->load->view('templates/header');
		if ($this->session->userdata('role_id') ==='1') {
			$this->load->view('templates/sidebar');
		}elseif($this->session->userdata('role_id') ==='2'){
			$this->load->view('templates/sidebar_user');
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
	   <strong>Anda belum Login !!!</strong>
	   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	     <span aria-hidden="true">&times;</span>
	   </button>
	 </div>');
	 			redirect('auth/login');
		}
		$this->load->view('indi_server/v_indi_server');
		$this->load->view('templates/footer');


		
	}

	public function view_indi_server($id){
		$explode = explode('~', $id);
		$periode_awal = $explode[0];
		$periode_akhir = $explode[1];
		$data['indi_server'] = $this->m_indi_server->indi_server($periode_awal, $periode_akhir);

		$this->load->view('indi_server/view_list', $data);
	}
}

 ?>