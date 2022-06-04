<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login');
    }

    public function action_login(){
        $post = $this->input->post();
        $cek = $this->db->get_where('user',['username'=>$post['username'],'password'=>md5($post['password'])])->num_rows();
        if ($cek > 0) {
            //jika ada
            $data = $this->db->get_where('user',['username'=>$post['username'],'password'=>md5($post['password'])])->row_array();
            $data_session = array(
                'id' => $data['id'],
                'nama' => $data['nama'],
                'username' => $data['username'],
                'is_login'=>true
            );

            
            $this->session->set_userdata($data_session);
            redirect('home','refresh'); 
        }else {
            $this->session->set_flashdata('msg','swal("Login Gagal!", "Username atau password salah!", "error");');
            
            redirect('login','refresh');
            
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        
        redirect('home','refresh');
        
    }

}

/* End of file Login.php */



?>