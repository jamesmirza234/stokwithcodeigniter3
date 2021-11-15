<?php 
class User_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
   

	

	function getall()
	{
		$data = $this->db->get('tbl_user')->result();
        return $data;
	}

		function insert($data)
	{

        $this->db->insert('tbl_user', $data);
        
	}

		  function get_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->limit(1);
        return $this->db->get('tbl_user')->row();
    }
     public function update($data, $id)
    {

        $query = $this->db->update("tbl_user", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}