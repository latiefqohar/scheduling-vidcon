<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("account_model");
        $this->load->library('form_validation');
        if($this->session->userdata('is_login')!=true) {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['account'] = $this->account_model->getAll();
        $this->load->view('template/header');
        $this->load->view('account/index', $data);
        $this->load->view('template/footer');
    }

    public function create()
    {
        $this->load->view('template/header');
        $this->load->view('account/create');
        $this->load->view('template/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('AccountNama', 'Nama Account', 'required');
        $this->form_validation->set_rules('AccountDetail', 'Detail', 'required');

        if ($this->form_validation->run() == true) {
            $data['AccountNama'] = $this->input->post('AccountNama');
            $data['AccountDetail'] = $this->input->post('AccountDetail');
            $this->account_model->save($data);
            redirect('account/index');
        } else {
            $this->load->view('template/header');
            $this->load->view('account/create');
            $this->load->view('template/footer');
        }
    }

    function edit($AccountId)
    {
        $data['account'] = $this->account_model->getById($AccountId);
        $this->load->view('template/header');
        $this->load->view('account/edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('AccountId', 'ID Account', 'required');
        $this->form_validation->set_rules('AccountNama', 'Nama Account', 'required');
        $this->form_validation->set_rules('AccountDetail', 'Detail', 'required');


        if ($this->form_validation->run() == true) {
            $AccountId = $this->input->post('AccountId');
            $data['AccountId'] = $this->input->post('AccountId');
            $data['AccountNama'] = $this->input->post('AccountNama');
            $data['AccountDetail'] = $this->input->post('AccountDetail');
            $this->account_model->update($data, $AccountId);
            redirect('account/index');
        } else {
            $AccountId = $this->input->post('AccountId');
            $this->load->view('template/header');
            $this->load->view('account/create');
            $this->load->view('template/footer');
        }
    }

    function delete($AccountId)
    {
        $this->account_model->delete($AccountId);
        redirect('account/index');
    }
}
