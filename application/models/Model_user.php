<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_user extends CI_Model
{
      var $table = "tb_user";  
      var $select_column = array("id_user", "nama_user", "username", "password", "level_akses");  
      var $order_column = array(null, "nama_user", "username", null, null);  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nama_user", $_POST["search"]["value"]);  
                $this->db->or_like("username", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id_user', 'ASC');  
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

    private function hash_password($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function dataLogin($username)
    {
        $this->db->where('username', $username);
        return $this->db->get($this->table);
    }

    function ambilSatuUser($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->get($this->table)->result();
    }

    function tambahUser()
    {
        $data = array(
            'nama_user'=> $this->input->post('nama_user'),
            'username'=> $this->input->post('username'),
            'password'=> $this->hash_password($this->input->post('password')),
            'level_akses'=> $this->input->post('level_akses'),
        );
        $this->db->where('username',$data['username']);
        $q = $this->db->get($this->table);
        if($q->num_rows()>0){
            return $this->db->insert('');
        }else{
        return $this->db->insert($this->table,$data);
        }
    }
    
    function ubahUser()
    {   
        $id['id_user'] = $this->input->post('ubah_id_user');
        if($this->input->post('ubah_password')){
            $data = array(
                'nama_user'=> $this->input->post('ubah_nama_user'),
                'username'=> $this->input->post('ubah_username'),
                'password'=> $this->hash_password($this->input->post('ubah_password')),
                'level_akses'=> $this->input->post('ubah_level_akses'),
            );
        }else{
            $data = array(
                'nama_user'=> $this->input->post('ubah_nama_user'),
                'username'=> $this->input->post('ubah_username'),
                'level_akses'=> $this->input->post('ubah_level_akses'),
            );
        }
        return $this->db->update($this->table, $data, $id);
    }
    
    function hapusUser()
    {   
        $id['id_user'] = $this->input->post('id_user');
        return $this->db->delete($this->table, $id);
    }

}