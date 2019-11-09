<?php 
class C_indihome extends CI_Controller{
 
	public function __construct(){
			parent::__construct(); 
			$this->load->model('m_indihome');
			$this->load->library('Excel');

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


	// public function import(){
	// 	if(isset($_FILES["file"]["name"]))
	// 		{
	// 			$path = $_FILES["file"]["tmp_name"];
	// 			$object = PHPExcel_IOFactory::load($path);
	// 			foreach($object->getWorksheetIterator() as $worksheet)
	// 			{
	// 				$highestRow = $worksheet->getHighestRow();
	// 				$highestColumn = $worksheet->getHighestColumn();
	// 				for($row=2; $row<=$highestRow; $row++)
	// 				{   
	// 					$kawasan        = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
	// 					$witel          = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
	// 					$datel          = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
	// 					$sto            = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
	// 					$ncli           = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
	// 					$ndos           = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
	// 					$ndem           = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
	// 					$no_inet        = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
	// 					$nd             = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
	// 					$chanel         = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
	// 					$citem_speedy   = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
	// 					$kecepatan      = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
	// 					$deskripsi      = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
	// 					$tgl_reg        = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
	// 					$tgl_etat       = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
	// 					$status         = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
	// 					$nama           = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
	// 					$kcontact       = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
	// 					$status_order   = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
	// 					$alpro          = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
	// 					$ccat           = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
	// 					$jalan          = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
	// 					$nojalan        = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
	// 					$distrik        = $worksheet->getCellByColumnAndRow(23, $row)->getValue();
	// 					$kota           = $worksheet->getCellByColumnAndRow(24, $row)->getValue();
	// 					$cpack          = $worksheet->getCellByColumnAndRow(25, $row)->getValue();
	// 					$data[] = array(
	// 						'kawasan'        =>    $kawasan,
	// 						'witel'          =>    $witel,
	// 						'datel'          =>    $datel,
	// 						'sto'            =>    $sto,
	// 						'ncli'           =>    $ncli,
	// 						'ndos'           =>    $ndos,
	// 						'ndem'           =>    $ndem,
	// 						'no_inet'        =>    $no_inet,
	// 						'nd'             =>    $nd,
	// 						'chanel'         =>    $chanel,
	// 						'citem_speedy'   =>    $citem_speedy,
	// 						'kecepatan'      =>    $kecepatan,
	// 						'deskripsi'      =>    $deskripsi,
	// 						'tgl_reg'        =>    $tgl_reg,
	// 						'tgl_etat'       =>   $tgl_etat,
	// 						'status'         =>   $status,
	// 						'nama'           =>   $nama,
	// 						'kcontact'       =>   $kcontact,
	// 						'status_order'   =>   $status_order,
	// 						'alpro'          =>   $alpro,
	// 						'ccat'           =>   $ccat,
	// 						'jalan'          =>   $jalan,
	// 						'nojalan'        =>   $nojalan,
	// 						'distrik'        =>   $distrik,
	// 						'kota'           =>   $kota,
	// 						'cpack'          =>   $cpack
	// 				  );
	// 				}
	// 			}
	// 			$this->m_indihome->upload($data);
	// 			redirect('c_dashboard_admin/dashboard');
	// 		}
	// 	}

	public function import(){
		if(isset($_FILES["file"]["name"]))
			{
				$path = $_FILES["file"]["tmp_name"];
				$object = PHPExcel_IOFactory::load($path);
				foreach($object->getWorksheetIterator() as $worksheet)
				{
					$highestRow = $worksheet->getHighestRow();
					$highestColumn = $worksheet->getHighestColumn();
					for($row=2; $row<=$highestRow; $row++)
					{   
						$kawasan        = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
						$witel          = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
						$datel          = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
						$sto            = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
						$ncli           = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
						$ndos           = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
						$ndem           = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
						$no_inet        = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
						$nd             = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
						$chanel         = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
						$citem_speedy   = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
						$kecepatan      = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
						$deskripsi      = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
						$tgl_reg        = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
						$tgl_etat       = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
						$status         = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
						$nama           = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
						$kcontact       = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
						$status_order   = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
						$alpro          = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
						$ccat           = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
						$jalan          = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
						$nojalan        = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
						$distrik        = $worksheet->getCellByColumnAndRow(23, $row)->getValue();
						$kota           = $worksheet->getCellByColumnAndRow(24, $row)->getValue();
						$cpack          = $worksheet->getCellByColumnAndRow(25, $row)->getValue();
					
					$cek_duplicat = $this->m_indihome->chek_duplicat($ncli);
					if ($cek_duplicat != NULL) {
						if ($cek_duplicat->ncli == $ncli) {
							$this->m_indihome->update_duplicat($kawasan, $witel, $datel, $sto, $ncli, $ndos, $ndem, $no_inet, $nd, $chanel, $citem_speedy, $kecepatan, $deskripsi, $tgl_reg, $tgl_etat, $status, $nama, $kcontact, $status_order, $alpro, $ccat, $jalan, $nojalan, $distrik, $kota, $cpack);
						}else{
							$this->m_indihome->upload($kawasan, $witel, $datel, $sto, $ncli, $ndos, $ndem, $no_inet, $nd, $chanel, $citem_speedy, $kecepatan, $deskripsi, $tgl_reg, $tgl_etat, $status, $nama, $kcontact, $status_order, $alpro, $ccat, $jalan, $nojalan, $distrik, $kota, $cpack);
						}
					}else{
						$this->m_indihome->upload($kawasan, $witel, $datel, $sto, $ncli, $ndos, $ndem, $no_inet, $nd, $chanel, $citem_speedy, $kecepatan, $deskripsi, $tgl_reg, $tgl_etat, $status, $nama, $kcontact, $status_order, $alpro, $ccat, $jalan, $nojalan, $distrik, $kota, $cpack);
					}
					
					
					}
				}
				redirect('c_dashboard_admin/dashboard');
			}
		}
}