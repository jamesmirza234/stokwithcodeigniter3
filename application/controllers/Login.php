<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 public function __construct()
    {
    parent::__construct();
        if ($this->session->userdata('username') AND $this->session->userdata('password') AND $this->session->userdata('level')=='admin') {
      redirect(base_url('login'));
    }
    $this->load->model('login_model');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $this->load->view('login');
  }
  
  public function aksi_login(){
  $username = $this->input->post('username');
  $password = $this->input->post('password');
  $where = array(
    'username' => $username,
    'password' => md5($password)
    );
    $cek = $this->login_model->cek_login($where);
    // print_r($cek[0]->level);
    // exit();

 if($cek > 0){

            $data_session = array(
              'iduser' =>$cek[0]->id,
              'username' => $username,
           
              'status' => "login",
               'level'=>$cek[0]->level
              );

            $this->session->set_userdata($data_session);
  
    redirect(base_url("dashboard"));
  }else{
    $this->session->set_flashdata('notif', 'Your Login Failed !!');
    redirect(base_url("login"));
  }
}


     function logout(){

$this->session->sess_destroy();

redirect(base_url('login'));

}

}