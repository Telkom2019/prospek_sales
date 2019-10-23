<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wifi_extender extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function wifi_extender($periode_awal, $periode_akhir) {
    	if ($periode_awal==null||$periode_akhir==null){
    		$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from wifi_extender WHERE indihome.NO_INET = wifi_extender.NO_INET) GROUP BY WITEL";
    	}else{
    		$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from wifi_extender WHERE indihome.NO_INET = wifi_extender.NO_INET) AND TGL_REG BETWEEN '$periode_awal' AND '$periode_akhir' GROUP BY WITEL";
    	}
    	
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}