<?php

class Model_register extends CI_Model{

	function addRegister($data)
	{

		$result=$this->db->insert('tb_dataormas',$data);
		return $result;
	}

	function simpan_upload($judul){
		$data = array(

			'file_lambang_logo' => $judul
		);
		$result= $this->db->insert('tb_verifikasi',$data);
		return $result;
	}
}
