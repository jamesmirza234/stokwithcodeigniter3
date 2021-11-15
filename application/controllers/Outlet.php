<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet extends CI_Controller {
  function __construct(){
		parent::__construct();

		$this->load->model('Outlet_model');
		$this->load->library('form_validation');
		 $this->load->library('pagination');
          $this->load->library('datatables'); // Memanggil datatables yang terdapat pada library 
	}
 

  	public function index()
	{

           
        $data['outlet'] = $this->Outlet_model->getall(); 
       
        $this->load->view('template/header');
		$this->load->view('template/sidebar-left');
		$this->load->view('outlet/outlet',$data);
		$this->load->view('template/footer');
	}



	function formInsertOutlet(){
	  $this->load->view('template/header');
	  $this->load->view('template/sidebar-left');
      $this->load->view('outlet/insertOutlet');
      $this->load->view('template/footer');
	}

	function formEditOutlet($id){

	   $row = $this->Outlet_model->get_by_id($id);
	
	 if ($row) {
			
            $data = array(
               
			    'idOutlet' =>set_value('idOutlet',$row->idOutlet),
				'namaOutlet' => set_value('namaOutlet', $row->namaOutlet), 
				'alamaOutlet' => set_value('alamaOutlet', $row->alamaOutlet),
				
				'noTelp' => set_value('noTelp', $row->noTelp)
				
				
	    );
		
		  
		 
			//echo '<pre>';print_r($data);echo'</pre>';
			//exit();
			  $this->load->view('template/header');
			   $this->load->view('template/sidebar-left');
            $this->load->view('outlet/editoutlet', $data); 
			
			 $this->load->view('template/footer');
        } 
		
		else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('outlet'));
        }
	}

  	public function update()
	{
      $id['idOutlet'] = $this->input->post("idOutlet");
        $data = array(

            'namaOutlet'           => $this->input->post("namaOutlet"),
            'alamaOutlet'         => $this->input->post("alamaOutlet"),
            'noTelp'    => $this->input->post("noTelp")
             );
        
		
        $this->Outlet_model->update($data, $id);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');       
        redirect('outlet');
	}

  	function insert()
	{
		$this->_rulesOutlet();
		   if ($this->form_validation->run() == FALSE) {
            $this->create();
        }
        
        else {
            $data = array(
                'namaOutlet' => $this->input->post('namaOutlet', TRUE),
                'alamaOutlet' => $this->input->post('alamaOutlet', TRUE),
                
                'noTelp' => $this->input->post('noTelp', TRUE),
            );

            $this->Outlet_model->insert($data);
             $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');
            redirect('outlet');
           
        }

	}
    public function _rulesOutlet() {
        $this->form_validation->set_rules('namaOutlet', 'namaOutlet', 'trim|required');
        $this->form_validation->set_rules('alamaOutlet', 'alamaOutlet', 'trim|required');

        $this->form_validation->set_rules('noTelp', 'noTelp', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

     public function delete()
    {

        $id=$this->input->post('id');
        //   echo "<pre>";
        // print_r($id);
        // echo "</pre>";
        // exit();
        $this->Outlet_model->delete($id);
        redirect('outlet');

    }


}