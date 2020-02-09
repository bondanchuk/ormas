<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_pejabat extends CI_Model
{

      var $table = "tb_pejabat";  
      var $select_column = array("id_pejabat", "Jabatan", "Nama", "Pangkat", "NIP","Dinas", "Provinsi", "Status");  
      var $order_column = array(null, "Jabatan", "Nama", "Pangkat", "NIP", "Dinas", "Provinsi", "Status", null);  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("Jabatan", $_POST["search"]["value"]);  
                $this->db->or_like("Nama", $_POST["search"]["value"]);  
                $this->db->or_like("Pangkat", $_POST["search"]["value"]);  
                $this->db->or_like("NIP", $_POST["search"]["value"]);  
                $this->db->or_like("Dinas", $_POST["search"]["value"]);  
                $this->db->or_like("Provinsi", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id_pejabat', 'ASC');  
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

    function ambilSatuPejabat($id_pejabat)
    {
        $this->db->where('id_pejabat', $id_pejabat);
        return $this->db->get($this->table)->result();
    }

    function tambahPejabat()
    {
        $data = array(
            'Jabatan'=> $this->input->post('jabatan'),
            'Nama'=> $this->input->post('nama'),
            'Pangkat'=> $this->input->post('pangkat'),
            'NIP'=> $this->input->post('nip'),
            'Dinas'=> $this->input->post('dinas'),
            'Provinsi'=> $this->input->post('provinsi'),
            'Status'=> $this->input->post('status'),
        );
        $this->db->where('NIP',$data['NIP']);
        $q = $this->db->get($this->table);
        if($q->num_rows()>0){
            return $this->db->insert('');
        }else{
        return $this->db->insert($this->table,$data);
        }
    }
    
    function ubahPejabat()
    {   
        $id['id_pejabat'] = $this->input->post('ubah_id_pejabat');
        $data = array(
            'Jabatan'=> $this->input->post('ubah_jabatan'),
            'Nama'=> $this->input->post('ubah_nama'),
            'Pangkat'=> $this->input->post('ubah_pangkat'),
            'NIP'=> $this->input->post('ubah_nip'),
            'Dinas'=> $this->input->post('ubah_dinas'),
            'Provinsi'=> $this->input->post('ubah_provinsi'),
            'Status'=> $this->input->post('ubah_status'),
        );
        return $this->db->update($this->table, $data, $id);
    }
    
    function hapusPejabat()
    {   
        $id['id_pejabat'] = $this->input->post('id_pejabat');
        return $this->db->delete($this->table, $id);
    }

}