<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }

    public function login() {
        $this->load->view('login');
    }

    public function login_action() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->check_login($username, $password);

        if ($user) {
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('name', $user->name);
            redirect('event');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('auth/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function register() {
        $this->load->view('register');
    }

    public function register_action() {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'name'     => $this->input->post('name')
        );
        $this->db->insert('users', $data);
        $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
        redirect('auth/login');
    }
}
