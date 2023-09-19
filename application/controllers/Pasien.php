<?php
class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->model('Waktu_model');
    }

    public function daftar()
	{
		$data['waktu'] = $this->Waktu_model->get_all_waktu();
		$this->load->view('templates/daftar.php', $data);
	}

    public function index()
    {
        // Menampilkan semua data pasien
        $data['pasien'] = $this->Pasien_model->get_all_pasien();
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('pasien/index', $data);
		$this->load->view('templates/footer.php');
    }

    public function tambah()
{
    // Mengambil data waktu dari model
    $data['waktu'] = $this->Waktu_model->get_all_waktu();

    // Menampilkan halaman tambah pasien
    $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('pasien/tambah', $data);
		$this->load->view('templates/footer.php');
}

    public function simpan()
    {
        // Menyimpan data pasien baru
        $data = array(
            'no_antrian' => $this->input->post('no_antrian'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'nik' => $this->input->post('nik'),
            'jk' => $this->input->post('jk'),
            'no_telp' => $this->input->post('no_telp'),
            'tgl' => $this->input->post('tgl'),
            'Id_waktu' => $this->input->post('Id_waktu'),
            'status' => $this->input->post('status')
        );

        $this->Pasien_model->create_pasien($data);
        redirect('pasien');
    }

    public function edit($id)
    {
        // Mengambil data waktu dari model
        $data['waktu'] = $this->Waktu_model->get_all_waktu();

        // Mengambil data pasien berdasarkan ID
        $data['pasien'] = $this->Pasien_model->get_pasien_by_id($id);
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('pasien/edit', $data);
		$this->load->view('templates/footer.php');
    }

    public function update($id)
    {
        // Mengupdate data pasien
        $data = array(
            'no_antrian' => $this->input->post('no_antrian'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'nik' => $this->input->post('nik'),
            'jk' => $this->input->post('jk'),
            'no_telp' => $this->input->post('no_telp'),
            'tgl' => $this->input->post('tgl'),
            'Id_waktu' => $this->input->post('Id_waktu'),
            'status' => $this->input->post('status')
        );

        $this->Pasien_model->update_pasien($id, $data);
        redirect('pasien');
    }

    public function hapus($id)
    {
        // Menghapus data pasien
        $this->Pasien_model->delete_pasien($id);
        redirect('pasien');
    }
}
