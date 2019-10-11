<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_movin extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function movin() {
    	$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from movin WHERE indihome.NO_INET = movin.NO_INET) GROUP BY WITEL";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}