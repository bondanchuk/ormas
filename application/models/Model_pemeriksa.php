<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_pemeriksa extends CI_Model
{
      var $table = "tb_pemeriksa";  
      var $select_column = array("id_pemeriksa", "nama_pemeriksa", "pangkat_pemeriksa", "nip_pemeriksa", "status");  
      var $order_column = array(null, "nama_pemeriksa", "pangkat_pemeriksa", "nip_pemeriksa", null, null);  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nama_pemeriksa", $_POST["search"]["value"]);  
                $this->db->or_like("pangkat_pemeriksa", $_POST["search"]["value"]);  
                $this->db->or_like("nip_pemeriksa", $_POST["search"]["value"]);  
  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id_pemeriksa', 'ASC');  
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

    function ambilSatuPemeriksa($id_pemeriksa)
    {
        $this->db->where('id_pemeriksa', $id_pemeriksa);
        return $this->db->get($this->table)->result();
    }

    function tambahPemeriksa()
    {
        $data = array(
            'nama_pemeriksa'=> $this->input->post('nama_pemeriksa'),
            'pangkat_pemeriksa'=> $this->input->post('pangkat_pemeriksa'),
            'nip_pemeriksa'=> $this->input->post('nip_pemeriksa'),
            'status'=> $this->input->post('status'),
        );
        $this->db->where('nip_pemeriksa',$data['nip_pemeriksa']);
        $q = $this->db->get($this->table);
        if($q->num_rows()>0){
            return $this->db->insert('');
        }else{
        return $this->db->insert($this->table,$data);
        }
    }
    
    function ubahPemeriksa()
    {   
        $id['id_pemeriksa'] = $this->input->post('ubah_id_pemeriksa');
        $data = array(
            'nama_pemeriksa'=> $this->input->post('ubah_nama_pemeriksa'),
            'pangkat_pemeriksa'=> $this->input->post('ubah_pangkat_pemeriksa'),
            'nip_pemeriksa'=> $this->input->post('ubah_nip_pemeriksa'),
            'status'=> $this->input->post('ubah_status'),
        );
        return $this->db->update($this->table, $data, $id);
    }
    
    function hapusPemeriksa()
    {   
        $id['id_pemeriksa'] = $this->input->post('id_pemeriksa');
        return $this->db->delete($this->table, $id);
    }

}