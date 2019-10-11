<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_indihome_music extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function indihome_music() {
    	$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from indihome_music WHERE indihome.NO_INET = indihome_music.NO_INET) GROUP BY WITEL";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}