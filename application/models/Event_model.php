<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {

    public function get_all() {
        return $this->db->get('events')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('events', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('events', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('events', $data);
    }

    public function delete($id) {
        return $this->db->delete('events', ['id' => $id]);
    }
}
