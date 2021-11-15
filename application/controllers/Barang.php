<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
  function __construct(){
		parent::__construct();

		$this->load->model('Barang_model');
		$this->load->library('form_validation'); 
	}
 
   public function delete()
    {
        $id=$this->input->post('id');
        $this->Barang_model->delete($id);
        redirect('dashboard/barang');

    }
  

}