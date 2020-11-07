<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('v_login');
    }

    function proses_login()
    {
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        if ($this->form_validation->run() == false) {
            $this->load->view('v_login');
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => sha1($this->input->post('password'))
            );
            $result = $this->m_login->cek_login($data);
            if ($result == 1) {
                $data_user = $this->m_login->get_user($data)->row_object();
                $data_login = array(
                    'name' => $data_user->name,
                    'email' => $data_user->email,
                    'status' => $data_user->status
                );
                $this->session->set_userdata($data_login);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('pesan', 'Email atau password salah.');
                redirect('login');
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
