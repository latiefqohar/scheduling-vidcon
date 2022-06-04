<?php defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    /*menghubungkan ke tabel jadwal di database*/
    private $table = "jadwal";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    /*fungsi simpan data saat create*/
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    /*fungsi edit data berdasarkan ID (kolom JadwalId)*/
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["JadwalId" => $id])->row();
    }

    /*fungsi update/simpan data yang diedit*/
    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('JadwalId' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("JadwalId" => $id));
    }
}
