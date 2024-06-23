<?php

class Users_model extends CI_Model {

    public function register($data) {
        return $this->db->insert('users', $data);
    }

    public function getUser($username) {
        return $this->db->get_where('users', ['username' => $username])->row_array();
    }
}
?>
