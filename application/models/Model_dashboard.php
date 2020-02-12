<?php

class Model_dashboard extends CI_Model{

	var $table = "tb_dataormas";
	var $select_column = array("id_ormas", "tanggal_daftar", "nama_ormas", "alamat_kantor", "cabang","cabang");
	var $order_column = array(null, "id_ormas", "tanggal_daftar", "nama_ormas", "alamat_kantor", "cabang", "cabang", null);
	function make_query()
	{
		$this->db->select($this->select_column);
		$this->db->from($this->table);
		if(isset($_POST["search"]["value"]))
		{
			$this->db->like("tanggal_daftar", $_POST["search"]["value"]);
			$this->db->or_like("nama_ormas", $_POST["search"]["value"]);
			$this->db->or_like("alamat_kantor", $_POST["search"]["value"]);
			$this->db->or_like("cabang", $_POST["search"]["value"]);
		}
		if(isset($_POST["order"]))
		{
			$this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else
		{
			$this->db->order_by('id_ormas', 'ASC');
		}
	}
	function make_datatables(){
		$this->make_query();
		if($_POST["length"] != -1)
		{
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}
	function get_filtered_data(){
		$this->make_query();
		$query = $this->db->get();
		return $query->num_rows();
	}
	function get_all_data()
	{
		$this->db->select("*");
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
}
