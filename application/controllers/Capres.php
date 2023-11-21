<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Capres extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('capres_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Capres";
        $data['Capres'] = $this->capres_model->get();
        $this->load->view("layout/header");
        $this->load->view("capres/vw_capres", $data);
        $this->load->view("layout/footer");
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Capres";
        $data['Capres'] = $this->capres_model->get();
        $this->load->view("layout/header");
        $this->load->view("capres/vw_tambah_capres", $data);
        $this->load->view("layout/footer");
    }

    public function hapus($id)
    {
        $this->capres_model->delete($id);
        redirect('Capres');
    }

    function upload()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'asal' => $this->input->post('asal'),
            'partai' => $this->input->post('partai'),
            'riwayat' => $this->input->post('riwayat'),
            'umur' => $this->input->post('umur'),
        ];
        $this->capres_model->insert($data);
        redirect('Capres');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Capres";
        $data['Capres'] = $this->capres_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("capres/vw_ubah_capres", $data);
        $this->load->view("layout/footer");
    }

    public function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'asal' => $this->input->post('asal'),
            'partai' => $this->input->post('partai'),
            'riwayat' => $this->input->post('riwayat'),
            'umur' => $this->input->post('umur'),
        ];
        $id = $this->input->post('id');
        $this->capres_model->update(['id' => $id], $data);
        redirect('Capres');
    }
}