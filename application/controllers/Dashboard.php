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
		$data = $this->model_dashboard->get_detail_model($this->input->post('id_ormas'));
		foreach($data as $row)
		{
			$output['lihat_id_ormas'] = $row->id_ormas;
			$output['lihat_tanggal_daftar'] = $row->tanggal_daftar;
			$output['lihat_nama_ormas'] = $row->nama_ormas;
			$output['lihat_nama_notaris'] = $row->nama_notaris;
			$output['lihat_nomortglakta'] = $row->nomortglakta;
			$output['lihat_bidang'] = $row->bidang;
			$output['lihat_program_kerja'] = $row->program_kerja;
			$output['lihat_alamat_kantor'] = $row->alamat_kantor;
			$output['lihat_asas_ciri_ormas'] = $row->asas_ciri_ormas;
			$output['lihat_tujuan_ormas'] = $row->tujuan_ormas;
			$output['lihat_nama_pendiri'] = $row->nama_pendiri;
			$output['lihat_agama_pendiri'] = $row->agama_pendiri;
			$output['lihat_kewarganegaraan_pendiri'] = $row->kewarganegaraan_pendiri;
			$output['lihat_nama_ketua'] = $row->nama_ketua;
			$output['lihat_agama_ketua'] = $row->agama_ketua;
			$output['lihat_kewarganegaraan_ketua'] = $row->kewarganegaraan_ketua;
			$output['lihat_nama_sekretaris'] = $row->nama_sekretaris;
			$output['lihat_nama_bendahara'] = $row->nama_bendahara;
			$output['lihat_cabang'] = $row->cabang;
			$output['lihat_sumber_keuangan'] = $row->sumber_keuangan;
			$output['lihat_berbadan_hukum'] = $row->berbadan_hukum;
		}
		echo json_encode($output);
	}
}
