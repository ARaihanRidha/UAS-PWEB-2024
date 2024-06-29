<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view('halaman_login');
    }

    public function process()
    {
        $userModel = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Username dan password harus diisi.');
            return redirect()->back();
        }

        // Cari pengguna berdasarkan username
        $userData = $userModel->where('username', $username)->first();

        if ($userData) {
            // Verifikasi password
            if (password_verify($password, $userData['password'])) {
                // Set session data
                session()->set([
                    'username' => $userData['username'],
                    'logged_in' => true
                ]);
                return redirect()->to(base_url('/dashboard'));
            } else {
                session()->setFlashdata('error', 'Password salah.');
            }
        } else {
            session()->setFlashdata('error', 'Username atau Password salah.');
        }
        return redirect()->back();
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/halaman_login');
    }
}
?>
