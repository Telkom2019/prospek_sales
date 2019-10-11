<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_indi_storage extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function indi_storage() {
    	$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from indi_storage WHERE indihome.NO_INET = indi_storage.NO_INET) GROUP BY WITEL";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}