<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_indihome_smart extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function indihome_smart() {
    	$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from indihome_smart WHERE indihome.NO_INET = indihome_smart.NO_INET) GROUP BY WITEL";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}