<?php


class Pasien_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function tambah_pasien($data) {
        return $this->db->insert('pasien', $data);
    }
    
    public function get_pasien($id_pasien = null) {
        if ($id_pasien === null) {
            return $this->db->get('pasien')->result();
        } else {
            return $this->db->get_where('pasien', array('id_pasien' => $id_pasien))->row();
        }
    }
    
    public function update_pasien($id_pasien, $data) {
        return $this->db->update('pasien', $data, array('id_pasien' => $id_pasien));
    }
    
    public function hapus_pasien($id_pasien) {
        return $this->db->delete('pasien', array('id_pasien' => $id_pasien));
    }
}
?>
