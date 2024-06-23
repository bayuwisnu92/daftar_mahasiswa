<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Loader $load
 * @property CI_Session $session
 * @property CI_DB_query_builder $db
 *  @property Mahasiswa_model $Mahasiswa_model
 */

class Mahasiswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');

        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }
    }
    public function index() {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function add() {
        $data['judul'] = 'Tambah Mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('crud/add', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->addMahasiswa([
                'nama' => $this->input->post('nama', true),
                'nim' => $this->input->post('nim', true),
                'email' => $this->input->post('email', true),
                'jurusan' => $this->input->post('jurusan', true)
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Mahasiswa baru berhasil ditambahkan!</div>');
            redirect('mahasiswa');
        }
    }

    public function edit($id) {
        
        $data['judul'] = 'Edit Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('crud/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        

        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'jurusan' => $this->input->post('jurusan')
        ];

        $this->Mahasiswa_model->updateMahasiswa($id, $data);
        redirect('mahasiswa');
    }

    public function delete($id) {
       
        $this->Mahasiswa_model->deleteMahasiswa($id);
        redirect('mahasiswa');
    }
}
