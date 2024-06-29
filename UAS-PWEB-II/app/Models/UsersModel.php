<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key dari tabel
    protected $allowedFields = ['username', 'password', 'email', 'nama_lengkap', 'no_handphone']; // Kolom-kolom yang diperbolehkan untuk diisi

    // Metode untuk mengambil data pengguna berdasarkan username
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
?>