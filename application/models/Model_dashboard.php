<?php

class Model_dashboard extends CI_Model{

	var $table = "tb_dataormas";
	var $column = array("tb_dataormas.id_ormas", "tanggal_daftar", "nama_ormas", "alamat_kantor", "cabang","id_verifikasi");
	var $order = array(null, "tb_dataormas.id_ormas", "tanggal_daftar", "nama_ormas", "alamat_kantor", "cabang", "cabang", null);
	function make_query()
	{
		$array = array(
			'verif01' => '1',
			'verif02' => '1',
			'verif03' => '1',
			'verif04' => '1',
			'verif05' => '1',
			'verif06' => '1',
			'verif07' => '1',
			'verif08' => '1',
			'verif09' => '1',
			'verif10' => '1',
			'verif11' => '1',
			'verif12' => '1',
			'verif13' => '1',
			'verif14' => '1',
			'verif15' => '1',
			'verif16' => '1',
			'verif17' => '1',
		);
		$this->db->select($this->column);
		$this->db->from($this->table);
		$this->db->join('tb_verifikasi', 'tb_dataormas.id_ormas=tb_verifikasi.id_ormas');
		$this->db->where($array);

		$i = 0;

		foreach ($this->column as $item) // loop column
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{

				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$column[$i] = $item; // set column array variable to order processing
			$i++;
		}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
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
	function get_detail_model($id_ormas)
	{
		$this->db->where('id_ormas', $id_ormas);
		return $this->db->get($this->table)->result();
	}
}
