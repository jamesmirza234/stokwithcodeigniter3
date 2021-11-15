<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {
  function __construct(){
		parent::__construct();

		$this->load->model('Vendor_model');
		$this->load->library('form_validation');
		 $this->load->library('pagination');
          $this->load->library('datatables'); // Memanggil datatables yang terdapat pada library 
	}
    function index()
    {
    	 $data['vendor'] = $this->Vendor_model->getall(); 
       
        $this->load->view('template/header');
		$this->load->view('template/sidebar-left');
		$this->load->view('vendor/vendor',$data);
		$this->load->view('template/footer');
    }

    function formInsert(){
	  $this->load->view('template/header');
	  $this->load->view('template/sidebar-left');
      $this->load->view('vendor/forminsert');
      $this->load->view('template/footer');
	}


	function insert()
	{
		
        
       
            $data = array(
                'namaVendor' => $this->input->post('namaVendor', TRUE),
                'alamatVendor' => $this->input->post('alamatVendor', TRUE),                
                'noTelp' => $this->input->post('noTelp', TRUE),
            );

            $this->Vendor_model->insert($data);
             $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');
            redirect('vendor');
           
        

	}

  function formEdit($id){

     $row = $this->Vendor_model->get_by_id($id);
    
   if ($row) {
      
            $data = array(
               
        'idVendor' =>set_value('idVendor',$row->idVendor),
        'namaVendor' => set_value('namaVendor', $row->namaVendor), 
        'alamatVendor' => set_value('alamatVendor', $row->alamatVendor),        
        'noTelp' => set_value('noTelp', $row->noTelp)
        
        
      );
    
      
     
      
        $this->load->view('template/header');
         $this->load->view('template/sidebar-left');
            $this->load->view('vendor/edit', $data); 
      
       $this->load->view('template/footer');
        } 
    
    else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Dashboard/barang'));
        }
  }

      public function update()
  {
      $id['idVendor'] = $this->input->post("idVendor");
        $data = array(

            'namaVendor'           => $this->input->post("namaVendor"),
            'alamatVendor'         => $this->input->post("alamatVendor"),
            'noTelp'    => $this->input->post("noTelp")
             );

       

        $this->Vendor_model->update($data, $id);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('vendor');
  }

    public function delete()
    {
        $id=$this->input->post('id');

      
        $this->Vendor_model->delete($id);
        redirect('vendor');

    }
  

 }