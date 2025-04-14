<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {

    // Menyimpan data pendaftaran
    public function daftar($user_id, $event_id) {
        $data = array(
            'user_id' => $user_id,
            'event_id' => $event_id
        );
        return $this->db->insert('event_peserta', $data);
    }

    // Mengecek apakah user sudah daftar ke event tertentu
    public function sudah_daftar($user_id, $event_id) {
        $this->db->where('user_id', $user_id);
        $this->db->where('event_id', $event_id);
        return $this->db->get('event_peserta')->row();
    }

    // Menampilkan semua event yang diikuti user
    public function get_event_by_user($user_id) {
        $this->db->select('events.*');
        $this->db->from('events');
        $this->db->join('event_peserta', 'events.id = event_peserta.event_id');
        $this->db->where('event_peserta.user_id', $user_id);
        return $this->db->get()->result();
    }
}
