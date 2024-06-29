<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends BaseController {

    public function dashboard() {
        // Load session library
        $this->load->library('session');

        // Get username from session
        $username = $this->session->userdata('username');

        // Check if username exists in session
        if (empty($username)) {
            // Redirect to login page or show an error
            redirect('login');
        }

        // Load model
        $this->load->model('User_model');

        // Get user data from the model
        $user = $this->User_model->get_user_by_username($username);

        // Check if user data is retrieved
        if (!$user) {
            // Handle error or redirect
            show_error('User not found');
        }

        // Pass user data to the view
        $data['nama_lengkap'] = $user->nama_lengkap;

        $this->load->view('dashboard', $data);
    }
}