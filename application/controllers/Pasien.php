<?php
class Pasien extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Pasien_model');
    }
    
    public function index() {
        $data['pasien'] = $this->Pasien_model->get_pasien();
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('pasien/index', $data);
		$this->load->view('templates/footer.php');
    }
    
    public function tambah() {
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('pasien/tambah');
        $this->load->view('templates/footer.php');
    }
    
    public function simpan() {
        $data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            'no_bpjs' => $this->input->post('no_bpjs'),
            'nik' => $this->input->post('nik'),
            'jk' => $this->input->post('jk'),
            'usia' => $this->input->post('usia'),
            'no_telp' => $this->input->post('no_telp')
        );
        $this->Pasien_model->tambah_pasien($data);
        redirect('pasien');
    }
    
    public function edit($id_pasien) {
        $data['pasien'] = $this->Pasien_model->get_pasien($id_pasien);
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('pasien/edit', $data);
        $this->load->view('templates/footer.php');
    }
    
    public function update($id_pasien) {
        $data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            'no_bpjs' => $this->input->post('no_bpjs'),
            'nik' => $this->input->post('nik'),
            'jk' => $this->input->post('jk'),
            'usia' => $this->input->post('usia'),
            'no_telp' => $this->input->post('no_telp')
        );
        $this->Pasien_model->update_pasien($id_pasien, $data);
        redirect('pasien');
    }
    
    public function hapus($id_pasien) {
        $this->Pasien_model->hapus_pasien($id_pasien);
        redirect('pasien');
    }
}
?>
