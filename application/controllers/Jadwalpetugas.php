<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwalpetugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("jadwalpetugas_model");
        $this->load->library('form_validation');
        if($this->session->userdata('is_login')!=true) {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['jadwalpetugas'] = $this->db->query("SELECT jp.*,ac.AccountNama,ac.AccountDetail, jdw.JadwalTanggalMulai, jdw.JadwalTanggalSelesai, jdw.Jadwaltempat, ptgs.PetugasNama from jadwal_petugas jp join jadwal jdw on jp.JadwalPetugasJadwalId = jdw.JadwalId join petugas ptgs on jp.JadwalPetugasPetugasId = ptgs.PetugasId join account ac on jdw.JadwalAccountId=ac.AccountId")->result();

        $this->load->view('template/header');
        $this->load->view('jadwalpetugas/index', $data);
        $this->load->view('template/footer');
    }

    public function create(){
        $data['jadwal'] = $this->db->get('jadwal')->result();
        $data['petugas'] = $this->db->get('petugas')->result();
        $this->load->view('template/header');
        $this->load->view('jadwalpetugas/create', $data);
        $this->load->view('template/footer');
    }

    public function save(){
        $post = $this->input->post();
        $data = array(
            'JadwalPetugasJadwalId' => $post['JadwalPetugasJadwalId'],
            'JadwalPetugasPetugasId' => $post['JadwalPetugasPetugasId'],
        );

        $this->db->insert('jadwal_petugas',$data);
        
        redirect('jadwalpetugas','refresh');
        
    }

    public function edit($id){
        $data['jadwal'] = $this->db->get('jadwal')->result();
        $data['petugas'] = $this->db->get('petugas')->result();
        $data['jadwal_petugas'] = $this->db->get_where('jadwal_petugas',['JadwalPetugasId'=>$id])->row_array();
        $this->load->view('template/header');
        $this->load->view('jadwalpetugas/edit', $data);
        $this->load->view('template/footer');
    }

    public function update(){
        $post = $this->input->post();
        $data = array(
            'JadwalPetugasJadwalId' => $post['JadwalPetugasJadwalId'],
            'JadwalPetugasPetugasId' => $post['JadwalPetugasPetugasId'],
        );

        $this->db->update('jadwal_petugas',$data, ['JadwalPetugasId'=>$post['JadwalPetugasId']]);
        redirect('jadwalpetugas','refresh');
        
    }

    public function delete($id){
        $this->db->delete('jadwal_petugas',['JadwalPetugasId'=>$id]);
        redirect('jadwalpetugas','refresh');
    }
}
