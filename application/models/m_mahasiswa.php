<?php
// Mengkoneksikan ke database
class M_mahasiswa extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_mahasiswa');
    }

    public function input_data($data,$table){
       $this->db->insert($table, $data);
    }

    public function jumlah_siswa($where=''){
        return $this->db->query("select * from tb_mahasiswa $where;");
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function hapus_dataa($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function hapus_data_guru($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table){
            return $this->db->get_where($table, $where);
        }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function update_dataa($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function user($id = NULL){
        $query = $this->db->get_where('tb_user', array('id' => $id))->row();
        return $query;
     }
}
