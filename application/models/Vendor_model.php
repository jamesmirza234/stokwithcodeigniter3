<?php 
class Vendor_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

    function get_by_id($id)
    {
        $this->db->where('idVendor', $id);
        $this->db->limit(1);
        return $this->db->get('tbl_vendor')->row();
    }

     function getall()
    {
        $data = $this->db->get('tbl_vendor')->result();
        return $data;
    }
	function lihat($limit, $start)
	{

		$data = $this->db->get('tbl_outlet', $limit, $start);

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

        $query = $this->db->delete("tbl_outlet", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }


	function insert($data)
	{

        $this->db->insert('tbl_vendor', $data);
        
	}

	 

     public function update($data, $id)
    {

        $query = $this->db->update("tbl_vendor", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

      public function delete($id)

    {
                  $this->db->where('idVendor',$id);
         $query = $this->db->delete("tbl_vendor");

        if($query){
            return true;
        }else{
            return false;
        }
    }
	

}