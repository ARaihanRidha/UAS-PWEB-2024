<?php namespace App\Models;
use CodeIgniter\Model;
class User_model extends Model {
    public function get_user_by_username($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        return $query->row();
    }
}