
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
		$valid->set_rules('ND_INTERNET','No Internet','required',array('required'=>'%s Harus Diisi'));

		if($valid->run()==FALSE)
		{

			$data['map'] = $this->googlemaps->create_map();
			$this->load->view('templates/header');
        	$this->load->view('templates/sidebar');
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
			$this->session->set_flashdata('sukses', 'Data Sekolah Berhasil diTambahkan');
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
        $this->load->view('templates/sidebar');
		$this->load->view('pemetaan/v_data_pelanggan', $data, FALSE);
		$this->load->view('templates/footer');
	}

	public function getInet() 
	{
		$id = $_GET['c'];
		$GetNoInet = $this->m_gis->getInet($id);
		echo json_encode($GetNoInet);
	}
}