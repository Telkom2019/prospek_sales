<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_indihome extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function indihome($witel, $datel) {
        // $wordsquery = "SELECT * FROM indihome where WITEL IN ('$witel') and DATEL IN ('$datel') and TGL_REG BETWEEN '$periode_awal' AND '$periode_akhir'";
         $wordsquery = "SELECT * FROM indihome where WITEL IN ('$witel') and DATEL IN ('$datel')";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }   

    public function witel(){
    	$wordsquery = "SELECT * FROM tb_witel";
        $query = $this->db->query($wordsquery);
        return $query->result(); 
    }

    public function datel(){
        $wordsquery = "SELECT * FROM tb_datel";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }
    






}