<?php

class Model_register extends CI_Model{

	function addRegister($data)
	{

		$result=$this->db->insert('tb_dataormas',$data);
		return $result;
	}
}
