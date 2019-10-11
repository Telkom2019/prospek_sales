<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ott extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function ott() {
    	$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from ott WHERE indihome.NO_INET = ott.NO_INET) GROUP BY WITEL";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}