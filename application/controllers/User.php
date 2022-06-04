<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if($this->session->userdata('is_login')!=true) {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get("user")->result();
       $this->load->view('template/header');
       $this->load->view('user/index',$data);
       $this->load->view('template/footer'); 
    }

    public function create()
    {
        $this->load->view('template/header');
        $this->load->view('user/create');
        $this->load->view('template/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('nama', 'ID Account', 'required');
        $this->form_validation->set_rules('username', 'Nama Account', 'required');
        $this->form_validation->set_rules('password', 'Detail', 'required');

        if ($this->form_validation->run() == true) {
            $data['nama'] = $this->input->post('nama');
            $data['username'] = $this->input->post('username');
            $data['password'] = md5($this->input->post('password'));
            $this->db->insert('user', $data);
            redirect('user/index');
        } else {
            $this->load->view('template/header');
            $this->load->view('user/create');
            $this->load->view('template/footer');
        }
    }

    function edit($id)
    {
        $data['user'] = $this->db->get_where('user',['id'=>$id])->row_array();
        $this->load->view('template/header');
        $this->load->view('user/edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() == true) {
            $post = $this->input->post();
            $data = array(
                'nama' => $post['nama'], 
                'username' => $post['username'], 
            );
            if (isset($post['password'])) {
                $data['password'] = md5($post['password']);
            }
            $this->db->update('user', $data, ['id'=>$post['id']]);
            
            redirect('user');
        } else {
            $AccountId = $this->input->post('AccountId');
            $this->load->view('template/header');
            $this->load->view('user/create');
            $this->load->view('template/footer');
        }
    }

    function delete($id)
    {
        $this->db->delete('user', array('id' => $id));
        redirect('user');
    }


}

/* End of file User.php */



?>