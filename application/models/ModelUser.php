<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('tb_user', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('tb_user', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('tb_user', $where);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }

    public function user(){
        return $this->db->get('tb_user');
    }

    public function jumlah_admin($where=''){
        return $this->db->query("select * from tb_user $where;");
    }
    
}
