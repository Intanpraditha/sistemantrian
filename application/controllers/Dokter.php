<?php
class Dokter extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Dokter_model');
    }
    
    public function index() {
        $data['dokter'] = $this->Dokter_model->get_dokter();
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('dokter/index', $data);
		$this->load->view('templates/footer.php');
    }
    
    public function tambah() {
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('dokter/tambah');
		$this->load->view('templates/footer.php');
    }
    
    public function simpan() {
        $data = array(
            'nama_dokter' => $this->input->post('nama_dokter'),
            'jadwal' => $this->input->post('jadwal'),
            'id_admin' => $this->input->post('id_admin')
        );
        $this->Dokter_model->tambah_dokter($data);
        redirect('dokter');
    }
    
    public function edit($id_dokter) {
        $data['dokter'] = $this->Dokter_model->get_dokter($id_dokter);
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('dokter/edit', $data);
		$this->load->view('templates/footer.php');
    }
    
    public function update($id_dokter) {
        $data = array(
            'nama_dokter' => $this->input->post('nama_dokter'),
            'jadwal' => $this->input->post('jadwal'),
            'id_admin' => $this->input->post('id_admin')
        );
        $this->Dokter_model->update_dokter($id_dokter, $data);
        redirect('dokter');
    }
    
    public function hapus($id_dokter) {
        $this->Dokter_model->hapus_dokter($id_dokter);
        redirect('dokter');
    }
}
?>
