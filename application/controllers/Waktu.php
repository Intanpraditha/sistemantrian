<?php
class Waktu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Waktu_model');
    }

    public function index()
    {
        // Menampilkan semua data waktu
        $data['waktu'] = $this->Waktu_model->get_all_waktu();
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('waktu/index', $data);
		$this->load->view('templates/footer.php');
    }

    public function tambah()
    {
        // Menampilkan halaman tambah waktu
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('waktu/tambah');
		$this->load->view('templates/footer.php');
    }

    public function simpan()
    {
        $waktu = $this->input->post('waktu');

        // Perulangan untuk menyimpan semua waktu
        foreach ($waktu as $w) {
            $data = array(
                'waktu' => $w
            );

            $this->Waktu_model->create_waktu($data);
        }

        redirect('waktu');
    }


    public function edit($id)
    {
        // Menampilkan halaman edit waktu
        $data['waktu'] = $this->Waktu_model->get_waktu_by_id($id);
        $this->load->view('templates/header.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('templates/topbar.php');
        $this->load->view('waktu/edit', $data);
		$this->load->view('templates/footer.php');
    }

    public function update($id)
    {
        // Mengupdate data waktu
        $data = array(
            'waktu' => $this->input->post('waktu')
        );

        $this->Waktu_model->update_waktu($id, $data);
        redirect('waktu');
    }

    public function hapus($id)
    {
        // Menghapus data waktu
        $this->Waktu_model->delete_waktu($id);
        redirect('waktu');
    }
}
