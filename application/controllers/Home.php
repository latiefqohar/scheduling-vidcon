<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {


        $this->load->model('jadwal_model');
        $data['total_petugas'] = $this->db->get("petugas")->num_rows();
        $data['total_jadwal'] = $this->db->get("jadwal")->num_rows();
        // $data['jadwal'] = $this->jadwal_model->getAll();
        $data['jadwalpetugas'] = $this->db->query("SELECT jp.*, jdw.JadwalTanggalMulai, jdw.JadwalTanggalSelesai, jdw.Jadwaltempat, ptgs.PetugasNama from jadwal_petugas jp join jadwal jdw on jp.JadwalPetugasJadwalId = jdw.JadwalId join petugas ptgs on jp.JadwalPetugasPetugasId = ptgs.PetugasId")->result();
        $this->load->view('home',$data);

        
    }
}
