<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pejabat extends CI_Controller
{
	public $data = [];
	public function __construct()
	{
		parent::__construct();
        $this->load->model('model_pejabat');
        $this->load->helper('nip_helper');
        if($this->session->userdata('login_status')!=TRUE)
		{
            redirect('');
        }
	}
	public function index()
	{		
			view('pejabat.index');
	}

	function ambil_pejabat(){  
		$fetch_data = $this->model_pejabat->make_datatables();  
		$data = array();
		$no=1;  
		foreach($fetch_data as $row)  
		{  
			 $sub_array = array();
			 $sub_array[] = $no++;  
			 $sub_array[] = $row->Jabatan;  
			 $sub_array[] = $row->Nama;  
			 $sub_array[] = $row->Pangkat;  
			 $sub_array[] = konversi_nip($row->NIP);  
			 $sub_array[] = $row->Dinas;  
			 $sub_array[] = $row->Provinsi;  
			 $sub_array[] = $row->Status;  
			 $sub_array[] = '<div class="btn-group"><button type="button" name="ubah" data-kode="'.$row->id_pejabat.'" class="ubah_record btn btn-warning btn-xs">Ubah</button> <button type="button" name="hapus" data-kode="'.$row->id_pejabat.'" data-nama="'.$row->Nama.'" class="hapus_record btn btn-danger btn-xs">Hapus</button></div>';  
			 $data[] = $sub_array;  
		}  
		$output = array(  
			 "draw"                  =>     intval($_POST["draw"]),  
			 "recordsTotal"          =>     $this->model_pejabat->get_all_data(),  
			 "recordsFiltered"     	 =>     $this->model_pejabat->get_filtered_data(),  
			 "data"                  =>     $data  
		);  
		echo json_encode($output);  
   }
   
   function ambil_satu_pejabat()
   {
		$output = array();
		$data = $this->model_pejabat->ambilSatuPejabat($this->input->post('id_pejabat'));
		foreach($data as $row)
		{
			$output['ubah_id_pejabat'] = $row->id_pejabat;
			$output['ubah_jabatan'] = $row->Jabatan;
			$output['ubah_nama'] = $row->Nama;
			$output['ubah_pangkat'] = $row->Pangkat;
			$output['ubah_nip'] = $row->NIP;
			$output['ubah_dinas'] = $row->Dinas;
			$output['ubah_provinsi'] = $row->Provinsi;
			$output['ubah_status'] = $row->Status;
		}
		echo json_encode($output);
   }

	function tambah_pejabat(){
		$data = $this->model_pejabat->tambahPejabat();
		json_encode($data);
	}

	function ubah_pejabat(){
		$data = $this->model_pejabat->ubahPejabat();
		json_encode($data);
	}

	function hapus_pejabat(){
		$data = $this->model_pejabat->hapusPejabat();
		json_encode($data);
	}

}