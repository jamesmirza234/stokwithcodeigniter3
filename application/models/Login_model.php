	<?php 
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	// function cek_login($table,$where){		
	// 	return $this->db->get_where($table,$where);
	// }	

	// 	function cek_login($where){		
 //   		       $this->db->limit(1);
	// 	return $this->db->get_where('user',$where)->result();
	// }	


		function cek_login($where){		
   		       $this->db->limit(1);
		return $this->db->get_where('tbl_user',$where)->result();
	}	

	}