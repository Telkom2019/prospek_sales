<?php 
class C_indihome extends CI_Controller{


	public function __construct(){
			parent::__construct();
			$this->load->model('m_indihome');

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
		
		$data['witel'] = $this->m_indihome->witel();
		$data['datel'] = $this->m_indihome->datel();

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
		$this->load->view('indihome/v_indihome', $data);
		$this->load->view('templates/footer');


		
	}
	public function view_list($id){
		$explode = explode('~', $id);
		$witel = $explode[0];
		$datel = $explode[1];
		$data['indihome'] = $this->m_indihome->indihome($witel, $datel);

		$this->load->view('indihome/view_list', $data);
	}

}

 ?>