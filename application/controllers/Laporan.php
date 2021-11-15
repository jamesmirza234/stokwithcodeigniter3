<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
  function __construct(){
		parent::__construct();
     $this->load->library('fpdf/fpdf');
     $this->load->model('Laporan_model');
		
	}
 
		function stok()
			{
		        $pdf = new FPDF('P', 'mm','Letter');

		        $pdf->AddPage();
                
		        $pdf->SetFont('Arial','B',16);
		        $pdf->Cell(0,7,'Laporan Stok Barang',0,1,'C');
		        $pdf->Cell(10,7,'',0,1);

		        $pdf->SetFont('Arial','B',10);

		        $pdf->Cell(8,6,'No',1,0,'C');
		        $pdf->Cell(60,6,'Nama Barang',1,0,'C');
		         $pdf->Cell(40,6,'Satuan',1,0,'C');
		        $pdf->Cell(30,6,'stok Awal',1,0,'C');
		        $pdf->Cell(30,6,'stok Akhir',1,1,'C');
		        

		        $pdf->SetFont('Arial','',10);
		        $barang = $this->db->get('tbl_barang')->result();
		        $no=1;
		        foreach ($barang as $data){
		             $pdf->Cell(8,6,$no,1,0);
		             $pdf->Cell(60,6,$data->namaBarang,1,0);
		             $pdf->Cell(40,6,$data->satuan,1,0);
		             $pdf->Cell(30,6,$data->stokAwal,1,0);
		             $pdf->Cell(30,6,$data->stokAkhir,1,1);

		            // $pdf->Cell(35,6,"Rp ".number_format($data->harga, 0, ".", "."),1,0);
		            // $pdf->Cell(15,6,$data->stok,1,1);
		            $no++;
		        }
		        $pdf->Output();
			}


			function listreportmasuk()
			{
                  
				    $this->load->view('template/header');
					$this->load->view('template/sidebar-left');
					$this->load->view('report/Listmasuk');
					$this->load->view('template/footer');
			}

			function cekreportmasuk()
			{
				   $tgldari=$this->input->post('tgldari');
                   $tglsampai =$this->input->post('tglsampai');
			}


			function barangmasuk()
			{
		        $pdf = new FPDF('P', 'mm','Letter');

		        $pdf->AddPage();
                
		        $pdf->SetFont('Arial','B',16);
		        $pdf->Cell(0,7,'Laporan Barang Masuk',0,1,'C');
		        $pdf->Cell(10,7,'',0,1);

		        $pdf->SetFont('Arial','B',10);

		        $pdf->Cell(8,6,'No',1,0,'C');
		        $pdf->Cell(60,6,'Tgl. Masuk',1,0,'C');
		         $pdf->Cell(40,6,'Nama Barang',1,0,'C');
		        $pdf->Cell(30,6,'Satuan',1,0,'C');
		        $pdf->Cell(30,6,'Qty',1,1,'C');
		        

		        $pdf->SetFont('Arial','',10);
		        $barang = $this->db->get('tbl_masukdetail')->result();
		        $no=1;
		        foreach ($barang as $data){
		             $pdf->Cell(8,6,$no,1,0);
		             $pdf->Cell(60,6,$data->tglin,1,0);
		             $pdf->Cell(40,6,$data->namaBarang,1,0);
		             $pdf->Cell(30,6,$data->satuan,1,0);
		             $pdf->Cell(30,6,$data->qty,1,1);

		            // $pdf->Cell(35,6,"Rp ".number_format($data->harga, 0, ".", "."),1,0);
		            // $pdf->Cell(15,6,$data->stok,1,1);
		            $no++;
		        }
		        $pdf->Output();
			}

            function barangkeluar()
			{
		        $pdf = new FPDF('P', 'mm','Letter');

		        $pdf->AddPage();
                
		        $pdf->SetFont('Arial','B',16);
		        $pdf->Cell(0,7,'Laporan Barang Keluar',0,1,'C');
		        $pdf->Cell(10,7,'',0,1);

		        $pdf->SetFont('Arial','B',10);

		        $pdf->Cell(8,6,'No',1,0,'C');
		        $pdf->Cell(60,6,'Tgl. Keluar',1,0,'C');
		         $pdf->Cell(40,6,'Nama Barang',1,0,'C');
		        $pdf->Cell(30,6,'Satuan',1,0,'C');
		        $pdf->Cell(30,6,'Qty',1,1,'C');
		        

		        $pdf->SetFont('Arial','',10);
		        $barang = $this->db->get('tbl_keluardetail')->result();
		        $no=1;
		        foreach ($barang as $data){
		             $pdf->Cell(8,6,$no,1,0);
		             $pdf->Cell(60,6,$data->tglOut,1,0);
		             $pdf->Cell(40,6,$data->namaBarang,1,0);
		             $pdf->Cell(30,6,$data->satuan,1,0);
		             $pdf->Cell(30,6,$data->qty,1,1);

		            // $pdf->Cell(35,6,"Rp ".number_format($data->harga, 0, ".", "."),1,0);
		            // $pdf->Cell(15,6,$data->stok,1,1);
		            $no++;
		        }
		        $pdf->Output();
			}

}