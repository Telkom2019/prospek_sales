<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_user extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    public function tampil_data()
    {
        return $this->db->get('login');
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

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('login', array('id' => $id))->row();
        return $query;
    }

}