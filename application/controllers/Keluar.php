<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends CI_Controller {
  function __construct(){
		parent::__construct();

		$this->load->model('Keluar_model');
		$this->load->library('form_validation'); 
	    $this->load->library('datatables'); // Memanggil datatables yang terdapat pada library
	}
   public function index()
   {

   	    $data['list'] = $this->Keluar_model->list();       
   	    $this->load->view('template/header');
		$this->load->view('template/sidebar-left');
		$this->load->view('keluar/list',$data);
		$this->load->view('template/footer');
       
   }

   public function formInsert()
   {

   	     $dariDB = $this->Keluar_model->cekkodeinput();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 3, 4);
        $kdOutSekarang = $nourut + 1;
        $data = array('kdOut' => $kdOutSekarang);
        $data['barang']= $this->Keluar_model->get_all_barang();
        $data['outlet']= $this->Keluar_model->getoutlet();
        
        


        $this->load->view('template/header');
		$this->load->view('template/sidebar-left');
		$this->load->view('keluar/insert',$data);
		$this->load->view('template/footer');

   }
   function listbarang($id)
   {
     header('Content-Type: application/json');

        $data = $this->Keluar_model->get_by_listbarang($id);
       
       // exit();
        echo json_encode($data);
   }

    function databarang($id)
   {  
   	   header('Content-Type: application/json');

        $data = $this->Keluar_model->get_by_databarang($id);
       
       // exit();
        echo json_encode($data);
   }

   function simpanheader()
   {

      $datasimpan = array(
            'kdOut' =>$this->input->post('kdOut'),
            'tglOut' =>$this->input->post('tgl'),
            'Outlet' =>$this->input->post('Outlet')
            
       );
        
        $data=$this->Keluar_model->simpanheader($datasimpan);
        echo json_encode($data);

   }
  function simpandetail()
  {
  	   $datasimpan = array(
            'namabarang' =>$this->input->post('namabarang'),
            'satuan' =>$this->input->post('satuan'),
             'qty' =>$this->input->post('qty'),
             'kdOut' =>$this->input->post('kdOut'),
              'kdBarang' =>$this->input->post('kdbarang')
  	   );
  	    
        $data=$this->Keluar_model->simpandetail($datasimpan);
        $kdbarang = $this->input->post('kdbarang'); 
        $qty = $this->input->post('qty');
        $updatestok = $this->Keluar_model->tambahstok($kdbarang,$qty);
       echo json_encode($data);
  }

}