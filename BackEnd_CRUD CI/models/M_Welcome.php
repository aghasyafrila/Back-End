<?php
class M_Welcome extends CI_Model{
    public function getDataSiswa(){
        return $this->db->get('data');
    }

    public function inputData($data){
        return $this->db->insert('data', $data);
    }

    public function getDataWhere($id){
        $this->db->where('id', $id);
        return $this->db->get('data');
    }

    public function updateSiswa($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('data', $data);
    }
}
