<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
  function __construct(){
		parent::__construct();

		$this->load->model('Masuk_model');
		$this->load->library('form_validation'); 
	    $this->load->library('datatables'); // Memanggil datatables yang terdapat pada library
	}
   public function index()
   {

   	    $data['list'] = $this->Masuk_model->list();       
   	    $this->load->view('template/header');
		$this->load->view('template/sidebar-left');
		$this->load->view('masuk/list',$data);
		$this->load->view('template/footer');
       
   }

   public function formInsert()
   {

   	     $dariDB = $this->Masuk_model->cekkodeinput();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 3, 4);
        $kdInSekarang = $nourut + 1;
        $data = array('kdIn' => $kdInSekarang);
        $data['barang']= $this->Masuk_model->get_all_barang();
        $data['vendor']= $this->Masuk_model->getvendor();
        
        


        $this->load->view('template/header');
		$this->load->view('template/sidebar-left');
		$this->load->view('masuk/insert',$data);
		$this->load->view('template/footer');

   }
   function listbarang($id)
   {
     header('Content-Type: application/json');

        $data = $this->Masuk_model->get_by_listbarang($id);
       
       // exit();
        echo json_encode($data);
   }

    function databarang($id)
   {  
   	   header('Content-Type: application/json');

        $data = $this->Masuk_model->get_by_databarang($id);
       
       // exit();
        echo json_encode($data);
   }

   function simpanheader()
   {

      $datasimpan = array(
            'kdIn' =>$this->input->post('kdIn'),
            'tglin' =>$this->input->post('tgl'),
            'vendor' =>$this->input->post('vendor')
            
       );
        
        $data=$this->Masuk_model->simpanheader($datasimpan);
        echo json_encode($data);

   }
  function simpandetail()
  {
  	   $datasimpan = array(
            'namabarang' =>$this->input->post('namabarang'),
            'satuan' =>$this->input->post('satuan'),
             'qty' =>$this->input->post('qty'),
             'kdIn' =>$this->input->post('kdIn'),
             'kdBarang' =>$this->input->post('kdbarang'),
              'tglin' =>$this->input->post('tgl')
  	   );
  	    
        $data=$this->Masuk_model->simpandetail($datasimpan);
        $kdbarang = $this->input->post('kdbarang'); 
        $qty = $this->input->post('qty');
        $updatestok = $this->Masuk_model->tambahstok($kdbarang,$qty);
       echo json_encode($data);
  }
  

}