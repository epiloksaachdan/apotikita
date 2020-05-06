<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('M_user');
        $this->load->model('M_suplier');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        if ($this->M_user->getuser($user, $pass)) {
            $this->session->set_userdata('username', $user);
            redirect('main/dashboard', 'refresh');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert">Username atau Password salah!</div>');
            redirect('main', 'refresh');
        }
    }

    public function dashboard()
    {
        $this->load->view('part/header');
        $this->load->view('dashboard');
        $this->load->view('part/footer');
    }

    public function dataobat()
    {
        $this->load->view('part/header');
        $this->load->view('dataobat');
        $this->load->view('part/footer');
    }

    public function tambahobat()
    {
        $this->form_validation->set_rules('suplier', 'Suplier', 'trim|required');
        $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'trim|required');
        $this->form_validation->set_rules('produsen', 'Produsen', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
        $this->form_validation->set_rules('qty', 'Jumlah Stok', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['suplier'] = $this->M_suplier->getSuplier();
            $this->load->view('part/header');
            $this->load->view('tambahobat', $data);
            $this->load->view('part/footer');
        } else {
            echo 'sukses';
        }
    }

    public function datasuplier()
    {
        $data['suplier'] = $this->M_suplier->getSuplier();

        $this->load->view('part/header');
        $this->load->view('datasuplier', $data);
        $this->load->view('part/footer');
    }

    public function tambahsuplier()
    {
        $this->form_validation->set_rules('name', 'Nama Suplier', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('kota', 'Kota', 'trim|required');
        $this->form_validation->set_rules('nohp', 'Telepon', 'trim|required|min_length[9]|max_length[20]|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('part/header');
            $this->load->view('tambahsuplier');
            $this->load->view('part/footer');
        } else {
            $data = [
                'nama' => $this->input->post('name'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'nohp' => $this->input->post('nohp')
            ];
            if ($this->M_suplier->tambah($data)) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show col-3 mt-5 text-center" role="alert">
                Data Suplier berhasil di tambahkan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
                redirect('main/datasuplier');
            } else {
                echo 'query gagal';
            }
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('main', 'refresh');
    }
}
