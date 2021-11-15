<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  function __construct(){
		parent::__construct();

		$this->load->model('Barang_model');
		$this->load->model('user_model');
		$this->load->library('form_validation'); 
	}


	
	public function index()
	{
        $data['username'] = $this->user_model->get_by_id($this->session->userdata['iduser']);
       
        // print_r($data['username']);
        // 	exit();
		$data['user'] = $this->Barang_model->jumlahuser();
		$data['item'] = $this->Barang_model->jumlahitem();
		$data['itemmasuk'] = $this->Barang_model->jumlahitemmasuk();
		$data['itemkeluar'] = $this->Barang_model->jumlahitemkeluar();
		$this->load->view('template/header');
		$this->load->view('template/sidebar-left');
		$this->load->view('dashboard',$data);
		$this->load->view('template/footer');
	}

	public function barang()
	{
		$data['barang'] = $this->Barang_model->lihatstok();
		
        $this->load->view('template/header');
		$this->load->view('template/sidebar-left');
		$this->load->view('admin/barang',$data);
		$this->load->view('template/footer');

	}

	public function outlet()
	{
        $this->load->view('template/header');
		$this->load->view('template/sidebar-left');
		$this->load->view('admin/barang');
		$this->load->view('template/footer');

	}
	function formInsertBarang(){
	  $this->load->view('template/header');
	  $this->load->view('template/sidebar-left');
      $this->load->view('admin/insertBarang');
      $this->load->view('template/footer');
	}

	function formEditBarang($id){

	   $row = $this->Barang_model->get_by_id($id);
	   // echo "<pre>";
	   // print_r($row);
	   // echo "</pre>";
	   // exit();
	 if ($row) {
			
            $data = array(
               
			    'kdBarang' =>set_value('kdBarang',$row->kdBarang),
				'namaBarang' => set_value('namaBarang', $row->namaBarang), 
				'satuan' => set_value('satuan', $row->satuan),
				
				'keterangan' => set_value('keterangan', $row->keterangan),
				'stokAwal' => set_value('stokAwal', $row->stokAwal),
				'stokAkhir' => set_value('stokAkhir', $row->stokAkhir),
				'stokMasuk' => set_value('stokMasuk', $row->stokMasuk),
				'stokKeluar' => set_value('stokKeluar', $row->stokKeluar)
				//'stokMin' => set_value('stokMin', $row->stokMin),
				//'stokMax' => set_value('stokMax', $row->stokMax),
				
	    );
		
		  
		 
			//echo '<pre>';print_r($data);echo'</pre>';
			//exit();
			  $this->load->view('template/header');
			   $this->load->view('template/sidebar-left');
            $this->load->view('admin/editbarang', $data); 
			
			 $this->load->view('template/footer');
        } 
		
		else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Dashboard/barang'));
        }
	}

	function insertBarang()
	{
		$this->_rulesBarang();
		   if ($this->form_validation->run() == FALSE) {
            $this->create();
        }
        
        else {
            $data = array(
                'kdBarang' => $this->input->post('kdBarang', TRUE),
                'namaBarang' => $this->input->post('namaBarang', TRUE),
                'satuan' => $this->input->post('satuan', TRUE),
                'keterangan' => $this->input->post('keterangan', TRUE),
            );

            $this->Barang_model->insert($data);
             $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');
            redirect('dashboard/barang');
           
        }

	}
	public function updatebarang()
	{
      $id['kdBarang'] = $this->input->post("kdBarang");
        $data = array(

            'namaBarang'           => $this->input->post("namaBarang"),
            'satuan'         => $this->input->post("satuan"),
            'stokAwal'    => $this->input->post("stokAwal"),
            'stokAkhir'         => $this->input->post("stokAkhir"),
            'stokMasuk'         => $this->input->post("stokMasuk"),
            'stokKeluar'         => $this->input->post("stokKeluar"),
            'keterangan'         => $this->input->post("keterangan"),


        );

        $this->Barang_model->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('dashboard/barang');
	}
    
    public function hapusbarang($kdBarang)
    {
        $id['kdBarang'] = $this->uri->segment(3);

        $this->Barang_model->hapus($id);

        //redirect
        redirect('dashboard/barang');

    }
	 public function _rulesBarang() {
        $this->form_validation->set_rules('kdBarang', 'kdBarang', 'trim|required');
        $this->form_validation->set_rules('namaBarang', 'namaBarang', 'trim|required');

        $this->form_validation->set_rules('satuan', 'satuan', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
