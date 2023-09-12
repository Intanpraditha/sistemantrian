<?php
class Antrian extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Antrian_model');
    }
    
    public function index() {
        $data['antrian'] = $this->Antrian_model->get_antrian();
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('antrian/index', $data);
		$this->load->view('templates/footer.php');
    }
    
    public function tambah() {
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('antrian/tambah');
		$this->load->view('templates/footer.php');
    }
    
    public function simpan() {
        $data = array(
            'no_antrian' => $this->input->post('no_antrian'),
            'tgl' => $this->input->post('tgl'),
            'waktu' => $this->input->post('waktu'),
            'status' => $this->input->post('status'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_pasien' => $this->input->post('id_pasien')
        );
        $this->Antrian_model->tambah_antrian($data);
        redirect('antrian');
    }
    
    public function edit($id_antrian) {
        $data['antrian'] = $this->Antrian_model->get_antrian($id_antrian);
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('antrian/edit', $data);
		$this->load->view('templates/footer.php');
    }
    
    public function update($id_antrian) {
        $data = array(
            'no_antrian' => $this->input->post('no_antrian'),
            'tgl' => $this->input->post('tgl'),
            'waktu' => $this->input->post('waktu'),
            'status' => $this->input->post('status'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_pasien' => $this->input->post('id_pasien')
        );
        $this->Antrian_model->update_antrian($id_antrian, $data);
        redirect('antrian');
    }
    
    public function hapus($id_antrian) {
        $this->Antrian_model->hapus_antrian($id_antrian);
        redirect('antrian');
    }
}
?>
