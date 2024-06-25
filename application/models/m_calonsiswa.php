<?php 

class M_calonsiswa extends CI_Model{
    public function siswa(){
        return $this->db->get('tb_calon_siswa');
    }
    
    public function saverecords($data){
        $this->db->insert('tb_calon_siswa', $data);
        return true;
    }

    public function input_data($data,$table){
        $this->db->insert($table, $data);
     }
}

?>
