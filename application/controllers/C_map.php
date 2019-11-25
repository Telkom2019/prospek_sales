<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_map extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		// $this->simple_login->cek_login();
		$this->load->library(array('googlemaps'));
		$this->load->model('m_gis'); 
	}
	 
	public function index()
	{
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('v_admin',$data, FALSE);
		
	}
	public function inputpelanggan()
	{ 
		//Menampilkaan Lokasi
		$this->load->library('googlemaps'); 
		$config['center'] = '-6.834127, 108.221518';
		$config['zoom'] = '15';
		$this->googlemaps->initialize($config);
		$marker['position'] = '-6.834127, 108.221518';
		$marker['draggable'] = true;
		$marker['ondragend'] = 'setMapToForm(event.latLng.lat(),event.latLng.lng());';
		$this->googlemaps->add_marker($marker);
 
		//validasi input
		$valid=$this->form_validation;
		$valid->set_rules('NO_INET','No Internet','required|is_unique[tbl_pemetaan.NO_INET]');
		$valid->set_rules('NAMA','Nama','required');
		$valid->set_rules('JALAN','Jalan','required');
		$valid->set_rules('NOJALAN','No Jalan','required');
		$valid->set_rules('DISTRIK','Distrik','required');
		$valid->set_rules('KOTA','Kota','required');
		$valid->set_rules('latitude','Latitude','required');
		$valid->set_rules('longitude','Longitude','required');
		$valid->set_rules('ADD_ON','Add On','required');


		if($valid->run()==FALSE)
		{

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
		$this->load->view('pemetaan/v_input_pelanggan',$data, FALSE);
		$this->load->view('templates/footer');


		}else{
			$i=$this->input;
			$data = array('NO_INET'=> $i->post('NO_INET'), 
				'NAMA' => $i->post('NAMA'),
				'JALAN' => $i->post('JALAN'),
				'NOJALAN' => $i->post('NOJALAN'),
				'DISTRIK' => $i->post('DISTRIK'),
				'KOTA' => $i->post('KOTA'),
				'latitude' => $i->post('latitude'),
				'longitude' => $i->post('longitude'),
				'ADD_ON' => $i->post('ADD_ON')
		);
			$this->m_gis->inputpelanggan($data);
			$this->session->set_flashdata('sukses', 'Data Pelanggan Berhasil diTambahkan');
			redirect(base_url('c_map/inputpelanggan'),'refresh');
		}
	}
	public function datapelanggan()
	{ 
		$pelanggan=$this->m_gis->datapelanggan();
		$map = $this->googlemaps->create_map();
		$data = array('map'=>$map,
						'pelanggan'=>$pelanggan
					);

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
		$this->load->view('pemetaan/v_data_pelanggan', $data, FALSE);
		$this->load->view('templates/footer');



	}

	public function getInet() 
	{
		$id = $_GET['c'];
		$GetNoInet = $this->m_gis->getInet($id);
		echo json_encode($GetNoInet);
	}

	//delete
	public function delete($NO_INET)
	{
		$data = array('NO_INET' => $NO_INET);
		$this->m_gis->delete($data);
		$this->session->set_flashdata('sukses','Data Berhasil Dihapus');
		redirect(base_url('c_map/datapelanggan'),'refresh');
	}
}