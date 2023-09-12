<?php
class Dokter_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function tambah_dokter($data) {
        return $this->db->insert('dokter', $data);
    }
    
    public function get_dokter($id_dokter = null) {
        if ($id_dokter === null) {
            return $this->db->get('dokter')->result();
        } else {
            return $this->db->get_where('dokter', array('id_dokter' => $id_dokter))->row();
        }
    }
    
    public function update_dokter($id_dokter, $data) {
        return $this->db->update('dokter', $data, array('id_dokter' => $id_dokter));
    }
    
    public function hapus_dokter($id_dokter) {
        return $this->db->delete('dokter', array('id_dokter' => $id_dokter));
    }
}
?>
