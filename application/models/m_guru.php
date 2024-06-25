<?php 

class M_guru extends CI_Model{
    public function guru(){
        return $this->db->get('tb_guru');
    }
    
    public function saverecords($data){
        $this->db->insert('tb_guru', $data);
        return true;
    }

    public function jumlah_guru($where=''){
        return $this->db->query("select * from tb_guru $where;");
    }

    public function input_data_guru($data,$table){
        $this->db->insert($table, $data);
     }

     public function detail($id = NULL){
        $query = $this->db->get_where('tb_guru', array('id' => $id))->row();
        return $query;
     }
}

?>
