<?php 
class Masuk_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
 


	public function list()
    {
       $sql =  $this->db->get('tbl_masukheader')->result();
       return $sql;
    }

     public function cekkodeinput()
    {
        $query = $this->db->query("SELECT MAX(kdIn) as kdIn from tbl_masukheader");
        $hasil = $query->row();
        return $hasil->kdIn;
    }
    function get_all_barang()
    {
        return $this->db->get('tbl_barang')->result();
    }
   function getvendor()
   {

        return $this->db->get('tbl_vendor')->result();
   } 

    function get_by_listbarang($id) {
        $this->db->where('kdIn',$id);
      $res = $this->db->get('tbl_masukdetail')->result_array();
      $data = $res[0];
        return $res;

        }

     function get_by_databarang($id) {
        $this->db->where('idBarang',$id);
      $res = $this->db->get('tbl_barang')->result_array();
      $data = $res[0];
        return $data;

        }

        function simpanheader($data)
        {
             
            $this->db->insert('tbl_masukheader', $data);
            
        }

          function simpandetail($data)
        {
             
            $this->db->insert('tbl_masukdetail', $data);
            
        }

        function tambahstok($kdbarang,$qty)
        {
          $this->db->where('kdBarang',$kdbarang);
          $sql = $this->db->get('tbl_barang');
          if($sql->num_rows() > 0 )
          {  
              $data = $sql->result();
             // echo "<pre>";
             // print_r($data);
             // echo "</pre>";
             //exit();
             $stokakhir  = $data[0]->stokAkhir + $qty ;
             $stokmasuk = $data[0]->stokMasuk + $qty;
             $this->db->set('stokAkhir', $stokakhir);
             $this->db->set('stokMasuk', $stokmasuk);
             $this->db->where('kdBarang',$kdbarang);
             $this->db->update('tbl_barang');
          }

        }
}