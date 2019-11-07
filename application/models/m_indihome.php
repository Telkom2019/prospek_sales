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

    // function select(){

    //     $this->db->order_by('id', 'DESC');

    //     $query = $this->db->get('import');

    //     return $query;

    // }

    public function chek_duplicat($id){
        $QuerySql = $this->db->query("SELECT no_inet FROM indihome WHERE no_inet IN ('$id')");
        return $QuerySql->row();
    }

    public function update_duplicat($kawasan, $witel, $datel, $sto, $ncli, $ndos, $ndem, $no_inet, $nd, $chanel, $citem_speedy, $kecepatan, $deskripsi, $tgl_reg, $tgl_etat, $status, $nama, $kcontact, $status_order, $alpro, $ccat, $jalan, $nojalan, $distrik, $kota, $cpack) {
        $this->db->query('UPDATE indihome SET kawasan = "'.$kawasan.'", witel = "'.$witel.'", datel = "'.$datel.'", sto = "'.$sto.'", ncli = "'.$ncli.'", ndos = "'.$ndos.'", ndem = "'.$ndem.'", no_inet = "'.$no_inet.'", nd = "'.$nd.'", chanel = "'.$chanel.'", citem_speedy = "'.$citem_speedy.'", kecepatan = "'.$kecepatan.'", deskripsi = "'.$deskripsi.'", tgl_reg = "'.$tgl_reg.'", tgl_etat = "'.$tgl_etat.'", status = "'.$status.'", nama = "'.$nama.'", kcontact = "'.$kcontact.'", status_order = "'.$status_order.'", alpro = "'.$alpro.'", ccat = "'.$ccat.'", jalan = "'.$jalan.'", nojalan = "'.$nojalan.'", distrik = "'.$distrik.'", kota = "'.$kota.'", cpack = "'.$cpack.'" WHERE no_inet = "'.$no_inet.'"');
    }
    public function upload($kawasan, $witel, $datel, $sto, $ncli, $ndos, $ndem, $no_inet, $nd, $chanel, $citem_speedy, $kecepatan, $deskripsi, $tgl_reg, $tgl_etat, $status, $nama, $kcontact, $status_order, $alpro, $ccat, $jalan, $nojalan, $distrik, $kota, $cpack)
    {
        // $this->db->insert_batch('indihome', $data);
        $this->db->query('REPLACE INTO indihome (kawasan, witel, datel, sto, ncli, ndos, ndem, no_inet, nd, chanel, citem_speedy, kecepatan, deskripsi, tgl_reg, tgl_etat, status, nama, kcontact, status_order, alpro, ccat, jalan, nojalan, distrik, kota, cpack)
            VALUES("'.$kawasan.'", "'.$witel.'", "'.$datel.'", "'.$sto.'", "'.$ncli.'", "'.$ndos.'", "'.$ndem.'", "'.$no_inet.'", "'.$nd.'", "'.$chanel.'", "'.$citem_speedy.'", "'.$kecepatan.'", "'.$deskripsi.'", "'.$tgl_reg.'", "'.$tgl_etat.'", "'.$status.'", "'.$nama.'", "'.$kcontact.'", "'.$status_order.'", "'.$alpro.'", "'.$ccat.'", "'.$jalan.'", "'.$nojalan.'", "'.$distrik.'", "'.$kota.'", "'.$cpack.'")');
    } 

    

    






}