<?php
class Waktu_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_waktu()
    {
        // Query untuk mendapatkan semua data waktu
        return $this->db->get('waktu')->result();
    }

    public function get_waktu_by_id($id)
    {
        // Query untuk mendapatkan data waktu berdasarkan ID
        return $this->db->get_where('waktu', array('id_waktu' => $id))->row();
    }

    public function create_waktu($data)
    {
        // Insert data waktu baru
        return $this->db->insert('waktu', $data);
    }

    public function update_waktu($id, $data)
    {
        // Update data waktu berdasarkan ID
        $this->db->where('id_waktu', $id);
        return $this->db->update('waktu', $data);
    }

    public function delete_waktu($id)
    {
        // Hapus data waktu berdasarkan ID
        return $this->db->delete('waktu', array('id_waktu' => $id));
    }
}
