<?php 

class M_calonsiswa extends CI_Model{
    public function siswa(){
        return $this->db->get('tb_calon_siswa');
    }
    
    public function saverecords($data){
        $this->db->insert('tb_calon_siswa', $data);
        return true;
    }
    public function jumlah_calon($where=''){
        return $this->db->query("select * from tb_calon_siswa $where;");
    }
    

    public function input_data($data,$table){
        $this->db->insert($table, $data);
     }
    public function user($id = NULL){
        $query = $this->db->get_where('tb_user', array('id' => $id))->row();
        return $query;
     }
}

?>
