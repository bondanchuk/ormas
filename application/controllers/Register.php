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
		$waktu_pendirian = date("Y-m-d", strtotime($this->input->post('tempat_pendirian')));
		$tanggal_lahir_pendiri = date("Y-m-d", strtotime($this->input->post('tanggal_lahir')));
		$tanggal_lahir_ketua = date("Y-m-d", strtotime($this->input->post('tanggallahir_ketua')));

		$this->nama_ormas = $this->input->post('nama_ormas');
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


		echo json_encode($data);
	}

	function uploadFile()
	{
		$album = $this->input->post('nama_ormas');
		$config['upload_path']          = './data-upload/'.$album;
		$config['allowed_types']        = 'jpg|png|pdf';
		$config['overwrite']			= true;
		$config['max_size']             = 1024;
		$config['encrypt_name'] = TRUE;


		$this->load->library('upload', $config);


		if (!is_dir('data-upload/' . $album)) {
			mkdir('data-upload/' . $album, 0777, true);
			for ($i = 1; $i <= 5; $i++) {
				if (!empty($_FILES['verif' . $i]['name'])) {
					if ($this->upload->do_upload('verif' . $i)) {
						$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload

						$judul = $this->input->post('nama_ormas'); //get judul image

						$result = $this->Model_register->simpan_upload($judul);
						echo json_decode($result);
					} else {
						$this->load->view('upload_form2');
					}
				}
			}
		}




	}


}
