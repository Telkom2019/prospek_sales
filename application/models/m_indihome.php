<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_indihome extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function indihome() {
    	$wordsquery = "SELECT * FROM indihome";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}