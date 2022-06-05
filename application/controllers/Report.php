<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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
        $this->load->view('template/header');
        $this->load->view('report/index');
        $this->load->view('template/footer');
    }

    public function pdf(){
        $data['jadwalpetugas'] = $this->db->query("SELECT jp.*,ac.AccountNama,ac.AccountDetail, jdw.JadwalTanggalMulai, jdw.JadwalTanggalSelesai, jdw.Jadwaltempat, ptgs.PetugasNama from jadwal_petugas jp join jadwal jdw on jp.JadwalPetugasJadwalId = jdw.JadwalId join petugas ptgs on jp.JadwalPetugasPetugasId = ptgs.PetugasId join account ac on jdw.JadwalAccountId=ac.AccountId")->result();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Laporan.pdf";
        $this->pdf->load_view('report/pdf_report',$data);
    }

}

/* End of file Report.php */


?>