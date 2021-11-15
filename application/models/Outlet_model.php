<?php 
class Outlet_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
     function getall()
    {
        $data = $this->db->get('tbl_outlet')->result();
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

	public function delete($id)
    {
                 $this->db->where('idOutlet',$id);
        $query = $this->db->delete("tbl_outlet");

        if($query){
            return true;
        }else{
            return false;
        }

    }


	function insert($data)
	{

        $this->db->insert('tbl_outlet', $data);
        
	}

	 public function update($data, $id)
    {

        $query = $this->db->update("tbl_outlet", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }


	  function get_by_id($id)
    {
        $this->db->where('idOutlet', $id);
        $this->db->limit(1);
        return $this->db->get('tbl_outlet')->row();
    }

}