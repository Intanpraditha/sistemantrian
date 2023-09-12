<?php
class Antrian_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function tambah_antrian($data) {
        return $this->db->insert('antrian', $data);
    }
    
    public function get_antrian($id_antrian = null) {
        if ($id_antrian === null) {
            return $this->db->get('antrian')->result();
        } else {
            return $this->db->get_where('antrian', array('id_antrian' => $id_antrian))->row();
        }
    }
    
    public function update_antrian($id_antrian, $data) {
        return $this->db->update('antrian', $data, array('id_antrian' => $id_antrian));
    }
    
    public function hapus_antrian($id_antrian) {
        return $this->db->delete('antrian', array('id_antrian' => $id_antrian));
    }
}
?>
