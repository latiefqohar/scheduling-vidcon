<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("petugas_model");
        $this->load->library('form_validation');
        if($this->session->userdata('is_login')!=true) {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['petugas'] = $this->petugas_model->getAll();
        $this->load->view('template/header');
        $this->load->view('petugas/index', $data);
        $this->load->view('template/footer');
    }

    public function create()
    {
        $this->load->view('template/header');
        $this->load->view('petugas/create');
        $this->load->view('template/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('PetugasId', 'ID Petugas', '');
        $this->form_validation->set_rules('PetugasNama', 'Nama Petugas', 'required');

        if ($this->form_validation->run() == true) {
            $data['PetugasId'] = $this->input->post('PetugasId');
            $data['PetugasNama'] = $this->input->post('PetugasNama');
            $this->petugas_model->save($data);
            redirect('petugas/index');
        } else {
            $this->load->view('template/header');
            $this->load->view('petugas/create');
            $this->load->view('template/footer');
        }
    }

    function edit($PetugasId)
    {
        $data['petugas'] = $this->db->get_where('petugas',['PetugasId'=>$PetugasId])->row();
        $this->load->view('template/header');
        $this->load->view('petugas/edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('PetugasId', 'ID', '');
        $this->form_validation->set_rules('PetugasNama', 'Nama Petugas', 'required');
        if ($this->form_validation->run() == true) {
            $PetugasId = $this->input->post('PetugasId');
            $data['PetugasId'] = $this->input->post('PetugasId');
            $data['PetugasNama'] = $this->input->post('PetugasNama');
            $this->petugas_model->update($data, $PetugasId);
            redirect('petugas/index');
        } else {
            $PetugasId = $this->input->post('PetugasId');
            $this->load->view('template/header');
            $this->load->view('petugas/create');
            $this->load->view('template/footer');
        }
    }

    function delete($PetugasId)
    {
        $this->petugas_model->delete($PetugasId);
        redirect('petugas/index');
    }
}
