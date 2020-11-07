<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->library('form_validation');

        if ($this->session->userdata('email') == '') {
            redirect('login');
        }
    }

    public function index()
    {
        $data['isi_user'] = $this->m_user->getAll()->result();
        $data['page'] = 'user/v_user';
        $this->load->view('v_homepage', $data);
    }

    function delete($id)
    {
        $this->m_user->deleteData($id);
        return redirect('admin/user/index');
    }

    function tambah()
    {
        $data['page'] = 'user/v_tambah_user';

        $this->load->view('v_homepage', $data);
    }

    function proses_tambah()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[6]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {
            $data['page'] = 'user/v_tambah_user';
            $this->load->view('v_homepage', $data);
        } else {

            $data = array(
                'email' => $this->input->post('email'),
                'name' => $this->input->post('name'),
                'password' => sha1($this->input->post('password')),
                'status' => $this->input->post('status')
            );
            $this->m_user->add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            return redirect('admin/user/index');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->m_user->getselected($id)->row_object();

        $data['page'] = 'user/v_edit_user';
        $this->load->view('v_homepage', $data);
    }

    function proses_edit()
    {

        $data = array(
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'),
            //'password' => sha1($this->input->post('password')),
            'status' => $this->input->post('status')

        );

        $id = $this->input->post('id');
        $this->m_user->edit($data, $id);
        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
        return redirect('admin/user/index');
    }

    public function data()
    {

        $isi['var_nama'] = 'Nama Mahasiswa';
        $isi['var_nim'] = 'NIM Mahasiswa';
        $this->load->view('v_data', $isi);
    }
}
