<?php 

class M_guru extends CI_Model{
    public function guru(){
        return $this->db->get('tb_guru');
    }
    
    public function saverecords($data){
        $this->db->insert('tb_guru', $data);
        return true;
    }
}

?>
