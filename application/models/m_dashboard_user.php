<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard_user extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    Public function indihome() {
        $wordsquery = "SELECT * FROM indihome";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }
    Public function movin() {
        $wordsquery = "SELECT * FROM movin";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    Public function indihome_gamer() {
        $wordsquery = "SELECT * FROM indihome_gamer";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    Public function ott() {
        $wordsquery = "SELECT * FROM ott";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    Public function indihome_music() {
        $wordsquery = "SELECT * FROM indihome_music";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    Public function video_call() {
    	$wordsquery = "SELECT * FROM video_call";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    Public function indi_storage() {
        $wordsquery = "SELECT * FROM indi_storage";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    Public function indi_server() {
        $wordsquery = "SELECT * FROM indi_server";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    Public function plc() {
        $wordsquery = "SELECT * FROM plc";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    Public function wifi_extender() {
        $wordsquery = "SELECT * FROM wifi_extender";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    Public function indihome_smart() {
        $wordsquery = "SELECT * FROM indihome_smart";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    Public function indihome_study() {
        $wordsquery = "SELECT * FROM indihome_study";
        $query = $this->db->query($wordsquery);
        return $query->result();
    }

    

}