<?php

class Mahasiswa_model extends CI_Model {
    
    public function getAllMahasiswa() {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function getMahasiswaById($id) {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function addMahasiswa($data) {
        return $this->db->insert('mahasiswa', $data);
    }


    public function updateMahasiswa($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('mahasiswa', $data);
    }

    public function deleteMahasiswa($id) {
        $this->db->where('id', $id);
        return $this->db->delete('mahasiswa');
    }
}
