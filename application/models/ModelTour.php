<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelTour extends CI_Model
{
    //manajemen game
    public function getTour()
    {
        return $this->db->get('tournament');
    }
    public function getRegist()
    {
        return $this->db->get('regist');
    }
     public function getTourid($id)
    {
        $query = $this->db->query("SELECT * FROM game WHERE id = '$id'");
        return $query->result();
    }
    public function tourWhere($where)
    {
        return $this->db->get_where('tournament', $where);
    }
    
        public function getDataWhere($table, $where)
    { 
        $this->db->where($where); 
        return $this->db->get($table); 
    } 

    public function saveTour($data = null)
    {
        $this->db->insert('tournament',$data);
    }
    public function updateTour($data = null, $where = null)
    {
        $this->db->update('tournament', $data, $where);
    }

    public function hapusTour($where = null)
    {
        $this->db->delete('tournament', $where);
    }
    public function getCategories()
    {
        return $this->db->get('categories');
    }
    public function joinCategories($where)
    {
        $this->db->select('*');
        $this->db->from('tournament');
        $this->db->join('categories','categories.categories_id = tournament.id_categories');
        $this->db->where($where);
        return $this->db->get();
    }
    public function joinCategories1()
    {
        $this->db->select('*');
        $this->db->from('tournament');
        $this->db->join('categories','categories.categories_id = tournament.id_categories');
        return $this->db->get();
    }
    public function saveSolo($data)
    {
    
        $this->db->insert('solo',$data);
       
    }
     public function saveSquad($data)
    {
    
        $this->db->insert('squad',$data);
       
    }
    public function insertData($table, $data) 
    { 
        $this->db->insert($table, $data); 
    }
    public function Code($tabel, $key) 
    { 
        $this->db->select('right(' . $key . ',3) as kode', false); 
        $this->db->order_by($key, 'desc'); 
        $this->db->limit(1); $query = $this->db->get($tabel); 

        if ($query->num_rows() <> 0) 
        { 
            $data = $query->row(); 
            $kode = intval($data->kode) + 1;
        } 
        else 
        { 
            $kode = 1; 
        } 

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); 
        $kodejadi = date('dmY') . $kodemax; 
        return $kodejadi; 
    }
    public function autoIncSL($tabel, $key) 
    { 
        $this->db->select('right(' . $key . ',3) as kode', false); 
        $this->db->order_by($key, 'desc'); 
        $this->db->limit(1); $query = $this->db->get($tabel); 

        if ($query->num_rows() <> 0) 
        { 
            $data = $query->row(); 
            $kode = intval($data->kode) + 1;
        } 
        else 
        { 
            $kode = 1; 
        } 

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); 
        $kodejadi = 11 . $kodemax; 
        return $kodejadi; 
    }

    public function autoIncSQ($tabel, $key) 
    { 
        $this->db->select('right(' . $key . ',3) as kode', false); 
        $this->db->order_by($key, 'desc'); 
        $this->db->limit(1); $query = $this->db->get($tabel); 

        if ($query->num_rows() <> 0) 
        { 
            $data = $query->row(); 
            $kode = intval($data->kode) + 1;
        } 
        else 
        { 
            $kode = 1; 
        } 

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); 
        $kodejadi = 12 . $kodemax; 
        return $kodejadi; 
    }

    public function joinSL() 
    { 
        $this->db->select('*'); 
        $this->db->from('regist'); 
        $this->db->join('solo', 'solo.id_solo=regist.id_solo');
        $this->db->join('user','user.id=solo.id_user');
        $this->db->join('tournament', 'tournament.id_tour=solo.id_tour');
        $this->db->join('categories', 'categories.categories_id=tournament.id_categories');
        return $this->db->get(); 
    }

    public function joinSQ() 
    { 
        $this->db->select('*'); 
        $this->db->from('regist'); 
        $this->db->join('squad', 'squad.id_squad=regist.id_squad');
        $this->db->join('user','user.id=squad.id_user');
        $this->db->join('tournament', 'tournament.id_tour=squad.id_tour');
        $this->db->join('categories', 'categories.categories_id=tournament.id_categories');
        return $this->db->get(); 
    }
    public function joinRegist() 
    { 
        $this->db->select('*'); 
        $this->db->from('regist'); 
        $this->db->join('user','user.id=regist.id_user');
        return $this->db->get(); 
    }
}