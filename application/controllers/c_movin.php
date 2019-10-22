<?php 
class C_movin extends CI_Controller{


	public function __construct(){
			parent::__construct();
			$this->load->model('m_movin');

	// 		if($this->session->userdata('role_id')!='1' & '2'){
	 // 			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
	 //   <strong>Anda belum Login !!!</strong>
	 //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 //     <span aria-hidden="true">&times;</span>
	 //   </button>
	 // </div>');
	 // 			redirect('auth/login');
	 		//}
		}
	public function index (){
		

		$this->load->view('templates/header');
		//$this->load->view('templates/sidebar');
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
		$this->load->view('movin/v_movin');
		$this->load->view('templates/footer');	
	}
	public function view_movin($id){
		$explode = explode('~', $id);
		$periode_awal = $explode[0];
		$periode_akhir = $explode[1];
		$data['movin'] = $this->m_movin->movin($periode_awal, $periode_akhir);

		$this->load->view('movin/view_list', $data);
	} 
}

 ?>