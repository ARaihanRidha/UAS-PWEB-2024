<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{
    public function index()
    {
        return view('halaman_register');
    }
    public function process()
    {
        // Validasi input
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'no_handphone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'required|min_length[4]|max_length[100]|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            'konfirmasi_password' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $users = new UsersModel();

        // Hash the password before storing it
        $hashedPassword = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

        $users->insert([
            'username' => $this->request->getVar('username'),
            'password' => $hashedPassword,
            'email' => $this->request->getVar('email'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'no_handphone' => $this->request->getVar('no_handphone')
        ]);

        return redirect()->to('/');
    }
}
