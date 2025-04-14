<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }
        $this->load->model('Pendaftaran_model');
    }

    public function daftar($event_id) {
        $user_id = $this->session->userdata('user_id');

        if (!$this->Pendaftaran_model->sudah_daftar($user_id, $event_id)) {
            $this->Pendaftaran_model->daftar($user_id, $event_id);
            $this->session->set_flashdata('success', 'Berhasil mendaftar event.');
        } else {
            $this->session->set_flashdata('info', 'Kamu sudah terdaftar pada event ini.');
        }

        redirect('event');
    }

    public function event_saya() {
        $user_id = $this->session->userdata('user_id');
        $data['events'] = $this->Pendaftaran_model->get_event_by_user($user_id);
        $this->load->view('event/event_saya', $data);
    }
}
