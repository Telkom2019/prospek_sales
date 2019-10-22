<?php 

class Auth extends CI_Controller{

	public function login()
	{
		$this->form_validation->set_rules('username','Username','required',[
			'required'	=> 'Username wajib diisi!'
	]);
		$this->form_validation->set_rules('password','Password','required',[
			'required'	=> 'Password wajib diisi!'
	]);
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('login');
			
			
		}else{
			$auth = $this->model_auth->cek_login();
			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
  <strong>Username atau Password anda Salah!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
				redirect('Auth/login');
			}else{
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);

				switch($auth->role_id){
					case 1 :	redirect('C_dashboard_admin/dashboard');
								break;
					case 2 :	redirect('C_dashboard_user/dashboard');
								break;
					default: break;

				}
			}
			
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth/login');
	}
}

 ?>