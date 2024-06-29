<?php
namespace App\Controllers;
use App\Models\UsersModel;
class Dashboard extends BaseController
{
    public function index()
    {
        // Load session library
        $session = \Config\Services::session();

        // Get username from session
        $username = $session->get('username');

        // Check if username exists in session
        if (empty($username)) {
            // Redirect to login page or show an error
            return redirect()->to('/');
        }

        // Load UsersModel
        $usersModel = new UsersModel();

        // Get user data from the model
        $user = $usersModel->getUserByUsername($username);

        // Check if user data is retrieved
        if (!$user) {
            // Handle error or redirect
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User not found');
        }

        // Pass user data to the view
        $data['nama_lengkap'] = $user['nama_lengkap'];

        // Load view with data
        return view('dashboard', $data);
    }
}
?>