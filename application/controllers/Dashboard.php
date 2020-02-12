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
			$sub_array[] = $row->cabang;
			$sub_array[] = '<div class="btn-group"><button type="button" name="ubah" data-kode="'.$row->id_ormas.'" class="ubah_record btn btn-warning btn-xs">Lihat</button></div>';
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
}
