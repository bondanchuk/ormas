<?php

class Model_register extends CI_Model{

	function addRegister()
	{
		$data = array(
			'product_code'  => $this->input->post('product_code'),
			'product_name'  => $this->input->post('product_name'),
			'product_price' => $this->input->post('price'),
		);
		$result=$this->db->insert('product',$data);
		return $result;
	}
}
