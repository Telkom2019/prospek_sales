<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_indi_server extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function indi_server() {
    	$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from indi_server WHERE indihome.NO_INET = indi_server.NO_INET) GROUP BY WITEL";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}