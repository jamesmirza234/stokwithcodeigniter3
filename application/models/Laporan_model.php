<?php 
class Laporan_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
 
   
    function listmasuk($tgldari,$tlgsampai)
    {
    	$this->db->where('tglin >=',$tgldari);
    	$this->db->where('tglin <=',$tlgsampai);
    	$sql = $this->db->get('tbl_masukheader');
    	
    }

}