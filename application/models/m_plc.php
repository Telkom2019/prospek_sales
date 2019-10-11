<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_plc extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function plc() {
    	$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from plc WHERE indihome.NO_INET = plc.NO_INET) GROUP BY WITEL";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}