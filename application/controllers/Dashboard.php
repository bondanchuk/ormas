<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_dashboard');
	}
	public function index()
	{
		view('dashboard.index');
	}

	function get_data(){
		$fetch_data = $this->model_dashboard->make_datatables();
		$data = array();
		$no=1;
		foreach($fetch_data as $row)
		{
			$sub_array = array();
			$sub_array[] = $no++;
			$sub_array[] = $row->tanggal_daftar;
			$sub_array[] = $row->nama_ormas;
			$sub_array[] = $row->alamat_kantor;
			$sub_array[] = $row->cabang;
			$sub_array[] = '<div class="btn-group"><button type="button" name="ubah" data-kode="'.$row->id_ormas.'" class="lihat_record btn btn-warning btn-xs">Lihat</button></div>';
			$data[] = $sub_array;
		}
		$output = array(
			"draw"                  =>     intval($_POST["draw"]),
			"recordsTotal"          =>     $this->model_dashboard->get_all_data(),
			"recordsFiltered"     	 =>     $this->model_dashboard->get_filtered_data(),
			"data"                  =>     $data
		);
		echo json_encode($output);
	}


	function get_detail()
	{
		$output = array();
		$data = $this->model_dashboard->get_detail_model($this->input->post('id_pejabat'));
		foreach($data as $row)
		{
			$output['ubah_id_pejabat'] = $row->id_ormas;
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
}
