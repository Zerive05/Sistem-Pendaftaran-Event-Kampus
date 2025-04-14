<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // ✅ Tambahkan library session
        $this->load->library('session');

        // 🔒 Proteksi: Cek apakah user sudah login
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

        $this->load->model('Event_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->database();
        $this->db->select('events.*, COUNT(event_peserta.id) AS total_peserta');
        $this->db->from('events');
        $this->db->join('event_peserta', 'events.id = event_peserta.event_id', 'left');
        $this->db->group_by('events.id');
        $data['events'] = $this->db->get()->result();
        $this->load->view('event/index', $data);
    }

    public function add() {
        $this->load->view('event/add');
    }

    public function store() {
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'date' => $this->input->post('date'),
            'location' => $this->input->post('location')
        );
        $this->Event_model->insert($data);
        redirect('event');
    }

    public function edit($id) {
        $data['event'] = $this->Event_model->get_by_id($id);
        $this->load->view('event/edit', $data);
    }

    public function update($id) {
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'date' => $this->input->post('date'),
            'location' => $this->input->post('location')
        );
        $this->Event_model->update($id, $data);
        redirect('event');
    }

    public function delete($id) {
        $this->Event_model->delete($id);
        redirect('event');
    }
}
