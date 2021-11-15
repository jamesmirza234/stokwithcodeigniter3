<?php 
class Barang_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
    function jumlahuser()
    {
        $this->db->select('username');
   $query = $this->db->get('tbl_user');
   if($query->num_rows()>0)
   {
     return count($query->result_array());
   }
   else
   {
     return 0;
   }
    }

     function jumlahitem()
    {
        $this->db->select('kdBarang');
   $query = $this->db->get('tbl_barang');
   if($query->num_rows()>0)
   {
     return count($query->result_array());
   }
   else
   {
     return 0;
   }
}

    function jumlahitemmasuk()
    {
        $this->db->select('kdIn');
   $query = $this->db->get('tbl_masukheader');
   if($query->num_rows()>0)
   {
     return count($query->result_array());
   }
   else
   {
     return 0;
   }
}

   function jumlahitemkeluar()
    {
        $this->db->select('kdOut');
   $query = $this->db->get('tbl_keluarheader');
   if($query->num_rows()>0)
   {
     return count($query->result_array());
   }
   else
   {
     return 0;
   }
}

	function lihatstok()
	{

		$data = $this->db->get('tbl_barang');

		if(!empty($data))
		{
			return $data->result();
		}else
		{
			return array();
		}


	}

	public function hapus($id)
    {

        $query = $this->db->delete("tbl_barang", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }


	function insert($data)
	{

        $this->db->insert('tbl_barang', $data);
        
	}

      public function delete($id)

    {
                  $this->db->where('idBarang',$id);
         $query = $this->db->delete("tbl_barang");

        if($query){
            return true;
        }else{
            return false;
        }
    }

	 public function update($data, $id)
    {

        $query = $this->db->update("tbl_barang", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }


	  function get_by_id($id)
    {
        $this->db->where('kdBarang', $id);
        $this->db->limit(1);
        return $this->db->get('tbl_barang')->row();
    }

}