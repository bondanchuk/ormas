<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller
{
	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_register');
	}

	public function index()
	{

			view('auth.Register');
	}

	function add()
	{
		$tanggal_daftar = date("Y-m-d", strtotime($this->input->post('tanggal_daftar')));
		$waktu_pendirian = date("Y-m-d", strtotime($this->input->post('waktu_pendirian')));
		$tanggal_lahir_pendiri = date("Y-m-d", strtotime($this->input->post('tanggal_lahir')));
		$tanggal_lahir_ketua = date("Y-m-d", strtotime($this->input->post('tanggallahir_ketua')));

		$register = array(
		"tanggal_daftar"=>$tanggal_daftar,
		"nama_ormas"=>$this->input->post('nama_ormas'),
		"nama_notaris"=>$this->input->post('nama_notaris'),
		"nomortglakta"=>$this->input->post('tanggal_akta'),
		"nomorsrtpermohonan"=>$this->input->post('tanggal_permohonan'),
		"bidang"=>$this->input->post('bidang'),
		"program_kerja"=>$this->input->post('program_kerja'),
		'alamat_kantor'=>$this->input->post('alamat_kantor'),
		"tempat_pendirian"=>$this->input->post('tempat_pendirian'),
		"waktu_pendirian"=>$waktu_pendirian,
		"asas_ciri_ormas"=>$this->input->post('asas_ciri'),
		"tujuan_ormas"=>$this->input->post('tujuan_ormas'),
		"nama_pendiri"=>$this->input->post('nama_pendiri'),
		"nik_pendiri"=>$this->input->post('nik'),
		"agama_pendiri"=>$this->input->post('agama-pendiri'),
		"kewarganegaraan_pendiri"=>$this->input->post('kewarganegaraan'),
		"jenis_kelamin_pendiri"=>$this->input->post('jenis-kelamin'),
		"alamat_pendiri"=>$this->input->post('alamat'),
		"tempat_lahir_pendiri"=>$this->input->post('tempat_lahir'),
		"tanggal_lahir_pendiri"=>$tanggal_lahir_pendiri,
		"statuspkw_pendiri"=>$this->input->post('status-pkw'),
		"nomor_telp_pendiri"=>$this->input->post('no_telp'),
		"pekerjaan_pendiri"=>$this->input->post('pekerjaan'),
		"nama_pembina"=>$this->input->post('nama_pembina'),
		"nama_penasihat"=>$this->input->post('nama_penasihat'),
		"nama_ketua"=>$this->input->post('nama_ketua'),
		"nik_ketua"=>$this->input->post('nik_ketua'),
		"agama_ketua"=>$this->input->post('agama-ketua'),
		"kewarganegaraan_ketua"=>$this->input->post('kw-ketua'),
		"jenis_kelamin_ketua"=>$this->input->post('jenis-kelamin-ketua'),
		'tempat_lahir_ketua'=>$this->input->post('tempatlahir_ketua'),
		"tanggal_lahir_ketua"=>$tanggal_lahir_ketua,
		"statuspkw_ketua"=>$this->input->post('status-pkw-ketua'),
		'alamat_ketua'=>$this->input->post('alamat_ketua'),
		"nomor_telp_ketua"=>$this->input->post('telp_ketua'),
		"nama_sekretaris"=>$this->input->post('nama_sekretaris'),
		"nama_bendahara"=>$this->input->post('nama_bendahara'),
		"masa_akti_kepengurusan"=>$this->input->post('masa_bakti'),
		"keputusan_tertinggi_ormas"=>$this->input->post('keputusan'),
		"cabang"=>$this->input->post('cabang'),
		"npwp"=>$this->input->post('npwp'),
		"sumber_keuangan"=>$this->input->post('keuangan'),
		"berbadan_hukum"=>$this->input->post('hukum'),
		"usaha_ormas"=>$this->input->post('usaha'),
		);


		$data=$this->Model_register->addRegister($register);
		$get_id = $this->db->insert_id();
		$this->uploadFile($get_id);

		echo json_encode($data);
	}

	function uploadFile($get_id)
	{
		$album = $this->input->post('nama_ormas');
		$config['upload_path']          = './data-upload/'.$album;
		$config['allowed_types']        = 'pdf';
		$config['overwrite']			= true;
		$config['max_size']             = 1024;


		$this->load->library('upload', $config);


		if (!is_dir('data-upload/' . $album)) {
			mkdir('data-upload/' . $album, 0777, true);
			for ($i = 1; $i <= 18; $i++) {
				if (!empty($_FILES['verif' . $i]['name'])) {
					if ($this->upload->do_upload('verif' . $i)) {
						
						$fileData = $this->upload->data();
						$uploadData[$i]['file_name'] = $fileData['file_name'];


					} else {
						$this->load->view('upload_form2');
					}
				}
			}



			$data = array(
				'id_ormas' => $get_id,
				'file_lambang_logo' => $uploadData['1']['file_name'],
				'verif01' => 0,
				'file_bendera_ormas' => $uploadData['2']['file_name'],
				'verif02' => 0,
				'file_surat_permohonan' => $uploadData['3']['file_name'],
				'verif03' => 0,
				'file_akta' => $uploadData['4']['file_name'],
				'verif04' => 0,
				'file_ad_art' => $uploadData['5']['file_name'],
				'verif05' => 0,
				'file_program_ormas' => $uploadData['6']['file_name'],
				'verif06' => 0,
				'file_skpengurus' => $uploadData['7']['file_name'],
				'verif07' => 0,
				'file_fc_ktpketua' => $uploadData['8']['file_name'],
				'verif08' => 0,
				'file_fc_ktpsekretaris' => $uploadData['9']['file_name'],
				'verif09' => 0,
				'file_fc_ktpbendahara' => $uploadData['10']['file_name'],
				'verif10' => 0,
				'file_sk_domisili' => $uploadData['11']['file_name'],
				'verif11' => 0,
				'file_npwp' => $uploadData['12']['file_name'],
				'verif12' => 0,
				'file_fotosekretariat' => $uploadData['13']['file_name'],
				'verif13' => 0,
				'file_surat_pernyataan' => $uploadData['14']['file_name'],
				'verif14' => 0,
				'file_daftarisian' => $uploadData['15']['file_name'],
				'verif15' => 0,
				'file_suketkeabsahan' => $uploadData['16']['file_name'],
				'verif16' => 0,
				'file_skt' => $uploadData['17']['file_name'],
				'verif17' => 0,
			);


			$result = $this->Model_register->simpan_upload($data);
			echo json_decode($result);
		}




	}


}
