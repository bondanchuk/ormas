<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
	public $data = [];
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
	}
	public function index()
	{	
		if($this->session->userdata('login_status')!=TRUE)
		{
			$this->slice->with("pesan","");
			view('auth.login');
		}
		else
		{
			view('auth.index');
		}
	}

	public function login()
	{
			$db = $this->model_user->dataLogin($this->input->post('username'));
			if($db->num_rows()>0)
			{
					$row = $db->row();
					$hash = $row->password;
					if(password_verify($this->input->post('password'),$hash))
					{
						$sesi = array(
							'NAMA'=>$row->nama_user,
							'USER'=>$row->username,
							'PASS'=>$row->password,
							'LEVEL'=>$row->level_akses,
							'login_status'=>TRUE
						);
					$this->session->set_userdata($sesi);
					redirect('dashboard', 'refresh');
					}
					else
					{
						$this->slice->with("pesan","Gagal Login, Silahkan masukkan username dan password dengan benar");
						view('auth.login');
					}
			}
			else
			{
				$this->slice->with("pesan","Gagal Login, Silahkan masukkan username dan password dengan benar");
						view('auth.login');
			}
	}

	function logout(){
		$akhiri_sesi = array(
			'NAMA'=>'NAMA',
			'USER'=>'USER',
			'PASS'=>'PASS',
			'LEVEL'=>'LEVEL',
			'login_status'=>'login_status',
		);
		$this->session->unset_userdata($akhiri_sesi);
		redirect('auth', 'refresh');
	}

	function ambil_user(){  
		$fetch_data = $this->model_user->make_datatables();  
		$data = array();
		$no=1;  
		foreach($fetch_data as $row)  
		{  
			 $sub_array = array();
			 $sub_array[] = $no++;  
			 $sub_array[] = $row->nama_user;  
			 $sub_array[] = $row->username;  
			 $sub_array[] = $row->level_akses;  
			 $sub_array[] = '<div class="btn-group"><button type="button" name="ubah" data-kode="'.$row->id_user.'" class="ubah_record btn btn-warning btn-xs">Ubah</button> <button type="button" name="hapus" data-kode="'.$row->id_user.'" data-nama="'.$row->nama_user.'" class="hapus_record btn btn-danger btn-xs">Hapus</button></div>';  
			 $data[] = $sub_array;  
		}  
		$output = array(  
			 "draw"                  =>     intval($_POST["draw"]),  
			 "recordsTotal"          =>     $this->model_user->get_all_data(),  
			 "recordsFiltered"     	 =>     $this->model_user->get_filtered_data(),  
			 "data"                  =>     $data  
		);  
		echo json_encode($output);  
   }
   
   function ambil_satu_user()
   {
		$output = array();
		$data = $this->model_user->ambilSatuUser($this->input->post('id_user'));
		foreach($data as $row)
		{
			$output['ubah_id_user'] = $row->id_user;
			$output['ubah_nama_user'] = $row->nama_user;
			$output['ubah_username'] = $row->username;
			$output['ubah_level_akses'] = $row->level_akses;
		}
		echo json_encode($output);
   }

	function tambah_user(){
		$data = $this->model_user->tambahUser();
		json_encode($data);
	}

	function ubah_user(){
		$data = $this->model_user->ubahUser();
		json_encode($data);
	}

	function hapus_user(){
		$data = $this->model_user->hapusUser();
		json_encode($data);
	}

}