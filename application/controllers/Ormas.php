<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ormas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_ormas');
		$this->load->helper('nip_helper');
		if ($this->session->userdata('login_status') != TRUE) {
			redirect('');
		}
	}
	public function index()
	{
		view('ormas.index');
	}

	function ambil_ormas()
	{
		$fetch_data = $this->model_ormas->make_datatables();
		$data = array();
		$no = 1;
		foreach ($fetch_data as $row) {
			$sub_array = array();
			$sub_array[] = $no++;
			$sub_array[] = $row->nama_ormas;
			$sub_array[] = $row->tanggal_daftar;
			$sub_array[] = $row->alamat_kantor;
			$sub_array[] = $row->cabang;
			if ($row->verif16 == '1') {
				$sub_array[] = '<span class="label label-success">Surat Keabsahan sudah ada</span>';
			} else if($row->verif01 == '0' || $row->verif02 == '0' || $row->verif03 == '0' || $row->verif04 == '0' || $row->verif05 == '0'|| $row->verif06 == '0'|| $row->verif07 == '0'|| $row->verif08 == '0'|| $row->verif09 == '0'|| $row->verif10 == '0'|| $row->verif11 == '0'|| $row->verif12 == '0'|| $row->verif13 == '0'||
			$row->verif14 == '0'|| $row->verif15 == '0'|| $row->verif17 == '0') {
				$sub_array[] = '<span class="label label-danger">Data belum lengkap</span>';
			} else {
				$sub_array[] = '<span class="label label-primary">Sudah Diverifikasi</span>';
			}
			$sub_array[] = '<div class="btn-group"><a href="ormas/verif/' . $row->id_ormas . '" class="verif_record btn btn-success btn-xs">Verif</a> <a href="javascript:void(0)" name="hapus" data-kode="' . $row->id_ormas . '" data-nama="' . $row->nama_ormas . '" class="hapus_record btn btn-danger btn-xs">Hapus</a></div>';
			$data[] = $sub_array;
		}
		$output = array(
			"draw"                  =>     intval($_POST["draw"]),
			"recordsTotal"          =>     $this->model_ormas->get_all_data(),
			"recordsFiltered"     	=>     $this->model_ormas->get_filtered_data(),
			"data"                  =>     $data
		);
		echo json_encode($output);
	}

	public function verif($id)
	{
		$panggil = array();
		$data_ormas = $this->model_ormas->ambilSatuOrmas($id);
		$data_verif = $this->model_ormas->ambilSatuVerif($id);
		$panggil = 	['ID' => $data_ormas->id_ormas, 'Nama' => $data_ormas->nama_ormas];
		foreach ($data_verif as $row) {
			$panggil['id_ormas'] = $row->id_ormas;
			$panggil['file_lambang_logo'] = $row->file_lambang_logo;
			$panggil['verif_01'] = $row->verif01;
			$panggil['file_bendera_ormas'] = $row->file_bendera_ormas;
			$panggil['verif_02'] = $row->verif02;
			$panggil['file_surat_permohonan'] = $row->file_surat_permohonan;
			$panggil['verif_03'] = $row->verif03;
			$panggil['file_akta'] = $row->file_akta;
			$panggil['verif_04'] = $row->verif04;
			$panggil['file_ad_art'] = $row->file_ad_art;
			$panggil['verif_05'] = $row->verif05;
			$panggil['file_program_ormas'] = $row->file_program_ormas;
			$panggil['verif_06'] = $row->verif06;
			$panggil['file_skpengurus'] = $row->file_skpengurus;
			$panggil['verif_07'] = $row->verif07;
			$panggil['file_fc_ktpketua'] = $row->file_fc_ktpketua;
			$panggil['verif_08'] = $row->verif08;
			$panggil['file_fc_ktpsekretaris'] = $row->file_fc_ktpsekretaris;
			$panggil['verif_09'] = $row->verif09;
			$panggil['file_fc_ktpbendahara'] = $row->file_fc_ktpbendahara;
			$panggil['verif_10'] = $row->verif10;
			$panggil['file_sk_domisili'] = $row->file_sk_domisili;
			$panggil['verif_11'] = $row->verif11;
			$panggil['file_npwp'] = $row->file_npwp;
			$panggil['verif_12'] = $row->verif12;
			$panggil['file_fotosekretariat'] = $row->file_fotosekretariat;
			$panggil['verif_13'] = $row->verif13;
			$panggil['file_surat_pernyataan'] = $row->file_surat_pernyataan;
			$panggil['verif_14'] = $row->verif14;
			$panggil['file_daftarisian'] = $row->file_daftarisian;
			$panggil['verif_15'] = $row->verif15;
			$panggil['file_suketkeabsahan'] = $row->file_suketkeabsahan;
			$panggil['verif_16'] = $row->verif16;
			$panggil['file_skt'] = $row->file_skt;
			$panggil['verif_17'] = $row->verif17;
		}
		view('ormas.verif_ormas', $panggil);
	}

	function hapus_ormas(){
		$data = $this->model_ormas->hapusOrmas();
		json_encode($data);
	}

	function verif_check01()
	{
		$data = $this->model_ormas->verifOrmas01();
		json_encode($data);
	}

	function verif_check02()
	{
		$data = $this->model_ormas->verifOrmas02();
		json_encode($data);
	}

	function verif_check03()
	{
		$data = $this->model_ormas->verifOrmas03();
		json_encode($data);
	}

	function verif_check04()
	{
		$data = $this->model_ormas->verifOrmas04();
		json_encode($data);
	}

	function verif_check05()
	{
		$data = $this->model_ormas->verifOrmas05();
		json_encode($data);
	}
	function verif_check06()
	{
		$data = $this->model_ormas->verifOrmas06();
		json_encode($data);
	}
	function verif_check07()
	{
		$data = $this->model_ormas->verifOrmas07();
		json_encode($data);
	}
	function verif_check08()
	{
		$data = $this->model_ormas->verifOrmas08();
		json_encode($data);
	}
	function verif_check09()
	{
		$data = $this->model_ormas->verifOrmas09();
		json_encode($data);
	}
	function verif_check10()
	{
		$data = $this->model_ormas->verifOrmas10();
		json_encode($data);
	}
	function verif_check11()
	{
		$data = $this->model_ormas->verifOrmas11();
		json_encode($data);
	}
	function verif_check12()
	{
		$data = $this->model_ormas->verifOrmas12();
		json_encode($data);
	}
	function verif_check13()
	{
		$data = $this->model_ormas->verifOrmas13();
		json_encode($data);
	}
	function verif_check14()
	{
		$data = $this->model_ormas->verifOrmas14();
		json_encode($data);
	}
	function verif_check15()
	{
		$data = $this->model_ormas->verifOrmas15();
		json_encode($data);
	}
	function verif_check16()
	{
		$data = $this->model_ormas->verifOrmas16();
		json_encode($data);
	}

	function verif_check17()
	{
		$data = $this->model_ormas->verifOrmas17();
		json_encode($data);
	}
}
