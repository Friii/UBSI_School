<?php

class M_mahasiswa extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_mahasiswa');
    }

    public function input_data($data,$table){
       $this->db->insert($table, $data);
    }
}