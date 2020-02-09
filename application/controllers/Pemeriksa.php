<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pemeriksa extends CI_Controller
{
	public $data = [];
	public function __construct()
	{
		parent::__construct();
        $this->load->model('model_pemeriksa');
        $this->load->helper('nip_helper');
        if($this->session->userdata('login_status')!=TRUE)
		{
            redirect('');
        }
	}
	public function index()
	{		
			view('pemeriksa.index');
	}

	function ambil_pemeriksa(){  
		$fetch_data = $this->model_pemeriksa->make_datatables();  
		$data = array();
		$no=1;  
		foreach($fetch_data as $row)  
		{  
			 $sub_array = array();
			 $sub_array[] = $no++;  
			 $sub_array[] = $row->nama_pemeriksa;  
			 $sub_array[] = $row->pangkat_pemeriksa;  
			 $sub_array[] = konversi_nip($row->nip_pemeriksa);  
			 $sub_array[] = $row->status;  
			 $sub_array[] = '<div class="btn-group"><button type="button" name="ubah" data-kode="'.$row->id_pemeriksa.'" class="ubah_record btn btn-warning btn-xs">Ubah</button> <button type="button" name="hapus" data-kode="'.$row->id_pemeriksa.'" data-nama="'.$row->nama_pemeriksa.'" class="hapus_record btn btn-danger btn-xs">Hapus</button></div>';  
			 $data[] = $sub_array;  
		}  
		$output = array(  
			 "draw"                  =>     intval($_POST["draw"]),  
			 "recordsTotal"          =>     $this->model_pemeriksa->get_all_data(),  
			 "recordsFiltered"     	 =>     $this->model_pemeriksa->get_filtered_data(),  
			 "data"                  =>     $data  
		);  
		echo json_encode($output);  
   }
   
   function ambil_satu_pemeriksa()
   {
		$output = array();
		$data = $this->model_pemeriksa->ambilSatuPemeriksa($this->input->post('id_pemeriksa'));
		foreach($data as $row)
		{
			$output['ubah_id_pemeriksa'] = $row->id_pemeriksa;
			$output['ubah_nama_pemeriksa'] = $row->nama_pemeriksa;
			$output['ubah_pangkat_pemeriksa'] = $row->pangkat_pemeriksa;
			$output['ubah_nip_pemeriksa'] = $row->nip_pemeriksa;
			$output['ubah_status'] = $row->status;
		}
		echo json_encode($output);
   }

	function tambah_pemeriksa(){
		$data = $this->model_pemeriksa->tambahPemeriksa();
		json_encode($data);
	}

	function ubah_pemeriksa(){
		$data = $this->model_pemeriksa->ubahPemeriksa();
		json_encode($data);
	}

	function hapus_pemeriksa(){
		$data = $this->model_pemeriksa->hapusPemeriksa();
		json_encode($data);
	}

}