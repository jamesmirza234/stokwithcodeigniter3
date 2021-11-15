<?php 
class Keluar_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
 


	public function list()
    {
       $sql =  $this->db->get('tbl_keluarheader')->result();
       return $sql;
    }

     public function cekkodeinput()
    {
        $query = $this->db->query("SELECT MAX(kdOut) as kdOut from tbl_keluarheader");
        $hasil = $query->row();
        return $hasil->kdOut;
    }
    function get_all_barang()
    {
        return $this->db->get('tbl_barang')->result();
    }
   function getoutlet()
   {

        return $this->db->get('tbl_outlet')->result();
   } 

    function get_by_listbarang($id) {
        $this->db->where('kdOut',$id);
      $res = $this->db->get('tbl_keluardetail')->result_array();
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
             
            $this->db->insert('tbl_keluarheader', $data);
            
        }

          function simpandetail($data)
        {
             
            $this->db->insert('tbl_keluardetail', $data);
            
        }

        function tambahstok($kdbarang,$qty)
        {
          $this->db->where('kdBarang',$kdbarang);
          $sql = $this->db->get('tbl_barang');
          if($sql->num_rows() > 0 )
          {  
              $data = $sql->result();
             
             $stokakhir  = $data[0]->stokAkhir + $qty ;
             $stokmasuk = $data[0]->stokMasuk + $qty;
             $this->db->set('stokAkhir', $stokakhir);
             $this->db->set('stokMasuk', $stokmasuk);
             $this->db->where('kdBarang',$kdbarang);
             $this->db->update('tbl_barang');
          }

        }
}