<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_sekolah extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    public function tampil_data()
    {
        $query = $this->db->query('SELECT * FROM tbl_sekolah');
        return $query;
    }

    public function input_data($data,$table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function detail_data($id_sekolah = NULL)
    {
        $query = $this->db->get_where('tbl_sekolah', array('id_sekolah' => $id_sekolah))->row();
        return $query;
    }

}