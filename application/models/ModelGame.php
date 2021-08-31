<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelGame extends CI_Model
{
    //manajemen game
    public function getGame()
    {
        return $this->db->get('game');
    }
     public function getGameid($id)
    {
        $query = $this->db->query("SELECT * FROM game WHERE id = '$id'");
        return $query->result();
    }
    public function gameWhere($where)
    {
        return $this->db->get_where('game', $where);
    }

    public function saveGame($data = null)
    {
        $this->db->insert('game',$data);
    }

    public function updateGame($data = null, $where = null)
    {
        $this->db->update('game', $data, $where);
    }

    public function hapusGame($where = null)
    {
        $this->db->delete('game', $where);
    }
}