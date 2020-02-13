<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_ormas extends CI_Model
{

      var $table = "tb_dataormas";  
      var $select_column = array("id_ormas", "tanggal_daftar", "nama_ormas", "alamat_kantor", "cabang" );  
      var $order_column = array(null, "id_ormas", "tanggal_daftar", "nama_ormas", "alamat_kantor", "cabang", null);  
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

    function ambilSatuOrmas($id_ormas)
    {
        $this->db->where('id_ormas', $id_ormas);
        return $this->db->get($this->table)->row();
    }

    function ambilSatuVerif($id_ormas)
    {
        $this->db->where('id_ormas', $id_ormas);
        return $this->db->get("tb_verifikasi")->result();
    }

    function verifOrmas03()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data = array(
            'verif01'=> $this->input->post('verif_01'),
            'verif02'=> $this->input->post('verif_02'),
            'verif03'=> $this->input->post('verif_03'),
        );
        return $this->db->update('tb_verifikasi', $data, $id);
    }
    
    function verifOrmas04()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif04'] = $this->input->post('verif_04');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas05()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif05'] = $this->input->post('verif_05');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas06()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif06'] = $this->input->post('verif_06');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas07()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif07'] = $this->input->post('verif_07');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas08()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif08'] = $this->input->post('verif_08');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas09()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif09'] = $this->input->post('verif_09');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas10()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif10'] = $this->input->post('verif_10');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas11()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif11'] = $this->input->post('verif_11');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas12()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif12'] = $this->input->post('verif_12');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas13()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif13'] = $this->input->post('verif_13');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas14()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif14'] = $this->input->post('verif_14');
        return $this->db->update('tb_verifikasi', $data, $id);
    }
    
    function verifOrmas15()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif15'] = $this->input->post('verif_15');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas16()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif16'] = $this->input->post('verif_16');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

    function verifOrmas17()
    {   
        $id['id_ormas'] = $this->input->post('id_ormas');
        $data['verif17'] = $this->input->post('verif_17');
        return $this->db->update('tb_verifikasi', $data, $id);
    }

}