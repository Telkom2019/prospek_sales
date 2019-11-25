<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_pemetaan extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		// $this->simple_login->cek_login();
		$this->load->library(array('googlemaps'));
		$this->load->model('m_gis'); 
		$this->load->library("Session");
	}
	 
	public function index()
	{
		//Menampilkaan Lokasi
		$this->load->library('googlemaps'); 
		$config['center'] = '-6.834127, 108.221518';
		$config['zoom'] = '15';
		$this->googlemaps->initialize($config);

		$pelanggan=$this->m_gis->datapelanggan();
		foreach ($pelanggan as $key => $value) {
			$marker = array();
			$marker['animation'] = 'DROP';
			$marker['position'] = "$value->LATITUDE, $value->LONGITUDE";
			$marker['infowindow_content'] = '<div class="media" style="widt:300px;">';
			$marker['infowindow_content'] .= '<div class="media-left">';
			$marker['infowindow_content'] .= '</div>';
			$marker['infowindow_content'] .= '<div class="media-body">';
			$marker['infowindow_content'] .= '<h5 class="media-heading">'.$value->ADD_ON.'</h5>';
			// $marker['infowindow_content'] .= '<a>'.$value->JALAN.'</a>';
			// $marker['infowindow_content'] .= '<a>'.$value->NOJALAN.'</a><br>';
			// $marker['infowindow_content'] .= '<a>'.$value->DISTRIK.'</a><br>';
			$marker['infowindow_content'] .= '<a>'.$value->NAMA.'</a><br>';
			$marker['infowindow_content'] .= '<a>'.$value->KOTA.'</a><br>';
			$marker['infowindow_content'] .= '</div>';
			$marker['infowindow_content'] .= '</div>';
			if ($value->ADD_ON == 'INDIHOME') {
				$marker['icon'] = base_url('assets/icon/indihome3.png');
			}elseif ($value->ADD_ON == 'MOVIN') {
				$marker['icon'] = base_url('assets/icon/movin1.png');
			}else{
				$marker['icon'] = base_url('assets/icon/indihome_gamer1.png');
			}
			

			$this->googlemaps->add_marker($marker);
		}
		$this->googlemaps->initialize($config);
		$data['map'] = $this->googlemaps->create_map();

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
		$this->load->view('pemetaan/v_pemetaan', $data, FALSE);
		$this->load->view('templates/footer');
		
	}
	
}