<?php

class Model_register extends CI_Model{

	function addRegister($data)
	{

		$result=$this->db->insert('tb_dataormas',$data);
		$get_id = $this->db->insert_id();
		return $get_id;
	}

	function simpan_upload($data){

		$result= $this->db->insert('tb_verifikasi',$data);
		return $result;
	}
}