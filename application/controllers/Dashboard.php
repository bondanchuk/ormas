<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_dashboard');
		$this->load->helper('nip_helper');

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
			$sub_array[] = '<div class="btn-group"><button type="button" data-kode="'.$row->id_ormas.'" class="lihat_record btn btn-warning btn-xs">Lihat</button><button type="button" data-kode="'.$row->id_ormas.'" class="cetak_record btn btn-success btn-xs">Cetak</button></div>';
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
			$output['lihat_tempat_pendirian'] = $row->tempat_pendirian;
			$output['lihat_waktu_pendirian'] = $row->waktu_pendirian;
			$output['lihat_alamat_kantor'] = $row->alamat_kantor;
			$output['lihat_asas_ciri_ormas'] = $row->asas_ciri_ormas;
			$output['lihat_tujuan_ormas'] = $row->tujuan_ormas;
			$output['lihat_nama_pendiri'] = $row->nama_pendiri;
			$output['lihat_agama_pendiri'] = $row->agama_pendiri;
			$output['lihat_kewarganegaraan_pendiri'] = $row->kewarganegaraan_pendiri;

			$output['lihat_nama_ketua'] = $row->nama_ketua;
			$output['lihat_nik_ketua'] = $row->nik_ketua;
			$output['lihat_agama_ketua'] = $row->agama_ketua;
			$output['lihat_kewarganegaraan_ketua'] = $row->kewarganegaraan_ketua;
			$output['lihat_jenis_kelamin_ketua'] = $row->jenis_kelamin_ketua;
			$output['lihat_tempat_lahir_ketua'] = $row->tempat_lahir_ketua;
			$output['lihat_tanggal_lahir_ketua'] = $row->tanggal_lahir_ketua;
			$output['lihat_status_perkawinan_ketua'] = $row->statuspkw_ketua;
			$output['lihat_alamat_ketua'] = $row->alamat_ketua;
			$output['lihat_nomor_telpon_ketua'] = $row->nomor_telp_ketua;
			$output['lihat_pekerjaan_ketua'] = $row->pekerjaan_ketua;

			$output['lihat_nama_sekretaris'] = $row->nama_sekretaris;
			$output['lihat_nama_bendahara'] = $row->nama_bendahara;
			$output['lihat_cabang'] = $row->cabang;
			$output['lihat_sumber_keuangan'] = $row->sumber_keuangan;
			$output['lihat_berbadan_hukum'] = $row->berbadan_hukum;
		}
		echo json_encode($output);
	}

	function print_keabsahan($id)
	{	
		$output = array();
		$data = $this->model_dashboard->get_detail_model($id);
		foreach($data as $row)
		{
			$output['lihat_id_ormas'] = $row->id_ormas;
			$output['lihat_tanggal_daftar'] = $row->tanggal_daftar;
			$output['lihat_nama_ormas'] = $row->nama_ormas;
			$output['lihat_nama_notaris'] = $row->nama_notaris;
			$output['lihat_nomortglakta'] = $row->nomortglakta;
			$output['lihat_nomosrtpermohonan'] = $row->nomorsrtpermohonan;
			$output['lihat_bidang'] = $row->bidang;
			$output['lihat_program_kerja'] = $row->program_kerja;
			$output['lihat_tempat_pendirian'] = $row->tempat_pendirian;
			$output['lihat_waktu_pendirian'] = $row->waktu_pendirian;			
			$output['lihat_alamat_kantor'] = $row->alamat_kantor;
			$output['lihat_asas_ciri_ormas'] = $row->asas_ciri_ormas;
			$output['lihat_tujuan_ormas'] = $row->tujuan_ormas;

			$output['lihat_nama_pendiri'] = $row->nama_pendiri;
			$output['lihat_nik_pendiri'] = $row->nik_pendiri;
			$output['lihat_agama_pendiri'] = $row->agama_pendiri;
			$output['lihat_kewarganegaraan_pendiri'] = $row->kewarganegaraan_pendiri;
			$output['lihat_jenis_kelamin_pendiri'] = $row->jenis_kelamin_pendiri;
			$output['lihat_tempat_lahir_pendiri'] = $row->tempat_lahir_pendiri;
			$output['lihat_tanggal_lahir_pendiri'] = $row->tanggal_lahir_pendiri;
			$output['lihat_status_pkw_pendiri'] = $row->statuspkw_pendiri;
			$output['lihat_alamat_pendiri'] = $row->alamat_pendiri;
			$output['lihat_notelp_pendiri'] = $row->nomor_telp_pendiri;
			$output['lihat_pekerjaan_pendiri'] = $row->pekerjaan_pendiri;

			$output['lihat_nama_pembina'] = $row->nama_pembina;
			$output['lihat_nama_penasehat'] = $row->nama_penasihat;

			$output['lihat_nama_ketua'] = $row->nama_ketua;
			$output['lihat_nik_ketua'] = $row->nik_ketua;
			$output['lihat_agama_ketua'] = $row->agama_ketua;
			$output['lihat_kewarganegaraan_ketua'] = $row->kewarganegaraan_ketua;
			$output['lihat_jenis_kelamin_ketua'] = $row->jenis_kelamin_ketua;
			$output['lihat_tempat_lahir_ketua'] = $row->tempat_lahir_ketua;
			$output['lihat_tanggal_lahir_ketua'] = $row->tanggal_lahir_ketua;
			$output['lihat_status_perkawinan_ketua'] = $row->statuspkw_ketua;
			$output['lihat_alamat_ketua'] = $row->alamat_ketua;
			$output['lihat_nomor_telpon_ketua'] = $row->nomor_telp_ketua;
			$output['lihat_pekerjaan_ketua'] = $row->pekerjaan_ketua;

			$output['lihat_nama_sekretaris'] = $row->nama_sekretaris;
			$output['lihat_nama_bendahara'] = $row->nama_bendahara;

			$output['lihat_masa_bakti'] = $row->masa_bakti_kepengurusan;
			$output['lihat_keputusan_tertinggi'] = $row->keputusan_tertinggi_ormas;

			$output['lihat_cabang'] = $row->cabang;
			$output['lihat_npwp'] = $row->npwp;
			$output['lihat_sumber_keuangan'] = $row->sumber_keuangan;
		}
		$mpdf = new \Mpdf\Mpdf(['format' => [210, 330]]);
        $html = view('print.surat_keabsahan',$output,true);;
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
	}
}
