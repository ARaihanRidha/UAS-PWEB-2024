<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'question'];

    // Fungsi untuk mendapatkan data dummy
    public function getDummyData()
    {
        return [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'question' => 'Apa saja syarat untuk mengambil mata kuliah ini?',
                'created_at' => '2024-06-25 10:00:00'
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'question' => 'Bagaimana cara mengakses jurnal online?',
                'created_at' => '2024-06-25 11:00:00'
            ]
        ];
    }
}
