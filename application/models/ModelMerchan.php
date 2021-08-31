<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMerchan extends CI_Model
{
    //manajemen game
    public function getMerch()
    {
        return $this->db->get('merchan');
    }
    public function getDataWhere($table, $where)
    { 
        $this->db->where($where); 
        return $this->db->get($table); 
    }
     public function getMerchanid($id)
    {
        $query = $this->db->query("SELECT * FROM merchan WHERE id = '$id'");
        return $query->result();
    }
    public function merchanWhere($where)
    {
        return $this->db->get_where('merchan', $where);
    }
    
    public function saveMerchan($data = null)
    {
        $this->db->insert('merchan',$data);
    }

    public function updateMerchan($data = null, $where = null)
    {
        $this->db->update('merchan', $data, $where);
    }

    public function deleteMerchan($where = null)
    {
        $this->db->delete('merchan', $where);
    }

    //Category

    public function getCategory()
    {
        return $this->db->get('category_merch');
    }
    public function joinCategoryM($where)
    {
        $this->db->select('*');
        $this->db->from('merchan');
        $this->db->join('category_merch','category_merch.id_mcategory = merchan.category_merch');
        $this->db->where($where);
        return $this->db->get();
    }
    public function joinCategoryM1()
    {
        $this->db->select('*');
        $this->db->from('merchan');
        $this->db->join('category_merch','category_merch.id_mcategory = merchan.category_merch');
        return $this->db->get();
    }
     public function insertData($table, $data) 
    { 
        $this->db->insert($table, $data); 
    //Cart
    }
    public function getCart()
    {
        $mail=$this->session->userdata('email');
        $sql = "SELECT id_cart, user_id, user_email, merch_name, merch_id, merch_price, merch_qty, merch_image, (merch_price*merch_qty) AS merch_total FROM cart WHERE user_email ='$mail' ORDER BY id_cart";
        return $this->db->query($sql);
    }
    public function qty_m()
    {     
        $this->db->select_sum('merch_qty','mqty');
        $this->db->from('cart'); 
        return $this->db->get('')->row();
    }
    public function find($where) 
    { 
    //Query mencari record berdasarkan ID-nya 
        $this->db->limit(1); 
        return $this->db->get('cart', $where); 
    }

        public function saveDetail() 
    { 
        $sql = "INSERT INTO detail_inv (id_inv) SELECT invoice.id_invoice FROM invoice,cart"; 
        $this->db->query($sql); 
    } 

     public function inCode($tabel, $key) 
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

        $kodemax = str_pad($kode, 3, "1", STR_PAD_LEFT); 
        $kodejadi = 13 . $kodemax; 
        return $kodejadi; 
    } 

        public function blankData($table) 
    { 
        return $this->db->truncate($table); 
    }

    public function deleteData($where, $table) 
    { 
        $this->db->where($where); 
        $this->db->delete($table);
    }

      public function joinInv() 
    { 
        $kk = $this->db->query("select*from invoice order by id_invoice desc limit 1")->row();
        $id = $kk->id_invoice;

        $this->db->select('*'); 
        $this->db->from('invoice'); 
        $this->db->join('shipping','shipping.id_ship=invoice.country_inv');
        $this->db->join('user', 'user.id=invoice.id_user');
        $this->db->where('id_invoice',$id);
        return $this->db->get(); 
    }
    public function joinDetailInv() 
    { 
        $kk = $this->db->query("select*from invoice order by id_invoice desc limit 1")->row();
        $id = $kk->id_invoice;

        $this->db->select('*'); 
        $this->db->from('detail_inv'); 
        $this->db->join('merchan','merchan.id_merch=detail_inv.merch_id');
        $this->db->where('id_inv',$id);
        return $this->db->get(); 
    } 

}