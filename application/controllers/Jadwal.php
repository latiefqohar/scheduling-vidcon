<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("jadwal_model");
        $this->load->library('form_validation');
        if($this->session->userdata('is_login')!=true) {
            redirect('login','refresh');
        }
    }

    public function index()
    {

        $data['jadwal'] = $this->db->query("select jadwal.*,account.AccountNama from jadwal join account on JadwalAccountId=AccountId ")->result();
        $this->load->view('template/header');
        $this->load->view('jadwal/index', $data);
        $this->load->view('template/footer');
    }

    public function create()
    {
        $data['account'] = $this->db->get('account')->result();
        $this->load->view('template/header');
        $this->load->view('jadwal/create',$data);
        $this->load->view('template/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('JadwalTanggalMulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('JadwalTanggalSelesai', 'Tanggal Selesai', 'required');
        $this->form_validation->set_rules('JadwalTempat', 'Tempat', 'required');
        $this->form_validation->set_rules('JadwalAccountId', 'ID Account', 'required');

        if ($this->form_validation->run() == true) {
            $data['JadwalTanggalMulai'] = $this->input->post('JadwalTanggalMulai');
            $data['JadwalTanggalSelesai'] = $this->input->post('JadwalTanggalSelesai');
            $data['JadwalTempat'] = $this->input->post('JadwalTempat');
            $data['JadwalAccountId'] = $this->input->post('JadwalAccountId');
            $this->jadwal_model->save($data);
            redirect('jadwal/index');
        } else {
            $this->load->view('template/header');
            $this->load->view('jadwal/create');
            $this->load->view('template/footer');
        }
    }

    function edit($JadwalId)
    {
        $data['jadwal'] = $this->jadwal_model->getById($JadwalId);
        $data['account'] = $this->db->get('account')->result();
        // var_dump($data['account']);die();
        $this->load->view('template/header');
        $this->load->view('jadwal/edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('JadwalId', 'ID Jadwal', '');
        $this->form_validation->set_rules('JadwalTanggalMulai', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('JadwalTanggalSelesai', 'Tanggal Selesai', 'required');
        $this->form_validation->set_rules('JadwalTempat', 'Tempat', 'required');
        $this->form_validation->set_rules('JadwalAccountId', 'ID Account', 'required');


        if ($this->form_validation->run() == true) {
            $JadwalId = $this->input->post('JadwalId');
            $data['JadwalId'] = $this->input->post('JadwalId');
            $data['JadwalTanggalMulai'] = $this->input->post('JadwalTanggalMulai');
            $data['JadwalTanggalSelesai'] = $this->input->post('JadwalTanggalSelesai');
            $data['JadwalTempat'] = $this->input->post('JadwalTempat');
            $data['JadwalAccountId'] = $this->input->post('JadwalAccountId');
            $this->jadwal_model->update($data, $JadwalId);
            redirect('jadwal/index');
        } else {
            $JadwalId = $this->input->post('JadwalId');
            $this->load->view('template/header');
            $this->load->view('jadwal/create');
            $this->load->view('template/footer');
        }
    }

    function delete($JadwalId)
    {
        $this->jadwal_model->delete($JadwalId);
        redirect('jadwal/index');
    }
}
