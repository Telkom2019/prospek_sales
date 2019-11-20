<?php 
defined('BASEPATH') OR exit ('No direct script acces allowed');

class M_gis extends CI_Model{
	
	//tambah data
	public function inputpelanggan($data)
	{
		$this->db->insert('tbl_pemetaan', $data);
	}
	public function datapelanggan()
	{ 
		$this->db->select('*');
		$this->db->from('tbl_pemetaan');
		$query=$this->db->get();
		return $query->result();
	}
	public function getInet($id)
	{
		$this->db->select('*');
		$this->db->from('indihome');
		$this->db->where('NO_INET', $id);
		$query=$this->db->get();
		return $query->row();
	}

	public function delete($data)
	{
		$this->db->where('NO_INET', $data['NO_INET']);
		$this->db->delete('tbl_pemetaan');
	}
}