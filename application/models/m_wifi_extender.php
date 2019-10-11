<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wifi_extender extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function wifi_extender() {
    	$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from wifi_extender WHERE indihome.NO_INET = wifi_extender.NO_INET) GROUP BY WITEL";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}