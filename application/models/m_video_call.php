<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_video_call extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function video_call() {
    	$wordsquery = "SELECT WITEL, COUNT(*) as jtb FROM indihome WHERE NOT EXISTS (SELECT * from video_call WHERE indihome.NO_INET = video_call.NO_INET) GROUP BY WITEL";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }



}