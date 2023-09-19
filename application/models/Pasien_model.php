<?php
class Pasien_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_pasien()
    {
        // Query untuk mendapatkan semua data pasien
        $this->db->select('pasien.*, waktu.waktu');
        $this->db->from('pasien');
        $this->db->join('waktu', 'pasien.Id_waktu = waktu.id_waktu', 'left');
        return $this->db->get()->result();
    }

    public function get_pasien_by_id($id)
    {
        // Query untuk mendapatkan data pasien berdasarkan ID
        return $this->db->get_where('pasien', array('id_pasien' => $id))->row();
    }

    public function create_pasien($data)
    {
        // Insert data pasien baru
        return $this->db->insert('pasien', $data);
    }

    public function update_pasien($id, $data)
    {
        // Update data pasien berdasarkan ID
        $this->db->where('id_pasien', $id);
        return $this->db->update('pasien', $data);
    }

    public function delete_pasien($id)
    {
        // Hapus data pasien berdasarkan ID
        return $this->db->delete('pasien', array('id_pasien' => $id));
    }
}
