<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  function __construct(){
		parent::__construct();

		$this->load->model('User_model');
		$this->load->library('form_validation'); 
	}
 

  public function index()
  {

  	    $data['user'] = $this->User_model->getall();   
  	    // echo "<pre>";
  	    // print_r( $data['user'])  ;
  	    // echo "</pre>";
  	    // exit();    
  	    $this->load->view('template/header');
		$this->load->view('template/sidebar-left');
		$this->load->view('user/user',$data);
		$this->load->view('template/footer');
  }
  	function formInsert(){
	  $this->load->view('template/header');
	  $this->load->view('template/sidebar-left');
      $this->load->view('user/insertUser');
      $this->load->view('template/footer');
	}

	function insert()
	{
		
            $data = array(
                'username' => $this->input->post('username', TRUE),
                'password' => md5($this->input->post('password', TRUE)),
                
                'level' => $this->input->post('level', TRUE),
            );

            $this->User_model->insert($data);
             $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');
            redirect('user');
           
       

	}

	function edit($id){

	   $row = $this->User_model->get_by_id($id);
	
	 if ($row) {
			
            $data = array(
               
			    'username' =>set_value('username',$row->username),
				'password' => set_value('password', $row->password), 
				
				'id' => set_value('id', $row->id),
				'level' => set_value('level', $row->level)			
				
	    );
		
		   		
			    $this->load->view('template/header');
			    $this->load->view('template/sidebar-left');
                $this->load->view('user/edituser', $data); 			
			     $this->load->view('template/footer');
        } 
		
		else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('outlet'));
        }
	}



		public function update()
	{
      $id['id'] = $this->input->post("id");
        $data = array(

            'username'  => $this->input->post("username"),
            'password'  => md5($this->input->post("password")),
            'level'     => $this->input->post("level")
             );

       $this->User_model->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

          redirect('user');
	}

}