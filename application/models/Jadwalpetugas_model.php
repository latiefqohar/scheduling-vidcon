<?php defined('BASEPATH') or exit('No direct script access allowed');

class Jadwalpetugas_model extends CI_Model
{
    private $table = "jadwal_petugas";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
}
